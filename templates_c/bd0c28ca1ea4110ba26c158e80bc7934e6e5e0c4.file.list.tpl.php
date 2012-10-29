<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:25
         compiled from "/var/www/tiki/templates/prefs/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972374251508e4bc190dd28-83706285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd0c28ca1ea4110ba26c158e80bc7934e6e5e0c4' => 
    array (
      0 => '/var/www/tiki/templates/prefs/list.tpl',
      1 => 1314579416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972374251508e4bc190dd28-83706285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bc1ac4b55_81941283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bc1ac4b55_81941283')) {function content_508e4bc1ac4b55_81941283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_breakline')) include 'lib/smarty_tiki/modifier.breakline.php';
if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>
<div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>" style="text-align: left;">
  <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_breakline(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
:</label>
	<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
		<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['p']->value['value']){?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
		<?php } ?>
	</select>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']){?>
		<em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</em>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']){?>
		<br/><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

	<?php }?>		
	<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?>
		<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

if ($('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer').length) {
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').change( function( e ) {
		$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer').hide();
		if( $(this).val().length ) {
			$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer.' + $(this).val()).show();
		}
	} ).change();
}
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>