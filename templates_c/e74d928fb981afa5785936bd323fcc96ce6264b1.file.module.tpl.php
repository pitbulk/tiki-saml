<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:08
         compiled from "/var/www/tiki/templates/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947711987508e4b742bfd01-75832159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74d928fb981afa5785936bd323fcc96ce6264b1' => 
    array (
      0 => '/var/www/tiki/templates/module.tpl',
      1 => 1349400379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947711987508e4b742bfd01-75832159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_position' => 0,
    'module_ord' => 0,
    'module_name' => 0,
    'module_params' => 0,
    'module_nobox' => 0,
    'prefs' => 0,
    'moduleId' => 0,
    'module_type' => 0,
    'tpl_module_style' => 0,
    'module_decorations' => 0,
    'user' => 0,
    'current_location' => 0,
    'mpchar' => 0,
    'module_notitle' => 0,
    'module_title' => 0,
    'module_flip' => 0,
    'module_display' => 0,
    'module_content' => 0,
    'module_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b748bc7b3_90947802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b748bc7b3_90947802')) {function content_508e4b748bc7b3_90947802($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>

<?php if (!isset($_smarty_tpl->tpl_vars['module_position']->value)){?><?php $_smarty_tpl->tpl_vars['module_position'] = new Smarty_variable('', null, 0);?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['module_ord']->value)){?><?php $_smarty_tpl->tpl_vars['module_ord'] = new Smarty_variable('', null, 0);?><?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array('name', null, null); ob_start(); ?><?php echo htmlspecialchars(((smarty_modifier_replace($_smarty_tpl->tpl_vars['module_name']->value,"+","_")).($_smarty_tpl->tpl_vars['module_position']->value)).($_smarty_tpl->tpl_vars['module_ord']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])){?><div class="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['topclass'];?>
"><?php }?>
<?php if ($_smarty_tpl->tpl_vars['module_nobox']->value!='y'){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y'){?>
		<div class="box-shadow"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['box_shadow_start'];?>

	<?php }?>
	<?php if (!isset($_smarty_tpl->tpl_vars['moduleId']->value)){?><?php $_smarty_tpl->tpl_vars['moduleId'] = new Smarty_variable(' ', null, 0);?><?php }?>
	<div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
" class="box box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
<?php if ($_smarty_tpl->tpl_vars['module_type']->value=='cssmenu'){?> cssmenubox<?php }?> module"<?php if (!empty($_smarty_tpl->tpl_vars['tpl_module_style']->value)){?> style="<?php echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['module_decorations']->value!='n'){?>
		<h3 class="box-title clearfix" <?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['bgcolor'])){?> style="background-color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['bgcolor'];?>
;"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_modulecontrols']=='y'){?>
			<span class="modcontrols">
			<a title="Move module up" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mpchar']->value, ENT_QUOTES, 'UTF-8', true);?>
mc_up=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
				<?php echo smarty_function_icon(array('_id'=>"resultset_up",'alt'=>"[Up]"),$_smarty_tpl);?>

			</a>
			<a title="Move module down" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mpchar']->value, ENT_QUOTES, 'UTF-8', true);?>
mc_down=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
				<?php echo smarty_function_icon(array('_id'=>"resultset_down",'alt'=>"[Down]"),$_smarty_tpl);?>

			</a>
			<a title="Move module to opposite side" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mpchar']->value, ENT_QUOTES, 'UTF-8', true);?>
mc_move=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
				<?php echo smarty_function_icon(array('_id'=>"arrow_right-left",'alt'=>"[opp side]"),$_smarty_tpl);?>

			</a>
			<a title="Unassign this module" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_location']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mpchar']->value, ENT_QUOTES, 'UTF-8', true);?>
mc_unassign=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" onclick='return confirmTheLink(this,"Are you sure you want to unassign this module?")'>
				<?php echo smarty_function_icon(array('_id'=>"cross",'alt'=>"[Remove]"),$_smarty_tpl);?>

			 </a>
			</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['module_notitle']->value!='y'){?>
			<span class="moduletitle"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n'){?>
			<span class="moduleflip" id="moduleflip-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
">
				<a title="Toggle module contents" class="flipmodtitle" href="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');">
					<?php echo smarty_function_icon(array('id'=>("icnmod-").(Smarty::$_smarty_vars['capture']['name']),'class'=>"flipmodimage",'_id'=>"module",'alt'=>"[toggle]"),$_smarty_tpl);?>

				</a>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'){?>
				<span class="moduleflip moduleflip-vert" id="moduleflip-vert-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
">
					<a title="Toggle module contents" class="flipmodtitle" href="javascript:flip_class('main','minimize-modules-left','maximize-modules');icntoggle('modv-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','vmodule.png');">
						<?php $_smarty_tpl->_capture_stack[0][] = array('name', null, null); ob_start(); ?>
							icnmodv-<?php echo Smarty::$_smarty_vars['capture']['name'];?>

						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo smarty_function_icon(array('name'=>("icnmod-").(Smarty::$_smarty_vars['capture']['name']),'class'=>"flipmodimage",'_id'=>"trans",'alt'=>"[Toggle Vertically]",'_defaultdir'=>"pics"),$_smarty_tpl);?>

					</a>
				</span>
			<?php }?>
		<?php }?>
		<!--[if IE]><br class="clear" style="height: 1px !important" /><![endif]--></h3>
	<?php }elseif($_smarty_tpl->tpl_vars['module_notitle']->value!='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n'){?>
			<h3 class="box-title" ondblclick="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])){?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
		<?php }else{ ?>
			<h3 class="box-title"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['color'])){?> style="color:<?php echo $_smarty_tpl->tpl_vars['module_params']->value['color'];?>
;"<?php }?>>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['module_flip']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='n'){?>
			<span id="moduleflip-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
">
				<a title="Toggle module contents" class="flipmodtitle" href="javascript:icntoggle('mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
','module.png');">
					<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable(("icnmod-").(Smarty::$_smarty_vars['capture']['name']), null, 0);?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('name', null, null); ob_start(); ?>
						icnmod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php echo smarty_function_icon(array('name'=>("icnmod-").(Smarty::$_smarty_vars['capture']['name']),'class'=>"flipmodimage",'_id'=>"module",'alt'=>"[Hide]"),$_smarty_tpl);?>

				</a>
			</span>
		<?php }?>
		<!--[if IE]><br class="clear" style="height: 1px !important" /><![endif]--></h3>
	<?php }?>
		<div id="mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
" style="display: <?php if (!isset($_smarty_tpl->tpl_vars['module_display']->value)||$_smarty_tpl->tpl_vars['module_display']->value){?>block<?php }else{ ?>none<?php }?>;<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];?>
" class="clearfix box-data<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];?>
<?php }?>">
<?php }else{ ?>
		<div id="module_<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['style'];?>
<?php echo $_smarty_tpl->tpl_vars['tpl_module_style']->value;?>
" class="module<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['module_params']->value['class'];?>
<?php }?> box-<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
 clearfix">
			<div id="mod-<?php echo Smarty::$_smarty_vars['capture']['name'];?>
" class="clearfix">
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php echo $_smarty_tpl->tpl_vars['module_error']->value;?>

<?php if ($_smarty_tpl->tpl_vars['module_nobox']->value!='y'){?>
		</div>
		<div class="box-footer">

		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_layoutshadows']=='y'){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['box_shadow_end'];?>
</div><?php }?>
<?php }else{ ?>
		</div>
	</div>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['topclass'])){?></div><?php }?>
<?php }} ?>