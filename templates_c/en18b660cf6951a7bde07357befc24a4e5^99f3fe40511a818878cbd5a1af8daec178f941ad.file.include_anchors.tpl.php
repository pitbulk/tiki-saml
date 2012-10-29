<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:25
         compiled from "/var/www/tiki/templates/admin/include_anchors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699096323508e4bc10c94a6-36749137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f3fe40511a818878cbd5a1af8daec178f941ad' => 
    array (
      0 => '/var/www/tiki/templates/admin/include_anchors.tpl',
      1 => 1314802449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699096323508e4bc10c94a6-36749137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icons' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bc115fd51_21943581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bc115fd51_21943581')) {function content_508e4bc115fd51_21943581($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>

<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
	<?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']&&$_smarty_tpl->tpl_vars['info']->value['icon']){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>"icon tips",'_title'=>((string)$_smarty_tpl->tpl_vars['info']->value['title'])."|".((string)$_smarty_tpl->tpl_vars['info']->value['description']))); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>"icon tips",'_title'=>((string)$_smarty_tpl->tpl_vars['info']->value['title'])."|".((string)$_smarty_tpl->tpl_vars['info']->value['description'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['info']->value['icon'],'alt'=>$_smarty_tpl->tpl_vars['info']->value['title'],'class'=>"reflect",'style'=>"vertical-align: middle",'width'=>"32",'height'=>"32"),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'_class'=>"icon tips",'_title'=>((string)$_smarty_tpl->tpl_vars['info']->value['title'])."|".((string)$_smarty_tpl->tpl_vars['info']->value['description'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php } ?>

<br class="clear" />
<?php }} ?>