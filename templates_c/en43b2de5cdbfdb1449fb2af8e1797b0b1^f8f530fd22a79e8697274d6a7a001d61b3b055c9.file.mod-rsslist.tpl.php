<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:09
         compiled from "/var/www/tiki/templates/modules/mod-rsslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766719580508e4b75510c67-12814677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8f530fd22a79e8697274d6a7a001d61b3b055c9' => 
    array (
      0 => '/var/www/tiki/templates/modules/mod-rsslist.tpl',
      1 => 1331837580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766719580508e4b75510c67-12814677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'prefs' => 0,
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b757f00b3_31702461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b757f00b3_31702461')) {function content_508e4b757f00b3_31702461($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <div id="rss">
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_wiki']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=='y'){?>
        <a class="linkmodule" title="Wiki feed" href="tiki-wiki_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Wiki
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_blogs']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_blog']->value=='y'){?>
        <a class="linkmodule" title="Blogs feed" href="tiki-blogs_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Blogs
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_articles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_read_article']->value=='y'){?>
        <a class="linkmodule" title="Articles feed" href="tiki-articles_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Articles
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_image_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_image_gallery']->value=='y'){?>
        <a class="linkmodule" title="Image Galleries feed" href="tiki-image_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Image Galleries
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_file_gallery']->value=='y'){?>
        <a class="linkmodule" title="File Galleries feed" href="tiki-file_galleries_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        File Galleries
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y'){?>
        <a class="linkmodule" title="Forums feed" href="tiki-forums_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Forums
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_maps']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['rss_mapfiles']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_map_view']->value=='y'){?>
        <a class="linkmodule" title="Maps feed" href="tiki-map_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Maps
        </a>
        <br />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_directories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_directory']->value=='y'){?>
        <a class="linkmodule" href="tiki-directories_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
        Directories
        </a>
        <br />
    <?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_calendar']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_calendar']->value=='y'){?>
       <a class="linkmodule" href="tiki-calendars_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
"><img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
       Calendars
       </a>
       <br />
   <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feed_tracker']=='y'){?>
		<?php  $_smarty_tpl->tpl_vars["tracker"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tracker"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsslist_trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tracker"]->key => $_smarty_tpl->tpl_vars["tracker"]->value){
$_smarty_tpl->tpl_vars["tracker"]->_loop = true;
?>
			<a class="linkmodule" href="tiki-tracker_rss.php?ver=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feed_default_version'];?>
&trackerId=<?php echo $_smarty_tpl->tpl_vars['tracker']->value['trackerId'];?>
">
				<img src='img/icons/feed.png' style='border: 0; vertical-align: text-bottom;' alt="Feed" title="Feed" width='16' height='16' />
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['tracker']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</a>
			<br />
		<?php } ?>
	<?php }?>
  </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"rsslist",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>