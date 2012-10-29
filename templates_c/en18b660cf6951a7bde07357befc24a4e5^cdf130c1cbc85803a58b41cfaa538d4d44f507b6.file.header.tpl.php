<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:10
         compiled from "/var/www/tiki/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1930414765508e4b7661e5d4-19608453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf130c1cbc85803a58b41cfaa538d4d44f507b6' => 
    array (
      0 => '/var/www/tiki/templates/header.tpl',
      1 => 1343872914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1930414765508e4b7661e5d4-19608453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_uri' => 0,
    'dir_level' => 0,
    'prefs' => 0,
    'forum_info' => 0,
    'thread_info' => 0,
    'freetags' => 0,
    'taginfo' => 0,
    'galleryId' => 0,
    'title' => 0,
    'metatag_local_keywords' => 0,
    'section' => 0,
    'blog_data' => 0,
    'postId' => 0,
    'post_info' => 0,
    'description' => 0,
    'metatag_robots' => 0,
    'sswindowtitle' => 0,
    'trail' => 0,
    'structure' => 0,
    'structure_path' => 0,
    'page_description_title' => 0,
    'tracker_item_main_value' => 0,
    'aliasname' => 0,
    'page' => 0,
    'arttitle' => 0,
    'categ_info' => 0,
    'userinfo' => 0,
    'tracker_info' => 0,
    'headtitle' => 0,
    'editable' => 0,
    'tiki_p_edit' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_view' => 0,
    'tiki_p_read_blog' => 0,
    'tiki_p_read_article' => 0,
    'tiki_p_view_image_gallery' => 0,
    'tiki_p_view_file_gallery' => 0,
    'tiki_p_forum_read' => 0,
    'tiki_p_map_view' => 0,
    'tiki_p_view_directory' => 0,
    'tiki_p_view_calendar' => 0,
    'rsslist_trackers' => 0,
    'tracker' => 0,
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b774ccc94_81914537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b774ccc94_81914537')) {function content_508e4b774ccc94_81914537($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tr_if')) include 'lib/smarty_tiki/modifier.tr_if.php';
if (!is_callable('smarty_function_breadcrumbs')) include 'lib/smarty_tiki/function.breadcrumbs.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_modifier_username')) include 'lib/smarty_tiki/modifier.username.php';
if (!is_callable('smarty_modifier_stringfix')) include 'lib/smarty_tiki/modifier.stringfix.php';
?>
<?php if ($_smarty_tpl->tpl_vars['base_uri']->value&&($_smarty_tpl->tpl_vars['dir_level']->value>0||$_smarty_tpl->tpl_vars['prefs']->value['feature_html_head_base_tag']=='y')){?>
	<base href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>

<!--Latest IE Compatibility-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="Tiki Wiki CMS Groupware - http://tiki.org" />


<?php echo $_smarty_tpl->getSubTemplate ("canonical.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<?php if (!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])&$_smarty_tpl->tpl_vars['prefs']->value['metatag_threadtitle']=='y'){?>
	<meta name="keywords" content="Forum <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['forum_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'){?><?php  $_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value){
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taginfo']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
 <?php } ?><?php }?>" />
<?php }elseif(isset($_smarty_tpl->tpl_vars['galleryId']->value)&&$_smarty_tpl->tpl_vars['galleryId']->value!=''&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_imagetitle']!='n'){?>
	<meta name="keywords" content="Images Galleries <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'){?><?php  $_smarty_tpl->tpl_vars['taginfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['taginfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->key => $_smarty_tpl->tpl_vars['taginfo']->value){
$_smarty_tpl->tpl_vars['taginfo']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taginfo']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
 <?php } ?><?php }?>" />
