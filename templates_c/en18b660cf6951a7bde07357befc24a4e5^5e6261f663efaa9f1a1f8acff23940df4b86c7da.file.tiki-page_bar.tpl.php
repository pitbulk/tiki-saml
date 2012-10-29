<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:37
         compiled from "/var/www/tiki/templates/tiki-page_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169552130508e4b912661f5-10986293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6261f663efaa9f1a1f8acff23940df4b86c7da' => 
    array (
      0 => '/var/www/tiki/templates/tiki-page_bar.tpl',
      1 => 1349801925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169552130508e4b912661f5-10986293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'versioned' => 0,
    'page' => 0,
    'edit_page' => 0,
    'editable' => 0,
    'tiki_p_edit' => 0,
    'user' => 0,
    'prefs' => 0,
    'tiki_p_admin_wiki' => 0,
    'beingEdited' => 0,
    'revision_approval' => 0,
    'lastVersion' => 0,
    'revision_displayed' => 0,
    'page_ref_id' => 0,
    'thisPageClass' => 0,
    'tiki_p_wiki_view_latest' => 0,
    'tiki_p_wiki_view_source' => 0,
    'tiki_p_remove' => 0,
    'tiki_p_rename' => 0,
    'tiki_p_lock' => 0,
    'lock' => 0,
    'page_user' => 0,
    'tiki_p_assign_perm_wiki_page' => 0,
    'tiki_p_wiki_view_history' => 0,
    'tiki_p_page_contribution_view' => 0,
    'tiki_p_wiki_view_similar' => 0,
    'canundo' => 0,
    'tiki_p_edit_structures' => 0,
    'structure' => 0,
    'showstructs' => 0,
    'show_slideshow' => 0,
    'page_info' => 0,
    'tiki_p_export_wiki' => 0,
    'show_page' => 0,
    'tiki_p_forum_post' => 0,
    'wiki_discussion_string' => 0,
    'info' => 0,
    'tiki_p_wiki_view_comments' => 0,
    'tiki_p_read_comments' => 0,
    'tiki_p_wiki_view_attachments' => 0,
    'atts' => 0,
    'tiki_p_wiki_attach_files' => 0,
    'tiki_p_wiki_admin_attachments' => 0,
    'thisbuttonclass' => 0,
    'thistext' => 0,
    'tiki_p_create_bookmarks' => 0,
    'page_bar' => 0,
    'wiki_extras' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b91bca984_55206565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b91bca984_55206565')) {function content_508e4b91bca984_55206565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_favorite')) include 'lib/smarty_tiki/function.favorite.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_service')) include 'lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_function_attachments')) include 'lib/smarty_tiki/function.attachments.php';
