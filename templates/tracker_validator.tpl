{* $Id: tracker_validator.tpl 43241 2012-10-02 14:18:39Z jonnybradley $ *}
{if isset($validationjs)}{jq}
$("#editItemForm{{$trackerEditFormId}}").validate({
	{{$validationjs}},
	ignore: '.ignore',
	submitHandler: function(){
		if( typeof nosubmitItemForm{{$trackerEditFormId}} !== "undefined" && nosubmitItemForm{{$trackerEditFormId}} == true ) {
			return false;
		} else {
			process_submit(this.currentForm);
		}
	}
});
{/jq}{/if}
