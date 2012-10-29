<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:38:10
         compiled from "/var/www/tiki/templates/tiki-adminusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471551225508e4e82af85f5-91015805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6edf12299158a55fea718515781bc3a4b3278ed' => 
    array (
      0 => '/var/www/tiki/templates/tiki-adminusers.tpl',
      1 => 1342794305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471551225508e4e82af85f5-91015805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'userinfo' => 0,
    'prefs' => 0,
    'tiki_p_invite' => 0,
    'tikifeedback' => 0,
    'added' => 0,
    'discarded' => 0,
    'discardlist' => 0,
    'errors' => 0,
    'find' => 0,
    'numrows' => 0,
    'filterGroup' => 0,
    'filterEmail' => 0,
    'all_groups' => 0,
    'sort_mode' => 0,
    'cant' => 0,
    'initial' => 0,
    'group_management_mode' => 0,
    'set_default_groups_mode' => 0,
    'email_mode' => 0,
    'users' => 0,
    'offset' => 0,
    'grs' => 0,
    'what' => 0,
    'link_style' => 0,
    'username' => 0,
    'grse' => 0,
    'title' => 0,
    'alt' => 0,
    'user' => 0,
    'add_edit_user_tablabel' => 0,
    'auth_ldap_permit_tiki_users' => 0,
    'userstrackerid' => 0,
    'usersitemid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4e8403bf31_04963089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4e8403bf31_04963089')) {function content_508e4e8403bf31_04963089($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_autocomplete')) include 'lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'lib/smarty_tiki/function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_username')) include 'lib/smarty_tiki/modifier.username.php';
if (!is_callable('smarty_modifier_duration_short')) include 'lib/smarty_tiki/modifier.duration_short.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_ticket')) include 'lib/smarty_tiki/function.ticket.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Users+Management",'admpage'=>"login",'url'=>"tiki-adminusers.php")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Users+Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Users+Management",'admpage'=>"login",'url'=>"tiki-adminusers.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_text'=>"Admin Groups"),$_smarty_tpl);?>

	<?php }?>
	<?php echo smarty_function_button(array('_text'=>"Admin Users"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>	
	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'_text'=>"Manage permissions"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']){?>
		<?php echo smarty_function_button(array('href'=>"?add=1",'_text'=>"Add a New User"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_invite']->value=='y'){?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'_text'=>"Invitation List"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences']=='y')){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y'){?>Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_preferences']=='y'){?>Since this Tiki site is in slave mode and imports preferences, the master user preferences will be automatically reimported at each login<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"Feedback")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tikifeedback']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['mes'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<br />
	<?php endfor; endif; ?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['added']->value!=''||$_smarty_tpl->tpl_vars['discarded']->value!=''||$_smarty_tpl->tpl_vars['discardlist']->value!=''){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"Batch Upload Results")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Batch Upload Results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Updated users: <?php echo $_smarty_tpl->tpl_vars['added']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['discarded']->value!=''){?>- Rejected users: <?php echo $_smarty_tpl->tpl_vars['discarded']->value;?>
<?php }?>
		<br />
		<br />
		<?php if ($_smarty_tpl->tpl_vars['discardlist']->value!=''){?>
			<table class="normal">
				<tr>
					<th>Username</th>
					<th>Reason</th>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['reject'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['name'] = 'reject';
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['discardlist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['reject']['total']);
?>
					<tr class="odd">
						<td class="username"><?php echo $_smarty_tpl->tpl_vars['discardlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reject']['index']]['login'];?>
</td>
						<td class="text"><?php echo $_smarty_tpl->tpl_vars['discardlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['reject']['index']]['reason'];?>
</td>
					</tr>
				<?php endfor; endif; ?>
			</table>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
			<br />
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
				<?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
<br />
			<?php endfor; endif; ?>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Batch Upload Results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_adminuers')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_adminuers'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Users")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Users"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<h2>Users</h2>

	<form method="get" action="tiki-adminusers.php">
		<table class="findtable">
			<tr>
				<td><label for="find">Find</label></td>
				<td><input type="text" id="find" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
				<td><input type="submit" value="Find" name="search" /></td>
				<td><label for="numrows">Number of displayed rows</label></td>
				<td><input type="text" size="4" id="numrows" name="numrows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['numrows']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td colspan="3">
					<a href="javascript:toggleBlock('search')" class="link"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"more"),$_smarty_tpl);?>
&nbsp;More Criteria</a>
				</td>
			</tr>
		</table>
		<?php echo smarty_function_autocomplete(array('element'=>'#find','type'=>'username'),$_smarty_tpl);?>


		<div id="search" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value||$_smarty_tpl->tpl_vars['filterEmail']->value){?>style="display:block;"<?php }else{ ?>style="display:none;"<?php }?>>
			<table class="findtable">
				<tr>
					<td><label for="filterGroup">Group (direct)</label></td>
					<td>
						<select name="filterGroup" id="filterGroup">
							<option value=""></option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Registered'&&$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Anonymous'){?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['filterGroup']->value==$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php }?>
							<?php endfor; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="filterEmail">Email</label></td>
					<td><input type="text" id="filterEmail" name="filterEmail" value="<?php echo $_smarty_tpl->tpl_vars['filterEmail']->value;?>
