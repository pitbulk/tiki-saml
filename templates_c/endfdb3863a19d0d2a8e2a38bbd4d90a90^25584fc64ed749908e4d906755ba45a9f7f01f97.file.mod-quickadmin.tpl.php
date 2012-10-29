<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:37
         compiled from "/var/www/tiki/templates/modules/mod-quickadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:445780313508e4b91c52a34-41707481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25584fc64ed749908e4d906755ba45a9f7f01f97' => 
    array (
      0 => '/var/www/tiki/templates/modules/mod-quickadmin.tpl',
      1 => 1345823494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445780313508e4b91c52a34-41707481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'tiki_p_admin' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b91e80d58_37277096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b91e80d58_37277096')) {function content_508e4b91e80d58_37277096($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y"){?>
		<div id="quickadmin" style="text-align: left; padding-left: 12px;"><small>Quick Admin</small>:
			<?php echo smarty_function_icon(array('_id'=>'house','title'=>"Admin home",'href'=>"tiki-admin.php"),$_smarty_tpl);?>
 
			<?php echo smarty_function_icon(array('_id'=>'wrench','title'=>"Modify the look &amp; feel (logo, theme, etc.)",'href'=>"tiki-admin.php?page=look&amp;cookietab=2"),$_smarty_tpl);?>
 
			<?php echo smarty_function_icon(array('_id'=>'user','title'=>"Users",'href'=>"tiki-adminusers.php"),$_smarty_tpl);?>

			<?php echo smarty_function_icon(array('_id'=>'group','title'=>"Groups",'href'=>"tiki-admingroups.php"),$_smarty_tpl);?>
			
			<?php echo smarty_function_icon(array('_id'=>'key','title'=>"Permissions",'href'=>"tiki-objectpermissions.php"),$_smarty_tpl);?>

			<?php echo smarty_function_icon(array('_id'=>'application_side_tree','title'=>"Menus",'href'=>"tiki-admin_menus.php"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db']=="y"){?>
				<?php if (isset($_SESSION['interactive_translation_mode'])&&$_SESSION['interactive_translation_mode']=="on"){?>
					<?php echo smarty_function_icon(array('_id'=>'world_edit','title'=>"Toggle interactive translation off",'href'=>"tiki-interactive_trans.php?interactive_translation_mode=off"),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smarty_function_icon(array('_id'=>'world_edit','title'=>"Toggle interactive translation on",'href'=>"tiki-interactive_trans.php?interactive_translation_mode=on"),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_feature']=="y"&&!empty($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_theme'])){?>
				<?php echo smarty_function_icon(array('_id'=>"palette",'title'=>"Theme Generator Editor",'href'=>"#",'onclick'=>"openThemeGenDialog();return false;"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation']=="y"){?>
				<?php echo smarty_function_icon(array('_id'=>'comments','title'=>"Comments Moderation",'href'=>"tiki-list_comments.php"),$_smarty_tpl);?>

			<?php }?>
			<?php echo smarty_function_icon(array('_id'=>'database_refresh','title'=>"Clear all Tiki caches",'href'=>"tiki-admin_system.php?do=all"),$_smarty_tpl);?>

            <?php echo smarty_function_icon(array('_id'=>'table_refresh','title'=>"Rebuild Search index",'href'=>"tiki-admin.php?page=search&amp;rebuild=now"),$_smarty_tpl);?>

            <?php echo smarty_function_icon(array('_id'=>'plugin','title'=>"Plugin Approval",'href'=>"tiki-plugins.php"),$_smarty_tpl);?>

			<?php echo smarty_function_icon(array('_id'=>'book','title'=>"SysLogs",'href'=>"tiki-syslog.php"),$_smarty_tpl);?>

			<?php echo smarty_function_icon(array('_id'=>'module','title'=>"Modules",'href'=>"tiki-admin_modules.php"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']){?>
				<?php ob_start();?><?php echo smarty_function_query(array('_type'=>'relative','show_smarty_debug'=>1),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_icon(array('_id'=>'bug','title'=>"Open Smarty debug window",'href'=>$_tmp1),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quickadmin",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>