?>
<?php if (!isset($_smarty_tpl->tpl_vars['versioned']->value)||!$_smarty_tpl->tpl_vars['versioned']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_bar', null); ob_start(); ?><?php echo smarty_function_favorite(array('type'=>"wiki page",'object'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['edit_page']->value!='y'){?><?php if (($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')||(!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution']=='y'))||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'){?><?php if ($_smarty_tpl->tpl_vars['beingEdited']->value=='y'){?><?php $_smarty_tpl->tpl_vars['thisPageClass'] = new Smarty_variable('+highlight', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['thisPageClass'] = new Smarty_variable('', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']!='y'||!$_smarty_tpl->tpl_vars['revision_approval']->value||$_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-editpage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'page_ref_id'=>$_smarty_tpl->tpl_vars['page_ref_id']->value,'_class'=>$_smarty_tpl->tpl_vars['thisPageClass']->value,'_text'=>"Edit this page"),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'){?><span class="button"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View latest version before editing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_source']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>"0",'_text'=>"Source"),$_smarty_tpl);?>
<?php }?><?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?><?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'&&$_smarty_tpl->tpl_vars['editable']->value){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-removepage.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>"last",'_text'=>"Remove"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['tiki_p_rename']->value=='y'&&$_smarty_tpl->tpl_vars['editable']->value){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-rename_page.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Rename"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'){?><?php if (!$_smarty_tpl->tpl_vars['lock']->value){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'action'=>"lock",'_text'=>"Lock"),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['user']->value==$_smarty_tpl->tpl_vars['page_user']->value){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'action'=>"unlock",'_text'=>"Unlock"),$_smarty_tpl);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_assign_perm_wiki_page']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-objectpermissions.php",'objectId'=>$_smarty_tpl->tpl_vars['page']->value,'objectName'=>$_smarty_tpl->tpl_vars['page']->value,'objectType'=>"wiki+page",'permType'=>"wiki",'_text'=>"Permissions"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-pagehistory.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"History"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_contribution']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_page_contribution_view']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-page_contribution.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Contributions by author"),$_smarty_tpl);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_similar']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-likepages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Similar"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_undo']=='y'&&$_smarty_tpl->tpl_vars['canundo']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'undo'=>"1",'_text'=>"Undo"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_make_structure']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y'&&$_smarty_tpl->tpl_vars['editable']->value&&$_smarty_tpl->tpl_vars['structure']->value=='n'&&count($_smarty_tpl->tpl_vars['showstructs']->value)==0){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-index.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'convertstructure'=>"1",'_text'=>"Make Structure"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_uses_slides']=='y'){?><?php if ($_smarty_tpl->tpl_vars['show_slideshow']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-slideshow.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Slideshow"),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['structure']->value=='y'){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-slideshow2.php",'page_ref_id'=>$_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'],'_text'=>"Slideshow"),$_smarty_tpl);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y')){?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-export_wiki_pages.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Export"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_discuss']=='y'&&$_smarty_tpl->tpl_vars['show_page']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_post']->value=='y'){?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'wiki_discussion_string', null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ('wiki-discussion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 [tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
|<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-view_forum.php",'forumId'=>$_smarty_tpl->tpl_vars['prefs']->value['wiki_forum_id'],'comments_postComment'=>"post",'comments_title'=>$_smarty_tpl->tpl_vars['page']->value,'comments_data'=>$_smarty_tpl->tpl_vars['wiki_discussion_string']->value,'comment_topictype'=>"n",'_text'=>"Discuss"),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['show_page']->value=='y'){?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='y'||$_smarty_tpl->tpl_vars['info']->value['comments_enabled']=='y')&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_comments']->value=='y'){?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_displayed_default']=='y'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						var id = '#comment-container';
						$(id).comment_load('tiki-ajax_services.php?controller=comment&action=list&type=wiki+page&objectId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
#comment-container');
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><span class="button"><a id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"wiki page",'objectId'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
#comment-container">Comments</a></span><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$('#comment-toggle').comment_toggle();
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y'&&count($_smarty_tpl->tpl_vars['atts']->value)>0||$_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')){?><?php if (count($_smarty_tpl->tpl_vars['atts']->value)>0){?><?php $_smarty_tpl->tpl_vars['thisbuttonclass'] = new Smarty_variable('highlight', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['thisbuttonclass'] = new Smarty_variable('', null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'thistext', null); ob_start(); ?><?php if (count($_smarty_tpl->tpl_vars['atts']->value)==0||$_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='n'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='n'){?>Attach File<?php }elseif(count($_smarty_tpl->tpl_vars['atts']->value)==1){?>1 File Attached<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo count($_smarty_tpl->tpl_vars['atts']->value);?>
 files attached<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if (count($_smarty_tpl->tpl_vars['atts']->value)>0||$_smarty_tpl->tpl_vars['editable']->value){?>
					<?php echo smarty_function_button(array('href'=>"#attachments",'_flip_id'=>"attzone".((string)$_smarty_tpl->tpl_vars['pagemd5']->value),'_class'=>$_smarty_tpl->tpl_vars['thisbuttonclass']->value,'_text'=>$_smarty_tpl->tpl_vars['thistext']->value,'_flip_default_open'=>$_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default']),$_smarty_tpl);?>

					<?php }?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||(!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_encourage_contribution']=='y'))&&!$_smarty_tpl->tpl_vars['lock']->value){?>
					<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-edit_translation.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Translate"),$_smarty_tpl);?>

				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_keywords']=='y'){?>
					<?php echo smarty_function_button(array('_keepall'=>'y','href'=>"tiki-admin_keywords.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'_text'=>"Keywords"),$_smarty_tpl);?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value&&(isset($_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value)&&$_smarty_tpl->tpl_vars['tiki_p_create_bookmarks']->value=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_bookmarks']=='y'){?>
					<?php echo smarty_function_button(array('_script'=>"tiki-user_bookmarks.php",'urlname'=>$_smarty_tpl->tpl_vars['page']->value,'urlurl'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value),'addurl'=>"Add",'_text'=>"Bookmark",'_auto_args'=>"urlname,urlurl,addurl"),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
		<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php if ($_smarty_tpl->tpl_vars['page_bar']->value!=''){?>
		<div class="clearfix" id="page-bar">
			<?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['wiki_extras']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value=='y'){?>
		<a name="attachments"></a>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_use_fgal_for_wiki_attachments']=='y'){?>
			<?php echo smarty_function_attachments(array('_id'=>$_smarty_tpl->tpl_vars['page']->value,'_type'=>'wiki page'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('attachments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_comments']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_comments']->value=='y'&&$_smarty_tpl->tpl_vars['edit_page']->value!='y'){?>
		<div id="comment-container"></div>
	<?php }?>

	
<?php }?>
<?php }} ?>