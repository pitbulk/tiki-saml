<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:08
         compiled from "/var/www/tiki/templates/prefs/flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:716136294508e4bec167372-58558610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4722ad564906959a309616e74aa34a60495feac' => 
    array (
      0 => '/var/www/tiki/templates/prefs/flag.tpl',
      1 => 1305893966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716136294508e4bec167372-58558610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bec333d97_70703484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bec333d97_70703484')) {function content_508e4bec333d97_70703484($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?><div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>">
	<div class="adminoption">
		<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['value']=='y'){?>checked="checked" <?php }?> 
			<?php if (!$_smarty_tpl->tpl_vars['p']->value['available']){?>disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
/>
	</div>
	<div class="adminoptionlabel" >
		<label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?>
			<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

if( ! $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').attr('checked') || $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').attr('disabled') ) {
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer').hide();
}
if ($('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer').length) {
	$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').change( function() {
		var id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer';
		if( $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').attr('checked') || $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
').attr('disabled') ) {
			<?php if ($_smarty_tpl->tpl_vars['mode']->value=='invert'){?>hide(id);<?php }else{ ?>show(id);<?php }?>
		} else {
			<?php if ($_smarty_tpl->tpl_vars['mode']->value=='invert'){?>show(id);<?php }else{ ?>hide(id);<?php }?>
		}
	} ).change();
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>