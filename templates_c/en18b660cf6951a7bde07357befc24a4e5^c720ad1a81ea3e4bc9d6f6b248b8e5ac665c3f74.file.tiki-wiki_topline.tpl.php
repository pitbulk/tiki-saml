<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:36
         compiled from "/var/www/tiki/templates/tiki-wiki_topline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310044004508e4b90787a02-29828646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c720ad1a81ea3e4bc9d6f6b248b8e5ac665c3f74' => 
    array (
      0 => '/var/www/tiki/templates/tiki-wiki_topline.tpl',
      1 => 1340707786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310044004508e4b90787a02-29828646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_page_header' => 0,
    'prefs' => 0,
    'print_page' => 0,
    'page' => 0,
    'page_id' => 0,
    'crumbs' => 0,
    'cached_page' => 0,
    'is_categorized' => 0,
    'tiki_p_view_category' => 0,
    'display_catpath' => 0,
    'versioned' => 0,
    'pdf_export' => 0,
    'revision_approval' => 0,
    'lastVersion' => 0,
    'revision_displayed' => 0,
    'editable' => 0,
    'tiki_p_edit' => 0,
    'beingEdited' => 0,
    'machine_translate_to_lang' => 0,
    'page_ref_id' => 0,
    'needsStaging' => 0,
    'tiki_p_share' => 0,
    'tiki_p_tell_a_friend' => 0,
    'user' => 0,
    'tiki_p_notepad' => 0,
    'user_watching_page' => 0,
    'structure' => 0,
    'home_info' => 0,
    'tiki_p_watch_structure' => 0,
    'user_watching_structure' => 0,
    'page_info' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin' => 0,
    'backlinks' => 0,
    'tiki_p_view_backlink' => 0,
    'showstructs' => 0,
    'structure_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b9119dfa6_66011149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b9119dfa6_66011149')) {function content_508e4b9119dfa6_66011149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_breadcrumbs')) include 'lib/smarty_tiki/function.breadcrumbs.php';
if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_ajax_href')) include 'lib/smarty_tiki/block.ajax_href.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
?><div class="wikitopline clearfix" style="clear: both;">
	<div class="content">
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value){?>
			<div class="wikiinfo" style="float: left">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_page_name_above']=='y'&&$_smarty_tpl->tpl_vars['print_page']->value!='y'){?>
				    <a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
" class="titletop" title="refresh"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pageid']=='y'&&$_smarty_tpl->tpl_vars['print_page']->value!='y'){?>
					<small><a class="link" href="tiki-index.php?page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
">page id: <?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
</a></small>
				<?php }?>
				
				<?php echo smarty_function_breadcrumbs(array('type'=>"desc",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

				
				<?php if ($_smarty_tpl->tpl_vars['cached_page']->value=='y'){?><span class="cachedStatus">(Cached)</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categorypath']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_category']->value=='y'){?>
					<?php echo $_smarty_tpl->tpl_vars['display_catpath']->value;?>

				<?php }?>
			</div>

			<?php if (!isset($_smarty_tpl->tpl_vars['versioned']->value)){?>
				<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y'){?>
					<div class="wikiactions" style="float: right; padding-left:10px; white-space: nowrap">
						<div class="icons" style="float: left;">
							<?php if ($_smarty_tpl->tpl_vars['pdf_export']->value=='y'){?>
								<a href="tiki-print.php?<?php echo smarty_function_query(array('display'=>"pdf",'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" title="PDF"><?php echo smarty_function_icon(array('_id'=>'page_white_acrobat','alt'=>"PDF"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']!='y'||!$_smarty_tpl->tpl_vars['revision_approval']->value||$_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value){?>
								<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y'&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value==''){?>
									<a title="Edit this page" <?php $_smarty_tpl->smarty->_tag_stack[] = array('ajax_href', array('template'=>"tiki-editpage.tpl")); $_block_repeat=true; echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tiki-editpage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)&&$_smarty_tpl->tpl_vars['needsStaging']->value!='y'){?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ajax_href(array('template'=>"tiki-editpage.tpl"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
><?php echo smarty_function_icon(array('_id'=>'page_edit','alt'=>"Edit this page"),$_smarty_tpl);?>
</a>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_icons_toggle']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_plugin']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y')){?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											$("#wiki_plugin_edit_view").click( function () {
												var src = $("#wiki_plugin_edit_view img").attr("src");
												if (src.indexOf("wiki_plugin_edit_view") > -1) {
													$(".editplugin, .icon_edit_section").show();
													$("#wiki_plugin_edit_view img").attr("src", src.replace("wiki_plugin_edit_view", "wiki_plugin_edit_hide"));
													setCookieBrowser("wiki_plugin_edit_view", true);
												} else {
													$(".editplugin, .icon_edit_section").hide();
													$("#wiki_plugin_edit_view img").attr("src", src.replace("wiki_plugin_edit_hide", "wiki_plugin_edit_view"));
													deleteCookie("wiki_plugin_edit_view");
												}
												return false;
											});
											if (!getCookie("wiki_plugin_edit_view")) {$(".editplugin, .icon_edit_section").hide(); } else { $("#wiki_plugin_edit_view").click(); }
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<a title="View edit icons" href="#" id="wiki_plugin_edit_view"><?php echo smarty_function_icon(array('_id'=>'wiki_plugin_edit_view','title'=>"View edit icons"),$_smarty_tpl);?>
</a>
									<?php }?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_morcego']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_3d']=='y'){?>
								<a title="3d browser" href="javascript:wiki3d_open('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
',<?php echo $_smarty_tpl->tpl_vars['prefs']->value['wiki_3d_width'];?>
, <?php echo $_smarty_tpl->tpl_vars['prefs']->value['wiki_3d_height'];?>
)"><?php echo smarty_function_icon(array('_id'=>'wiki3d','alt'=>"3d browser"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['cached_page']->value=='y'){?>
								<a title="Refresh" href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;refresh=1"><?php echo smarty_function_icon(array('_id'=>'arrow_refresh'),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_print']=='y'){?>
								<a title="Print" href="tiki-print.php?<?php if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
