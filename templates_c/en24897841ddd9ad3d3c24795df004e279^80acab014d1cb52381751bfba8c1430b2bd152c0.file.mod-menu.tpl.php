<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:37
         compiled from "/var/www/tiki/templates/modules/mod-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2122143800508e4b91eb9ff5-47495052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80acab014d1cb52381751bfba8c1430b2bd152c0' => 
    array (
      0 => '/var/www/tiki/templates/modules/mod-menu.tpl',
      1 => 1316632344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2122143800508e4b91eb9ff5-47495052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_error' => 0,
    'tpl_module_title' => 0,
    'tpl_module_name' => 0,
    'module_params' => 0,
    'module_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b920382f4_84073051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b920382f4_84073051')) {function content_508e4b920382f4_84073051($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_function_menu')) include 'lib/smarty_tiki/function.menu.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value)); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['module_error']->value){?>
<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_id'])){?><div class="clearfix <?php echo $_smarty_tpl->tpl_vars['module_params']->value['menu_class'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['menu_id'];?>
"><?php }?>
<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value),$_smarty_tpl);?>

<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_id'])){?></div><?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'type'=>$_smarty_tpl->tpl_vars['module_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>