" /></td>
				</tr>
			</table>

			<input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
	</form>

	<?php if ($_smarty_tpl->tpl_vars['cant']->value>$_smarty_tpl->tpl_vars['numrows']->value||!empty($_smarty_tpl->tpl_vars['initial']->value)){?>
		<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

	<?php }?>

	<form name="checkform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
<?php if ($_smarty_tpl->tpl_vars['group_management_mode']->value!='y'&&$_smarty_tpl->tpl_vars['set_default_groups_mode']->value!='y'&&$_smarty_tpl->tpl_vars['email_mode']->value!='y'){?>#multiple<?php }?>">
		<table class="normal">
			<tr>
				<th class="auto">
					<?php if ($_smarty_tpl->tpl_vars['users']->value){?>
					   <?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

					<?php }?>
				</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'login')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'email')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'email'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'){?>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'openID')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OpenID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'openID'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<?php }?>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'currentLogin'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th>Groups</th>
				<th>Actions</th>
			</tr>
			<?php echo smarty_function_cycle(array('print'=>false,'values'=>"even,odd"),$_smarty_tpl);?>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['editable']){?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'username', null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'], ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
						<td class="checkbox">
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!='admin'){?>
								<input type="checkbox" name="checked[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['checked']=='y'){?>checked="checked" <?php }?>/>
							<?php }?>
						</td>
	
						<td class="username">
							<?php $_smarty_tpl->_capture_stack[0][] = array('username', null, null); ob_start(); ?><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<a class="link" href="tiki-adminusers.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;numrows=<?php echo $_smarty_tpl->tpl_vars['numrows']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;user=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>#2<?php }?>" title="Edit Account Settings: <?php echo Smarty::$_smarty_vars['capture']['username'];?>
">
							   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'], ENT_QUOTES, 'UTF-8', true);?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_show_realnames']=='y'&&Smarty::$_smarty_vars['capture']['username']!=$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']){?>
								<div class="subcomment">
									<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['username'], ENT_QUOTES, 'UTF-8', true);?>

								</div>
							<?php }?>
						</td>
	
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?>
							<td class="email"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'];?>
</td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'){?>
							<td class="text"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['openid_url'])===null||$tmp==='' ? "N" : $tmp);?>
