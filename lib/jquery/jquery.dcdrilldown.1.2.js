/*

 * DC jQuery Drill Down Menu - jQuery drill down ipod menu
 * Copyright (c) 2011 Design Chemical
 *
 * Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
 *
 */

(function($){

	//define the new for the plugin ans how to call it
	$.fn.dcDrilldown = function(options) {

		//set default options
		var defaults = {
			classWrapper	: 'dd-wrapper',
			classMenu		: 'dd-menu',
			classParent		: 'dd-parent',
			classParentLink	: 'dd-parent-a',
			classActive		: 'active',
			classHeader		: 'dd-header',
			eventType		: 'click',
			eventPreventDefault: true,
			hoverDelay		: 300,
			speed       	: 'slow',
			saveState		: true,
			showCount		: true,
			classCount		: 'dd-count',
			classIcon		: 'dd-icon',
			linkType		: 'backlink',
			resetText		: 'All',
			headerTag		: 'h3',
			defaultText		: 'Select Option',
			includeHdr		: true,
			horizontal      : false
		};

		//call in the default otions
		var options = $.extend(defaults, options);

		//act upon the element that is passed into the design
		return this.each(function(){

			var $dcDrilldownObj = this, $wrapper, $dcWrapper, objIndex, idHeader, $header, lists;
			$($dcDrilldownObj).addClass(options.classMenu);
			lists = $('li a',$dcDrilldownObj).each(function(i) {
				$(this).data('i', i);
			});

			if (options.horizontal) {
				$wrapper = '<table class="'+options.classWrapper+'"><tr><td></td></tr></table>';
				$($dcDrilldownObj).wrap($wrapper);
				$dcWrapper = $($dcDrilldownObj).parent().parent().parent();
				objIndex = $($dcWrapper).index('.'+options.classWrapper);
				idHeader = options.classHeader+'-'+objIndex;
				idWrapper = options.classWrapper+'-'+objIndex;
				$($dcWrapper).attr('id',idWrapper);
				$header = '<td><div id="'+idHeader+'" class="'+options.classHeader+'"></div></td>';
			} else {
				$wrapper = '<div class="'+options.classWrapper+'" />';
				$($dcDrilldownObj).wrap($wrapper);
				$dcWrapper = $($dcDrilldownObj).parent();
				objIndex = $($dcWrapper).index('.'+options.classWrapper);
				idHeader = options.classHeader+'-'+objIndex;
				idWrapper = options.classWrapper+'-'+objIndex;
				$($dcWrapper).attr('id',idWrapper);
				$header = '<div id="'+idHeader+'" class="'+options.classHeader+'"></div>';
			}

			setUpDrilldown.apply($dcDrilldownObj);

			if(options.saveState == true){
				var cookieId = options.classWrapper+'-'+objIndex;
				checkCookie.apply($dcDrilldownObj, [cookieId, $dcWrapper, $dcDrilldownObj]);
			}

			resetDrilldown.apply($dcDrilldownObj, [$dcDrilldownObj, $dcWrapper]);

			$($dcDrilldownObj).data('drilldownSetup', true);

			lists.each(function(i) {
				$(this).bind(options.eventType, function(e){

					$link = this;
					$activeLi = $(this).parent('li').stop();
					$siblingsLi = $($activeLi).siblings();

					// Drilldown action
					$activeLi.parent().find('a').removeClass(options.classActive);

					if($('> ul',$activeLi).length){
						if($($link).hasClass(options.classActive)){
							resetDrilldown.apply($dcDrilldownObj, [$dcDrilldownObj, $dcWrapper]);
						} else {
							actionDrilldown.apply($dcDrilldownObj, [$activeLi, $dcWrapper, $dcDrilldownObj]);
						}
					} else if (options.linkType == 'breadcrumb' && options.saveState == true) {
						var cookieId = $($dcWrapper).attr('id');
						$(this).addClass(options.classActive);
						createCookie.apply($dcDrilldownObj, [cookieId, $dcDrilldownObj]);
					}

					// Prevent browsing to link if has child links
					if($(this).next('ul').length > 0 && options.eventPreventDefault){
						e.preventDefault();
					}
				});

			});

			// Set up accordion
			function setUpDrilldown(){

				$arrow = '<span class="'+defaults.classIcon+'"></span>';

				if (options.horizontal) {
					$($dcDrilldownObj).parent().before($header);
				} else {
					$($dcDrilldownObj).before($header);
				}

				// Get width of menu container & height of list item
				var totalWidth = $($dcDrilldownObj).outerWidth();
				totalWidth += 'px';
				var itemHeight = $('li',$dcDrilldownObj).outerHeight(true);

				// Get height of largest sub menu
				var objUl = $('ul',$dcDrilldownObj);
				var maxItems = findMaxHeight(objUl);

				// Get level of largest sub menu
				var maxUl = $(objUl+'[rel="'+maxItems+'"]');
				var getIndex = findMaxIndex(maxUl);

				// Set menu container height
				if(defaults.linkType == 'link'){
					menuHeight = itemHeight * (maxItems + getIndex);
				} else {
					menuHeight = itemHeight * maxItems;
				}
				$($dcDrilldownObj).css({height: menuHeight+'px', width: totalWidth});

				// Set sub menu width and offset
				$('li',$dcDrilldownObj).each(function(){
					$(this).css({width: totalWidth});
					$('ul',this).css({width: totalWidth, marginRight: '-'+totalWidth, marginTop: '0'});
					if($('> ul',this).length){
						$(this).addClass(defaults.classParent);
						$('> a',this).addClass(defaults.classParentLink).append($arrow);
						if(defaults.showCount == true){
							var parentLink = $('a:not(.'+defaults.classParentLink+')',this);
							var countParent = parseInt($(parentLink).length);
							getCount = countParent;
							$('> a',this).append(' <span class="'+defaults.classCount+'">('+getCount+')</span>');
						}
					}
				});

				// Add css class
				$('ul',$dcWrapper).each(function(){
					$('li:last',this).addClass('last');
				});
				$('> ul > li:last',$dcWrapper).addClass('last');
				if(defaults.linkType == 'link'){
					$(objUl).css('top',itemHeight+'px');
				}
			}

			// Breadcrumbs
			var parent = this;
			$('#'+idHeader+' a').live(options.eventType,function(e){

				if($(this).hasClass('link-back')){
					linkIndex = $('#'+idWrapper+' .'+options.classParentLink+'.active').length;
					linkIndex = linkIndex-2;
					$('a.'+options.classActive+':last', $dcDrilldownObj).removeClass(options.classActive);
				} else {
					// Get link index
					var linkIndex = parseInt($(this).index('#'+idHeader+' a'));
					if(linkIndex == 0){
						$('a',$dcDrilldownObj).removeClass(options.classActive);
					} else {
						// Select equivalent active link
						linkIndex = linkIndex-1;
						$('a.'+options.classActive+':gt('+linkIndex+')',$dcDrilldownObj).removeClass(options.classActive);
					}
				}
				resetDrilldown.apply(parent, [$dcDrilldownObj, $dcWrapper]);

				if (options.eventPreventDefault || $(this).attr('href') == '#') {
					e.preventDefault();
				}
			});

			$(this).trigger('setUpDrilldown');
		});

		function findMaxHeight(element){
			var maxValue = undefined;
			$(element).each(function(){
				var val = parseInt($('> li',this).length);
				$(this).attr('rel',val);
				if (maxValue === undefined || maxValue < val){
					maxValue = val;
				}
			});
			return maxValue;
		}

		function findMaxIndex(element){
			var maxIndex = undefined;
			$(element).each(function(){
				var val = parseInt($(this).parents('li').length);
				if (maxIndex === undefined || maxIndex < val) {
					maxIndex = val;
				}
			});
			return maxIndex;
		}

		// Retrieve cookie value and set active items
		function checkCookie(cookieId, wrapper, obj){
			var cookieVal = $.cookie(cookieId);
			if(cookieVal != null){
				// create array from cookie string
				var activeArray = cookieVal.split(','),
					parent = this;
				$.each(activeArray, function(index,value){
					var $cookieLi = $('li:eq('+value+')',obj);
					$('a',$cookieLi.parent()).removeClass(options.classActive);
					actionDrilldown.apply(parent, [$cookieLi, wrapper, obj]);
				});
			}
		}

		// Drill Down
		function actionDrilldown(element, wrapper, obj){
			// Declare header
			if ($('ul', element).length > 0) {
				var $header = $('.'+options.classHeader, wrapper);

				// Get new breadcrumb and header text
				var getNewBreadcrumb = $(options.headerTag,$header).html();
				var getNewHeaderText = $('> a',element).html();

				// Add new breadcrumb
				if(options.linkType == 'breadcrumb'){
					if(!$('ul',$header).length){
						$($header).prepend('<ul></ul>');
					}
					if(getNewBreadcrumb == options.defaultText){
						$('ul',$header).append('<li><a href="#" class="first">'+options.resetText+'</a></li>');
					} else {
						var href = $(element).find('a:first').attr('href') || '#';
						$('ul',$header).append('<li><a href="' + href + '">'+getNewBreadcrumb+'</a></li>');
					}
				}
				if(options.linkType == 'backlink'){
					if(!$('a',$header).length){
						$($header).prepend('<a href="#" class="link-back">'+getNewBreadcrumb+'</a>');
					} else {
						$('.link-back',$header).html(getNewBreadcrumb);
					}
				}
				if(options.linkType == 'link'){
					if(!$('a',$header).length){
						$($header).prepend('<ul><li><a href="#" class="first">'+options.resetText+'</a></li></ul>');
					}
				}
				// Update header text
				updateHeader.apply(this, [$header, getNewHeaderText]);

				// declare child link
				var activeLink = $('> a',element);

				// add active class to link
				$(activeLink).addClass(options.classActive);
				$('> ul li',element).show();
				var parent = this;
				animate.apply(this, [$('> ul',element), {"margin-right": 0}, options.speed, function() {
					$(parent).trigger('actionDrilldown', [element, wrapper, obj]);
				}]);

				// Find all sibling items & hide
				var $siblingsLi = $(element).siblings();
				$($siblingsLi).hide();

				// If using breadcrumbs hide this element
				if(options.linkType != 'link'){
					$(activeLink).hide();
				}
			} else {
				$('> a',element).addClass(options.classActive);
				$(this).trigger('actionDrilldown', [element, wrapper, obj]);
			}
			// Write cookie if save state is on
			if(options.saveState == true){
				var cookieId = $(wrapper).attr('id');
				createCookie.apply(this, [cookieId, obj]);
			}
		}

		// Drill Up
		function actionDrillUp(element, obj, wrapper){
			// Declare header
			var $header = $('.'+options.classHeader, wrapper);

			var activeLink = $('> a',element);
			var checklength = $('.'+options.classActive, wrapper).length;
			var activeIndex = $(activeLink).index('.'+options.classActive, wrapper);

			// Get width of menu for animating right
			var totalWidth = $(obj).outerWidth(true);
			$('ul',element).css('margin-right',-totalWidth+'px');

			// Show all elements
			$(activeLink).addClass(options.classActive);
			$('> ul li',element).show();
			$('a',element).show();

			// Get new header text from eventType link
			var getNewHeaderText = $('> a',element).html();
			$(options.headerTag,$header).html(getNewHeaderText);

			if(options.linkType == 'breadcrumb'){
				var breadcrumbIndex = activeIndex-1;
				$('a:gt('+activeIndex+')',$header).remove();
			}

			$(this).trigger('actionDrillUp', [element, obj, wrapper]);
		}

		function updateHeader(obj, html){
			if(options.includeHdr == true){
				if($(obj).children(options.headerTag).length){
					$(obj).children(options.headerTag).html(html);
				} else {
					$(obj).append('<'+options.headerTag+'>'+html+'</'+options.headerTag+'>');
				}
			}

			$(this).trigger('updateHeader', [obj, html]);
		}

		// Reset accordion using active links
		function resetDrilldown(obj, wrapper){
			var $header = $('.'+options.classHeader, wrapper);
			$('ul',$header).remove();
			$('a',$header).remove();
			$('li',obj).show();
			$('a',obj).show();
			var totalWidth = $(obj).outerWidth(true);
			if(options.linkType == "link"){
				if($('a.'+options.classActive+':last',obj).parent('li').length){
					var lastActive = $('a.'+options.classActive+':last',obj).parent('li');
					$('ul',lastActive).css('margin-right',-totalWidth+'px');
				}else {
				$('ul',obj).css('margin-right',-totalWidth+'px');
				}
			} else {
				$('ul',obj).css('margin-right',-totalWidth+'px');
			}

			updateHeader.apply(this, [$header, options.defaultText]);

			// Write cookie if save state is on
			if(options.saveState == true){
				var cookieId = $(wrapper).attr('id');
				createCookie.apply(this, [cookieId, obj]);
			}

			var parent = this;
			$('a.'+options.classActive,obj).each(function(i){
				var $activeLi = $(this).parent('li').stop();
				$('ul a',$activeLi).removeClass(options.classActive);
				actionDrilldown.apply(parent, [$activeLi, wrapper, obj]);
			});

			$(this).trigger('resetDrilldown', [obj, wrapper]);
		}

		// Write cookie
		function createCookie(cookieId, obj){
			if ($(this).data('drilldownSetup')) {
				var activeIndex = [];
				// Create array of active items index value

				$('a.'+options.classActive,obj).each(function(i){

					activeIndex.push($(this).data('i'));
				});

				// Store in cookie

				$.cookie(cookieId, activeIndex.join(','), { path: '/' });
				console.log($.cookie(cookieId));
			}
			return;
		}

		function animate(obj, css, speed, fn)
		{
			if ($(this).data('drilldownSetup')) {
				if (options.eventPreventDefault) {
					obj.animate(css, speed, fn);
				} else if (fn) {
					fn();
				}
			} else {
				obj.animate(css, 0, fn);
			}
		}
	};
})(jQuery);