&amp;<?php }?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo smarty_function_icon(array('_id'=>'printer','alt'=>"Print"),$_smarty_tpl);?>
</a>
							<?php }?>
					
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_share']->value=='y'){?>
								<a title="Share this page" href="tiki-share.php?url=<?php echo rawurlencode($_SERVER['REQUEST_URI']);?>
"><?php echo smarty_function_icon(array('_id'=>'share_link','alt'=>"Share this page"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tell_a_friend']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tell_a_friend']->value=='y'){?>
								<a title="Send a link" href="tiki-tell_a_friend.php?url=<?php echo rawurlencode($_SERVER['REQUEST_URI']);?>
"><?php echo smarty_function_icon(array('_id'=>'email_link','alt'=>"Send a link"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_notepad']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_notepad']->value=='y'){?>
								<a title="Save to notepad" href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;savenotepad=1<?php if (!empty($_smarty_tpl->tpl_vars['page_ref_id']->value)){?>&amp;page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
<?php }?>"><?php echo smarty_function_icon(array('_id'=>'disk','alt'=>"Save to notepad"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'){?>
								<?php if ($_smarty_tpl->tpl_vars['user_watching_page']->value=='n'){?>
									<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_action=add<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'){?>&amp;structure=<?php echo rawurlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
<?php }?>" class="icon"><?php echo smarty_function_icon(array('_id'=>'eye','alt'=>"Page is NOT being monitored. Click icon to START monitoring."),$_smarty_tpl);?>
</a>
								<?php }else{ ?>
									<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_event=wiki_page_changed&amp;watch_object=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_action=remove<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'){?>&amp;structure=<?php echo rawurlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
<?php }?>" class="icon"><?php echo smarty_function_icon(array('_id'=>'no_eye','alt'=>"Page IS being monitored. Click icon to STOP monitoring."),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_watch_structure']->value=='y'){?>
									<?php if ($_smarty_tpl->tpl_vars['user_watching_structure']->value!='y'){?>
										<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=add_desc&amp;structure=<?php echo rawurlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
"><?php echo smarty_function_icon(array('_id'=>'eye_arrow_down','alt'=>"Monitor the Sub-Structure"),$_smarty_tpl);?>
</a>
									<?php }else{ ?>
										<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_event=structure_changed&amp;watch_object=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
&amp;watch_action=remove_desc&amp;structure=<?php echo rawurlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
"><?php echo smarty_function_icon(array('_id'=>'no_eye_arrow_down','alt'=>"Stop Monitoring the Sub-Structure"),$_smarty_tpl);?>
</a>
									<?php }?>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')){?>
								<a href="tiki-object_watches.php?objectId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;watch_event=wiki_page_changed&amp;objectType=wiki+page&amp;objectName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;objectHref=<?php echo rawurlencode(('tiki-index.php?page=').($_smarty_tpl->tpl_vars['page']->value));?>
