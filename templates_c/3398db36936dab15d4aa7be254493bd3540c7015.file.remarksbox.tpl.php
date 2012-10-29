<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:26
         compiled from "/var/www/tiki/templates/remarksbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454271773508e4bc2250ac5-28338633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3398db36936dab15d4aa7be254493bd3540c7015' => 
    array (
      0 => '/var/www/tiki/templates/remarksbox.tpl',
      1 => 1305785661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454271773508e4bc2250ac5-28338633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'remarksbox_type' => 0,
    'remarksbox_close' => 0,
    'remarksbox_title' => 0,
    'remarksbox_icon' => 0,
    'remarksbox_highlight' => 0,
    'remarksbox_width' => 0,
    'remarksbox_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bc233b873_69323693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bc233b873_69323693')) {function content_508e4bc233b873_69323693($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?><div class="clearfix rbox <?php echo $_smarty_tpl->tpl_vars['remarksbox_type']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value=='y'&&$_smarty_tpl->tpl_vars['remarksbox_type']->value!='errors'&&$_smarty_tpl->tpl_vars['remarksbox_type']->value!='confirm'){?><?php echo smarty_function_icon(array('_id'=>'close','class'=>'rbox-close','onclick'=>'$(this).parent().fadeOut();'),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['remarksbox_title']->value!=''){?><div class="rbox-title"><?php if ($_smarty_tpl->tpl_vars['remarksbox_icon']->value!='none'){?><?php $_smarty_tpl->_capture_stack[0][] = array('alt', null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['remarksbox_type']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['remarksbox_icon']->value,'alt'=>Smarty::$_smarty_vars['capture']['alt']),$_smarty_tpl);?>
<?php }?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remarksbox_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></div><?php }?><div class="rbox-data<?php echo $_smarty_tpl->tpl_vars['remarksbox_highlight']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['remarksbox_width']->value)){?> style="width:<?php echo $_smarty_tpl->tpl_vars['remarksbox_width']->value;?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['remarksbox_content']->value;?>
</div></div><?php }} ?>