</td>
						<?php }?>	
						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['currentLogin']==''){?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('when', null, null); ob_start(); ?><?php echo smarty_modifier_duration_short($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['age']);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								Never <em>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>Smarty::$_smarty_vars['capture']['when'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>Smarty::$_smarty_vars['capture']['when']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered %0 ago<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>Smarty::$_smarty_vars['capture']['when']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</em>
							<?php }else{ ?>
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['currentLogin']);?>

							<?php }?>
					
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='u'){?>
								<br />
								Need to validate email
							<?php }?>
						</td>
						<td class="text">
							<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['registrationDate']);?>

						</td>

						<td class="text">
							<?php  $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['what']->_loop = false;
 $_smarty_tpl->tpl_vars['grs'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['what']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['what']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['what']->key => $_smarty_tpl->tpl_vars['what']->value){
$_smarty_tpl->tpl_vars['what']->_loop = true;
 $_smarty_tpl->tpl_vars['grs']->value = $_smarty_tpl->tpl_vars['what']->key;
 $_smarty_tpl->tpl_vars['what']->iteration++;
 $_smarty_tpl->tpl_vars['what']->last = $_smarty_tpl->tpl_vars['what']->iteration === $_smarty_tpl->tpl_vars['what']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gr']['last'] = $_smarty_tpl->tpl_vars['what']->last;
?>
								<div style="white-space:nowrap">
									<?php if ($_smarty_tpl->tpl_vars['grs']->value!="Anonymous"&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||in_array($_smarty_tpl->tpl_vars['grs']->value,$_smarty_tpl->tpl_vars['all_groups']->value))){?>
										<?php if ($_smarty_tpl->tpl_vars['what']->value=='included'){?><i><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
											<a class="link" <?php echo $_smarty_tpl->tpl_vars['link_style']->value;?>
 href="tiki-admingroups.php?group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['grs']->value);?>
" title=<?php if ($_smarty_tpl->tpl_vars['what']->value=='included'){?>"Edit Included Group"<?php }else{ ?>"Edit Group: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grs']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
										<?php }?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grs']->value, ENT_QUOTES, 'UTF-8', true);?>

										<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
											</a>
										<?php }?>									
										<?php if ($_smarty_tpl->tpl_vars['what']->value=='included'){?></i><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['grs']->value==$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['default_group']){?><small>(default)</small><?php }?>
										<?php if ($_smarty_tpl->tpl_vars['what']->value!='included'&&$_smarty_tpl->tpl_vars['grs']->value!="Registered"){?>
											<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'grse', null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grs']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
											<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'title', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value,'_1'=>$_smarty_tpl->tpl_vars['grse']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value,'_1'=>$_smarty_tpl->tpl_vars['grse']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove %0 from %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value,'_1'=>$_smarty_tpl->tpl_vars['grse']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_class'=>'link','user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'action'=>'removegroup','group'=>$_smarty_tpl->tpl_vars['grs']->value,'_icon'=>'cross','_title'=>$_smarty_tpl->tpl_vars['title']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_class'=>'link','user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'action'=>'removegroup','group'=>$_smarty_tpl->tpl_vars['grs']->value,'_icon'=>'cross','_title'=>$_smarty_tpl->tpl_vars['title']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_class'=>'link','user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'],'action'=>'removegroup','group'=>$_smarty_tpl->tpl_vars['grs']->value,'_icon'=>'cross','_title'=>$_smarty_tpl->tpl_vars['title']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }else{ ?>
											<?php echo smarty_function_icon(array('_id'=>'bullet_white'),$_smarty_tpl);?>

										<?php }?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['gr']['last']){?><br /><?php }?>
									<?php }?>
								</div>
							<?php } ?>
						</td>
	
						<td class="action">
							<a class="link" href="tiki-assignuser.php?assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
" title="Assign to group"><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'alt', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign %0 to groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_icon(array('_id'=>'group_key','alt'=>$_smarty_tpl->tpl_vars['alt']->value),$_smarty_tpl);?>
</a>
							<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'title', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Account Settings: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_class'=>"link",'user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'_icon'=>"page_edit",'_title'=>$_smarty_tpl->tpl_vars['title']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_class'=>"link",'user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'_icon'=>"page_edit",'_title'=>$_smarty_tpl->tpl_vars['title']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_class'=>"link",'user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'_icon'=>"page_edit",'_title'=>$_smarty_tpl->tpl_vars['title']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y'||$_smarty_tpl->tpl_vars['user']->value=='admin'){?>
								<a class="link" href="tiki-user_preferences.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change user preferences: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'alt', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change user preferences: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_icon(array('_id'=>'wrench','alt'=>$_smarty_tpl->tpl_vars['alt']->value),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_information']!='private'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'title', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Information: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<a class="link" href="tiki-user_information.php?userId=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user_information']=='private'){?> style="opacity:0.5;"<?php }?>><?php echo smarty_function_icon(array('_id'=>'help','alt'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
