<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:36:25
         compiled from "/var/www/tiki/templates/tiki-admin_menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:802580536508e4e197a2873-03575155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e74a39dba9f43341262a15020dc6799ed30749' => 
    array (
      0 => '/var/www/tiki/templates/tiki-admin_menus.tpl',
      1 => 1348750037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802580536508e4e197a2873-03575155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'channels' => 0,
    'tiki_p_edit_menu_option' => 0,
    'tiki_p_edit_menu' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'menuId' => 0,
    'info' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4e19c9f613_21187808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4e19c9f613_21187808')) {function content_508e4e19c9f613_21187808($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_function_ticket')) include 'lib/smarty_tiki/function.ticket.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Menus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
	<div class="navbar">
		<?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php",'_text'=>"Admin Modules"),$_smarty_tpl);?>

	</div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_menus")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_menus"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Menus")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Menus"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<table class="normal">
			<tr>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'type')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th>Options</th>
				<th>Action</th>
			</tr>
			<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
				<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
					<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value=='y'&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']!=42){?>
							<a class="link" href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
" title="Configure/Options"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php }else{ ?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>

						<?php }?>
						<br />
						<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description'], ENT_QUOTES, 'UTF-8', true));?>

					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type'];?>
</td>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['options'];?>
&nbsp;</td>
					<td class="action">
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']!=42){?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y'){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'cookietab'=>"2",'_title'=>"Edit")); $_block_repeat=true; echo smarty_block_self_link(array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'cookietab'=>"2",'_title'=>"Edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'cookietab'=>"2",'_title'=>"Edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value=='y'){?>
								<a class="link" href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
" title="Configure/Options"><?php echo smarty_function_icon(array('_id'=>'table','alt'=>"Configure/Options"),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y'){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_title'=>"Delete")); $_block_repeat=true; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_title'=>"Delete"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Delete"),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_title'=>"Delete"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php }else{ ?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
								<?php echo smarty_function_button(array('reset'=>"y",'menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_text'=>"RESET",'_auto_args'=>"reset,menuId"),$_smarty_tpl);?>

							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y'){?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'clone'=>"y",'_title'=>"Clone this menu and its options",'_icon'=>"page_copy")); $_block_repeat=true; echo smarty_block_self_link(array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'clone'=>"y",'_title'=>"Clone this menu and its options",'_icon'=>"page_copy"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'clone'=>"y",'_title'=>"Clone this menu and its options",'_icon'=>"page_copy"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
				</tr>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);?>

			<?php endif; ?>
		</table>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Menus"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Create/Edit Menu")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Create/Edit Menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['menuId']->value>0){?>
			<h2>Edit this Menu: <?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</h2>
			<?php echo smarty_function_button(array('href'=>"tiki-admin_menus.php",'_text'=>"Create new Menu"),$_smarty_tpl);?>

		<?php }else{ ?>
			<h2>Create new Menu</h2>
		<?php }?>

		<form action="tiki-admin_menus.php?cookietab=1" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="menuId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<table class="formcolor">
				<tr>
					<td>
						<label for="menus_name">Name:</label>
					</td>
					<td>
						<input type="text" name="name" id="menus_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:95%" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="menus_desc">Description:</label>
					</td>
					<td>
						<textarea name="description" id="menus_desc" rows="4" cols="40" style="width:95%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</td>
				</tr>
				<tr>
					<td><label for="menus_type">Type:</label></td>
					<td>
						<select name="type" id="menus_type">
							<option value="d" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='d'){?>selected="selected"<?php }?>>dynamic collapsed (d)</option>
							<option value="e" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='e'){?>selected="selected"<?php }?>>dynamic extended (e)</option>
							<option value="f" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='f'){?>selected="selected"<?php }?>>fixed (f)</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="menus_parse">Wiki Parse:</label></td>
					<td>
						<input type="checkbox" name="parse" id="menus_parse"<?php if ($_smarty_tpl->tpl_vars['info']->value['parse']=='y'){?> checked="checked"<?php }?>/>
						<em>Labels of all options will be wiki parsed.</em>
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']=='y'){?>
					<tr>
						<td rowspan="2"><label for="icon">Icons:</label></td>
						<td>
							<div>Folder Icon</div>
							<input type="text" id="icon" name="icon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:95%" />
							<br />
							<em>Path and filename of closed folder icon</em>.

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								To use custom folder icons in menus, enter the path to the icon for the <strong>closed</strong> folder. In the same directory, include an icon for the opened folder. The "opened folder" icon name must be identical to the "closed folder" icon name, prefixed with the letter <strong>o</strong>.
								<hr />
								For example, the default icon is: img/icons/folder.png <?php echo smarty_function_icon(array('_id'=>"folder"),$_smarty_tpl);?>

								<br />
								The name of the "open folder" icon is: img/icons/ofolder.png <?php echo smarty_function_icon(array('_id'=>"ofolder"),$_smarty_tpl);?>

							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'){?>
					<tr>
						<td>
							<label for="use_items_icons">
								<input type="checkbox" id="use_items_icons" name="use_items_icons"<?php if ($_smarty_tpl->tpl_vars['info']->value['use_items_icons']=='y'){?> checked="checked"<?php }?>/>
								Configure icons for menu entries
							</label>
						</td>
					</tr>
				<?php }?>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="save" value="Save" />
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']!='y'){?>
						<input type="hidden" name="use_items_icons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['use_items_icons'];?>
" />
					<?php }?>
				</td>
			</tr>
		</table>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			
			You can use menus by assigning the menu <a href="tiki-admin_modules.php">module</a> (to the top, left, right, etc.), or you can customize a template, using {menu id=x}, where x is the ID of the menu.
			<hr />
			To use a menu in a tiki format: {menu id=X}
			<br />
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cssmenus']=='y'){?>
				To use menu in a css/suckerfish format:
				<ul>
					<li>{menu id=X css=y type=vert}</li>
					<li>{menu id=X css=y type=horiz}</li>
				</ul>
			<?php }?>
			To customize the menu's CSS id (#): {menu id=X css_id=custom_name}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Create/Edit Menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_menus"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>