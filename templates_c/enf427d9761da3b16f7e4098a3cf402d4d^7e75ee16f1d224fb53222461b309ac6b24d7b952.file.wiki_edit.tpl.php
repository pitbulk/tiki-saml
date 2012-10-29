<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:07
         compiled from "/var/www/tiki/templates/wiki_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1058127889508e4beba453d8-56534479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e75ee16f1d224fb53222461b309ac6b24d7b952' => 
    array (
      0 => '/var/www/tiki/templates/wiki_edit.tpl',
      1 => 1329779023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058127889508e4beba453d8-56534479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'textarea__toolbars' => 0,
    'textarea_id' => 0,
    'comments' => 0,
    'switcheditor' => 0,
    'toolbar_section' => 0,
    'textarea_attributes' => 0,
    'textareadata' => 0,
    'diff_style' => 0,
    'diff_oldver' => 0,
    'diff_newver' => 0,
    'source_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bebb092c4_94399042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bebb092c4_94399042')) {function content_508e4bebb092c4_94399042($_smarty_tpl) {?><?php if (!is_callable('smarty_function_toolbars')) include 'lib/smarty_tiki/function.toolbars.php';
?>

<div class='edit-zone'>
	<?php if ($_smarty_tpl->tpl_vars['textarea__toolbars']->value!='n'){?>
		<div class='textarea-toolbar' id='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp);?>
_toolbar'>
			<?php echo smarty_function_toolbars(array('area_id'=>(($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp),'comments'=>$_smarty_tpl->tpl_vars['comments']->value,'switcheditor'=>$_smarty_tpl->tpl_vars['switcheditor']->value,'section'=>$_smarty_tpl->tpl_vars['toolbar_section']->value),$_smarty_tpl);?>

		</div>
	<?php }?>
	<textarea <?php echo $_smarty_tpl->tpl_vars['textarea_attributes']->value;?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textareadata']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value){?>
	<input type="hidden" name="oldver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_oldver']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<input type="hidden" name="newver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_newver']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<input type="hidden" name="source_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_page']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>

<?php }} ?>