</a>
							<?php }?>
		
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']!='admin'){?>
								<a class="link" href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('action'=>'delete','user'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']),$_smarty_tpl);?>
" title="Delete"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Delete"),$_smarty_tpl);?>
</a>
								<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='a'){?>
									<a class="link" href="tiki-login_validate.php?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
&amp;pass=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['valid']);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Validate user: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'alt', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Validate user: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_icon(array('_id'=>'accept','alt'=>$_smarty_tpl->tpl_vars['alt']->value),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']=='u'){?>
									<a class="link" href="tiki-confirm_user_email.php?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
&amp;pass=<?php echo rawurlencode(md5($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['provpass']));?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm user email: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_username($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'alt', null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['username']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm user email: %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['username']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo smarty_function_icon(array('_id'=>'email_go','alt'=>$_smarty_tpl->tpl_vars['alt']->value),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['email_due']>0&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']!='u'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['waiting']!='a'){?>
									<a class="link" href="tiki-adminusers.php?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['user']);?>
&amp;action=email_due" title="Invalidate email"><?php echo smarty_function_icon(array('_id'=>'email_cross','alt'=>"Invalidate email"),$_smarty_tpl);?>
</a>
								<?php }?>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['openid_url'])){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_title'=>"Remove link with OpenID account",'_icon'=>"img/icons/openid_remove")); $_block_repeat=true; echo smarty_block_self_link(array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_title'=>"Remove link with OpenID account",'_icon'=>"img/icons/openid_remove"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('userId'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userId'],'action'=>'remove_openid','_title'=>"Remove link with OpenID account",'_icon'=>"img/icons/openid_remove"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						</td>
					</tr>
				<?php }?>
			<?php endfor; else: ?>
				<?php echo smarty_function_norecords(array('_colspan'=>8),$_smarty_tpl);?>

			<?php endif; ?>
		
			<tr>
				<td colspan="18">
					<a name="multiple"></a>
					<?php if ($_smarty_tpl->tpl_vars['users']->value){?>
						<p align="left"> 
							<?php if ($_smarty_tpl->tpl_vars['group_management_mode']->value!='y'&&$_smarty_tpl->tpl_vars['set_default_groups_mode']->value!='y'&&$_smarty_tpl->tpl_vars['email_mode']->value!='y'){?>
								<label>Perform action with checked:
								<select name="submit_mult">
									<option value="" selected="selected">-</option>
									<option value="remove_users" >Remove</option>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage']=='y'){?>
										<option value="remove_users_with_page">Remove Users and their Userpages</option>
									<?php }?>
									<option value="assign_groups" >Manage Group Assignments</option>
									<option value="set_default_groups">Set Default Groups</option>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'){?>
										<option value="emailChecked">Send a wiki page by Email</option>
									<?php }?>
								</select>
								</label>
								<input type="submit" value="OK" />
							<?php }elseif($_smarty_tpl->tpl_vars['group_management_mode']->value=='y'){?>
								<select name="group_management">
									<option value="add">Assign selected to</option>
									<option value="remove">Remove selected from</option>
								</select></label>
								<label>the following groups:
								<br />
								<select name="checked_groups[]" multiple="multiple" size="20">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
										<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Anonymous'&&$_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Registered'){?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php }?>
									<?php endfor; endif; ?>
								</select></label>
								<br />
								<input type="submit" value="OK" />
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }elseif($_smarty_tpl->tpl_vars['set_default_groups_mode']->value=='y'){?>
								<label>Set the default group of the selected users to:
								<br />
								<select name="checked_group" size="20">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
										<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!='Anonymous'){?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php }?>
									<?php endfor; endif; ?>
								</select></label>
								<br />
								<input type="submit" value="OK" />
								<input type="hidden" name="set_default_groups" value="<?php echo $_smarty_tpl->tpl_vars['set_default_groups_mode']->value;?>
" />
							<?php }elseif($_smarty_tpl->tpl_vars['email_mode']->value=='y'){?>
								<label>Template wiki page 
								<input type="text" name="wikiTpl" /></label>
								<br />
								<label>bcc 
								<input type="text" name="bcc" /></label>
								<input type="submit" value="OK" />
								<input type="hidden" name="emailChecked" value="<?php echo $_smarty_tpl->tpl_vars['email_mode']->value;?>
" />
							<?php }?>
						</p>
					<?php }?>
				</td>
			</tr>
		</table>

		<input type="hidden" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="numrows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['numrows']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="offset" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	</form>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['numrows']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Users"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<a name="2" ></a>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'add_edit_user_tablabel', null); ob_start(); ?>Edit user <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</i><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['add_edit_user_tablabel'] = new Smarty_variable("Add a New User", null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']){?>
		<h2>Edit user: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['userinfo']->value['editable']){?>
			<?php $_smarty_tpl->tpl_vars['thisloginescaped'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['userinfo']->value['login']), null, 0);?>
			<?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisloginescaped']->value),'_text'=>"Assign user to Groups"),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h2>Add a New User</h2>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['editable']){?>
		<form action="tiki-adminusers.php" method="post" enctype="multipart/form-data" name="RegForm" autocomplete="off">
			<table class="formcolor">
				<tr>
					<td><label for='login'>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'){?>
							Email:
						<?php }else{ ?>
							User:
						<?php }?>
						</label>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'){?>
							<input type="text" id='login' name='login' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
