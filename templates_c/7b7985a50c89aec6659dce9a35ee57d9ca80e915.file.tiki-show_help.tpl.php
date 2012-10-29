<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:09
         compiled from "/var/www/tiki/templates/tiki-show_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:433620885508e4bed1d8a75-75273233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7985a50c89aec6659dce9a35ee57d9ca80e915' => 
    array (
      0 => '/var/www/tiki/templates/tiki-show_help.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '433620885508e4bed1d8a75-75273233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_sections' => 0,
    'help' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bed258c02_83488034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bed258c02_83488034')) {function content_508e4bed258c02_83488034($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>
<div class="help" id="tikihelp">
	<div class="help_sections" id="help_sections" style="display:none">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['help']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value){
$_smarty_tpl->tpl_vars['help']->_loop = true;
?>
				<li>
					<a href="#<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['help']->value['title'];?>

					</a>
				</li>
			<?php } ?>
		</ul>
		<?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['help']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value){
$_smarty_tpl->tpl_vars['help']->_loop = true;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
" class="">
				<?php echo $_smarty_tpl->tpl_vars['help']->value['content'];?>

			</div>
		<?php } ?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(function() {$("#help_sections").tabs({});}); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
</div>
<?php }} ?>