" class="icon"><?php echo smarty_function_icon(array('_id'=>'eye_group','alt'=>"Group Monitor"),$_smarty_tpl);?>
</a>
					
								<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'){?>
									<a href="tiki-object_watches.php?objectId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page_info']->value['page_ref_id']);?>
&amp;watch_event=structure_changed&amp;objectType=structure&amp;objectName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;objectHref=<?php echo rawurlencode(('tiki-index.php?page_ref_id=').($_smarty_tpl->tpl_vars['page_ref_id']->value));?>
" class="icon"><?php echo smarty_function_icon(array('_id'=>'eye_group_arrow_down','alt'=>"Group Monitor on Structure"),$_smarty_tpl);?>
</a>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks']=='y'&&$_smarty_tpl->tpl_vars['backlinks']->value&&$_smarty_tpl->tpl_vars['tiki_p_view_backlink']->value=='y'){?>
								<div class="backlinks_button">
									<ul class="clearfix cssmenu_horiz">
										<li class="tabmark">
											<?php echo smarty_function_icon(array('_id'=>'arrow_turn_left','title'=>"Backlinks",'class'=>"icon"),$_smarty_tpl);?>

											<ul class="backlinks_poppedup">
												<li class="tabcontent">
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['backlinks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
													<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['fromPage']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['fromPage'], ENT_QUOTES, 'UTF-8', true);?>
">
														<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len']>='1'){?><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['fromPage'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_backlinks_name_len'],"...",true), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backlinks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]['fromPage'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
													</a>
													<?php endfor; endif; ?>
												</li>
											</ul>
										</li>
									</ul>
								</div>		
							<?php }?>
							<?php if (($_smarty_tpl->tpl_vars['structure']->value=='y'&&count($_smarty_tpl->tpl_vars['showstructs']->value)>1)||($_smarty_tpl->tpl_vars['structure']->value=='n'&&count($_smarty_tpl->tpl_vars['showstructs']->value)!=0)){?>
								<div class="structure_select">
									<ul class="clearfix cssmenu_horiz">
										<li class="tabmark">
											<?php echo smarty_function_icon(array('_id'=>'chart_organisation','title'=>"Structures",'class'=>"icon"),$_smarty_tpl);?>

											<ul class="structure_poppedup">
												<li class="tabcontent">
													<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['struct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['name'] = 'struct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['showstructs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['struct']['total']);
?>
														<a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&structure=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']==$_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName']){?> title="Current structure: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
" class="selected" <?php }else{ ?> title="Show structure: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
															<?php if ($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['page_alias']){?>														
																<?php echo $_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['page_alias'];?>

															<?php }else{ ?>
																<?php echo $_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName'];?>

															<?php }?>
														</a>
													<?php endfor; endif; ?>
													<?php if ($_smarty_tpl->tpl_vars['showstructs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['struct']['index']]['pageName']!=$_smarty_tpl->tpl_vars['structure_path']->value[0]['pageName']){?>
														<a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
" title="Hide structure bar">
															Hide structure
														</a>
													<?php }?>	
												</li>
											</ul>
										</li>
									</ul>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['show_available_translations']=='y'&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value==''){?>
								<div class="lang_select">
									<?php echo $_smarty_tpl->getSubTemplate ('translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('object_type'=>'wiki page'), 0);?>

								</div>
							<?php }?>
						</div><!-- END of icons -->
					</div> 
				<?php }?> 
			<?php }?>
		<?php }?> 
	</div> 
</div> 
<?php }} ?>