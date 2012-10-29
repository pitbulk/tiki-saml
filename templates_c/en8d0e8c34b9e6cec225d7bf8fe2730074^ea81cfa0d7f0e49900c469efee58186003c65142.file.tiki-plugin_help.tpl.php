<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:08
         compiled from "/var/www/tiki/templates/tiki-plugin_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1988882634508e4bec7fc806-93227681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea81cfa0d7f0e49900c469efee58186003c65142' => 
    array (
      0 => '/var/www/tiki/templates/tiki-plugin_help.tpl',
      1 => 1331637877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1988882634508e4bec7fc806-93227681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin' => 0,
    'plugin_name' => 0,
    'prefs' => 0,
    'area_id' => 0,
    'param' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4beca0db83_61177995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4beca0db83_61177995')) {function content_508e4beca0db83_61177995($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>

<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
<em><?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>
</em>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['area_id']->value){?>
	<a href="javascript:void(0);" onclick="needToConfirm=false;$('#help_sections').dialog('close');popup_plugin_form('<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
','<?php echo addslashes(mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8'));?>
');return false;">
		<?php echo smarty_function_icon(array('_id'=>(($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['icon'])===null||$tmp==='' ? "plugin_add" : $tmp),'_text'=>"Insert"),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y'){?>
	<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['documentation'])){?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['documentation'], ENT_QUOTES, 'UTF-8', true);?>
" onclick="needToConfirm=false;" target="tikihelp" class="tikihelp"><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a>
	<?php }?>
<?php }?>


<div class="plugin-desc">
	<?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>
<?php }else{ ?>
<div class="plugin-sample">
	<?php if ($_smarty_tpl->tpl_vars['plugin']->value['body']){?>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
(
		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']){?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"</em>
				<?php }else{ ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"</em> ]
				<?php }?>
			</div>
		<?php } ?>
		)&#125;
		<div class="plugin-param">
			<?php echo $_smarty_tpl->tpl_vars['plugin']->value['body'];?>

		</div>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
&#125;
	<?php }else{ ?>
		&#123;<?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>

		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']){?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"</em>
				<?php }else{ ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"</em> ]
				<?php }?>
			</div>
		<?php } ?>
		&#125;
	<?php }?>
</div>
<?php }?>
<?php }} ?>