<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords']!=''||!empty($_smarty_tpl->tpl_vars['metatag_local_keywords']->value)){?>
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_keywords'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'){?><?php  $_smarty_tpl->tpl_vars["taginfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["taginfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['freetags']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["taginfo"]->key => $_smarty_tpl->tpl_vars["taginfo"]->value){
$_smarty_tpl->tpl_vars["taginfo"]->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taginfo']->value['tag'], ENT_QUOTES, 'UTF-8', true);?>
 <?php } ?><?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metatag_local_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_author']!=''){?>
	<meta name="author" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_author'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['section']->value=="blogs"){?>
	<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['title']==''){?>
	<meta name="description" content="Blog listing" />
	<?php }elseif($_smarty_tpl->tpl_vars['postId']->value==''){?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }else{ ?> 
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y'&&$_smarty_tpl->tpl_vars['description']->value!=''){?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['metatag_description']!=''||(isset($_smarty_tpl->tpl_vars['description']->value)&&$_smarty_tpl->tpl_vars['description']->value=='')){?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_description'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition']!=''){?>
	<meta name="geo.position" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoposition'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion']!=''){?>
	<meta name="geo.region" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_georegion'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename']!=''){?>
	<meta name="geo.placename" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_geoplacename'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']!='')&&(!isset($_smarty_tpl->tpl_vars['metatag_robots']->value)||$_smarty_tpl->tpl_vars['metatag_robots']->value=='')){?>
        <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ((!isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])||$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']=='')&&(isset($_smarty_tpl->tpl_vars['metatag_robots']->value)&&$_smarty_tpl->tpl_vars['metatag_robots']->value!='')){?>
        <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metatag_robots']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ((isset($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'])&&$_smarty_tpl->tpl_vars['prefs']->value['metatag_robots']!='')&&(isset($_smarty_tpl->tpl_vars['metatag_robots']->value)&&$_smarty_tpl->tpl_vars['metatag_robots']->value!='')){?>
        <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_robots'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metatag_robots']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter']!=''){?>
	<meta name="revisit-after" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['metatag_revisitafter'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>


<title><?php if (!empty($_smarty_tpl->tpl_vars['sswindowtitle']->value)){?><?php if ($_smarty_tpl->tpl_vars['sswindowtitle']->value=='none'){?>&nbsp;<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sswindowtitle']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location']=='before'){?><?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "page_description_title", null); ob_start(); ?><?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb']=="desc")&&isset($_smarty_tpl->tpl_vars['trail']->value)){?><?php echo smarty_function_breadcrumbs(array('type'=>$_smarty_tpl->tpl_vars['prefs']->value['site_title_breadcrumb'],'loc'=>"head",'crumbs'=>$_smarty_tpl->tpl_vars['trail']->value),$_smarty_tpl);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (isset($_smarty_tpl->tpl_vars['structure']->value)&&$_smarty_tpl->tpl_vars['structure']->value=='y'){?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['structure_path']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['structure_path']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_alias'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["aliasname"] = new Smarty_variable($_tmp1, null, 0);?><?php endfor; endif; ?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['page_description_title']->value)){?><?php echo $_smarty_tpl->tpl_vars['page_description_title']->value;?>
<?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['tracker_item_main_value']->value)){?><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['tracker_item_main_value']->value,255), ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['title']->value)&&!is_array($_smarty_tpl->tpl_vars['title']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['aliasname']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aliasname']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['page']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['description']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['arttitle']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arttitle']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['thread_info']->value['title'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['forum_info']->value['name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['forum_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['categ_info']->value['name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categ_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['userinfo']->value['login'])){?><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['tracker_info']->value['name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tracker_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['headtitle']->value)){?><?php echo htmlspecialchars(smarty_modifier_stringfix($_smarty_tpl->tpl_vars['headtitle']->value,"&nbsp;"), ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_title_location']=='after'){?> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_nav_seper'];?>
 <?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['prefs']->value['browsertitle']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?></title>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_favicon']){?>
	<link rel="icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['site_favicon'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['editable']->value)&&$_smarty_tpl->tpl_vars['editable']->value)&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')){?>
	<link rel="alternate" type="application/x-wiki" title="Edit this page!" href="tiki-editpage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
" />
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_wiki']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_wiki_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Wiki" : $tmp);?>
' href="tiki-wiki_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_blogs']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_blog']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_blogs_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Blogs" : $tmp);?>
' href="tiki-blogs_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_articles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_articles_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Articles" : $tmp);?>
' href="tiki-articles_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_image_gallery']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Image Galleries" : $tmp);?>
' href="tiki-image_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS File Galleries" : $tmp);?>
' href="tiki-file_galleries_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_forums_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Forums" : $tmp);?>
' href="tiki-forums_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_maps']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['rss_mapfiles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_map_view']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['title_rss_mapfiles'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Maps" : $tmp);?>
' href="tiki-map_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_directories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_directory']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_directories_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Directories" : $tmp);?>
' href="tiki-directories_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_calendar']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value=='y'){?>
	<link rel="alternate" type="application/rss+xml" title='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['feed_calendar_title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Calendars" : $tmp);?>
' href="tiki-calendars_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=='y'){?>
	<?php  $_smarty_tpl->tpl_vars["tracker"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tracker"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsslist_trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tracker"]->key => $_smarty_tpl->tpl_vars["tracker"]->value){
$_smarty_tpl->tpl_vars["tracker"]->_loop = true;
?>
		<link rel="alternate" type="application/rss+xml"
			  title='<?php echo (($tmp = @htmlspecialchars((($_smarty_tpl->tpl_vars['prefs']->value['feed_tracker_title']).(" - ")).($_smarty_tpl->tpl_vars['tracker']->value['name']), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "RSS Tracker" : $tmp);?>
'
			  href="tiki-tracker_rss.php?ver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['feed_default_version']);?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
" />
	<?php } ?>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_blog_sharethis']=='y')||($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_cms_sharethis']=='y')){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']!=''){?>
		<script type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"></script>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']==''){?>
		<script type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"></script>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']==''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']!=''){?>
		<script type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#publisher=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher'];?>
&amp;type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"></script>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['blog_sharethis_publisher']==''&&$_smarty_tpl->tpl_vars['prefs']->value['article_sharethis_publisher']==''){?>
		<script type="text/javascript" src="https://ws.sharethis.com/button/sharethis.js#type=website&amp;buttonText=&amp;onmouseover=false&amp;send_services=aim"></script>
	<?php }?>
<?php }?>

<!--[if lt IE 9]>
	<script src="lib/html5shim/html5.js" type="text/javascript"></script>
<![endif]-->

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value){?>		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_headers();?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content']){?>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['prefs']->value['feature_custom_html_head_content'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
<?php }?>

<?php }} ?>