" />
							<br /> 
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'){?>
								<em>Use the email as username.</em>
							<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['lowercase_username']=='y'){?> 
								<em>Lowercase only</em>.
							<?php }?>
							<br />
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']){?>
								<p>
									<?php echo smarty_function_icon(array('_id'=>'exclamation','alt'=>"Warning",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
 
									<em>Warning: changing the username could require the user to change his password (for user registered with an old Tiki&lt;=1.8)</em>
								</p>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_server']=='y'){?>
									<i>Warning: it will mess with slave intertiki sites that use this one as master</i>
								<?php }?>
							<?php }?>
						<?php }else{ ?>
							<input type="hidden" name='login' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>

						<?php }?>
					</td>
				</tr>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='ldap'&&($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap']=='n'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['auth_ldap_permit_tiki_users']->value=='n'){?>
					<tr>
						<td colspan="2">
							<b>No password is required</b>
							<br />
							<i>Tiki is configured to delegate the password managment to LDAP.</i>
						</td>
					</tr>
				<?php }else{ ?>
					<tr>
						<td><label for="pass1">Password:</label><?php if (!$_smarty_tpl->tpl_vars['userinfo']->value['userId']){?><br />(required)<?php }?></td>
						<td>
							<input type="password" name="pass" id="pass1" onkeyup="runPassword(this.value, 'mypassword');checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text')" />
							<div style="float:right;margin-left:5px;">
								<div id="mypassword_text"></div>
								<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div> 
							</div>
							<br />
							<?php echo $_smarty_tpl->getSubTemplate ('password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</td>
					</tr>
					<tr>
						<td><label for="pass2">Repeat Password:</label><?php if (!$_smarty_tpl->tpl_vars['userinfo']->value['userId']){?><br />(required)<?php }?></td>
						<td>
							<input type="password" name="pass2" id="pass2" onkeyup="checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text')" />
							<div style="float:right;margin-left:5px;">
								<div id="mypassword2_text"></div>
							</div>
						</td>
					</tr>
					<?php if (!($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='ldap'&&($_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_tiki']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['ldap_skip_admin']=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['ldap_create_user_ldap']=='n')){?>
						<tr><td>&nbsp;</td><td>
							<input id='genepass' name="genepass" type="text" tabindex="0" style="display: none" />
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								$("#genPass span").click(function () {
									$('#pass1, #pass2').val('');
									$('#mypassword_text, #mypassword2_text').hide();
									$("#genepass").show();
								});
								$("#pass1, #pass2").change(function () {
									$('#mypassword_text, #mypassword2_text').show();
									document.RegForm.genepass.value='';
									$("#genepass").hide();
								});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"genPass('genepass');runPassword(document.RegForm.genepass.value, 'mypassword');checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text');return false;",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
						</td></tr>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&$_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'){?>
						<tr>
							<td>&nbsp;</td>
							<td>
								<label><input type="checkbox" name="pass_first_login"<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']=='0'){?> checked="checked"<?php }?> /> 
								User must change password at next login.</label>
							</td>
						</tr>
					<?php }?>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?>
					<tr>
						<td><label for="email">Email:</label></td>
						<td>
							<input type="text" id="email" name="email" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'&&($_smarty_tpl->tpl_vars['prefs']->value['validateUsers']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['validateRegistration']=='y')){?>
					<tr>
						<td>&nbsp;</td>
						<td>
							<label><input type="checkbox" name="need_email_validation" <?php if (($_smarty_tpl->tpl_vars['userinfo']->value['login']==''&&($_smarty_tpl->tpl_vars['prefs']->value['validateUsers']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['validateRegistration']=='y'))||$_smarty_tpl->tpl_vars['userinfo']->value['provpass']!=''){?>checked="checked" <?php }?>/> 
							Send an email to the user in order to allow him to validate his account.</label> 
							
							<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['sender_email'])){?><br /><span class="highlight">You need to set <a href="tiki-admin.php?page=general">Sender Email</a></span><?php }?>						
	
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']!=0){?>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['created']!=$_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']){?>
						<tr>
							<td>Created:</td>
							<td><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['created']);?>
</td>
						</tr>
					<?php }?>
					<tr>
						<td>Registered:</td>
						<td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']){?><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['registrationDate']);?>
<?php }?></td>
					</tr>
					<tr>
						<td>Pass confirmed:</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']){?>
								<?php echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['pass_confirm']))===null||$tmp==='' ? 'Never' : $tmp);?>

							<?php }?>
						</td>
					</tr>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['email_due']>0){?>
						<tr>
							<td style="white-space: nowrap;">Email confirmed:</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email_confirm']){?>
									(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 days ago<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['userinfo']->value['daysSinceEmailConfirm']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)
								<?php }else{ ?>
									Never
								<?php }?>
							</td>
						</tr>
					<?php }?>
					<tr>
						<td>Current Login:</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']){?>
								<?php echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['currentLogin']))===null||$tmp==='' ? 'Never' : $tmp);?>

							<?php }?>
						</td>
					</tr>
					<tr>
						<td>Last Login:</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']){?>
								<?php echo (($tmp = @smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']))===null||$tmp==='' ? 'Never' : $tmp);?>

							<?php }?>
						</td>
					</tr>
				<?php }?>
				<tr>
					<td>&nbsp;</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['userId']){?>
							<input type="hidden" name="user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['userId'], ENT_QUOTES, 'UTF-8', true);?>
" />
							<input type="hidden" name="edituser" value="1" />
							<input type="submit" name="save" value="Save" />
						<?php }else{ ?>
							<input type="submit" name="newuser" value="Add" />
						<?php }?>
					</td>
				</tr>
			</table>
			<br />
			<br />
	
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'){?>
				<?php if ($_smarty_tpl->tpl_vars['userstrackerid']->value&&$_smarty_tpl->tpl_vars['usersitemid']->value){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User tracker item : <?php echo $_smarty_tpl->tpl_vars['usersitemid']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
					<?php echo smarty_function_button(array('href'=>"tiki-view_tracker_item.php?trackerId=".((string)$_smarty_tpl->tpl_vars['userstrackerid']->value)."&amp;itemId=".((string)$_smarty_tpl->tpl_vars['usersitemid']->value)."&amp;show=mod",'_text'=>"Edit Item"),$_smarty_tpl);?>

				<?php }?>
				<br />
				<br />
			<?php }?>
		</form>
	<?php }else{ ?>
		You do not have permission to edit this user
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['add_edit_user_tablabel']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Import")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Import"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<h2>Batch upload (CSV file):</h2>

	<form action="tiki-adminusers.php" method="post" enctype="multipart/form-data">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<table class="formcolor">
			<tr>
				<td>
					<label for="csvlist">
						CSV File:
						<?php echo smarty_function_help(array('url'=>"Users+Management#Adding_new_users_in_bulk",'desc'=>"CSV file layout: login,password,email,groups,default_group,realName<br />user1,pass1,email1,group1,group1<br />user2,pass2,email2,\"group1,group2\",group1<br /><br />Only login, password, email are mandatory.Use an empty password for automatic password generation. Use same login and email if the login use email. Groups are separated by comma. With group name with comma, double the comma."),$_smarty_tpl);?>

					</label>
				</td>
				<td>
					<input type="file" id="csvlist" name="csvlist"/>
					<br />
					<label><input type="radio" name="overwrite" value="y" />&nbsp;Overwrite</label>
					<br />
					<label><input type="radio" name="overwrite" value="n" checked="checked" />&nbsp;Don't overwrite</label>
					<br />
					<label>Overwrite groups: <input type="checkbox" name="overwriteGroup" /></label>
                    <br />
					<label>Create groups: <input type="checkbox" name="createGroup" /></label>
                    <br />
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'){?>
                     <label>User must change password at first login: <input type="checkbox" name="forcePasswordChange" /></label>
					<br />
					<?php }?>
                    <label>Send an email to the user in order to allow him to validate his account. <input type="checkbox" name="notification" /></label>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="batch" value="Add" />
				</td>
			</tr>
		</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?> 
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can export users of a group in <a href="tiki-admingroups.php">admin->groups->a_group</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Import"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_adminuers'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>