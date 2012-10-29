<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:46
         compiled from "/var/www/tiki/templates/tiki-objectpermissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810565948508e4bd69991e1-94835149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2020c255c73eaafc1f20b8f545b056f0261a0244' => 
    array (
      0 => '/var/www/tiki/templates/tiki-objectpermissions.tpl',
      1 => 1325789697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810565948508e4bd69991e1-94835149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'objectType' => 0,
    'objectName' => 0,
    'referer' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_users' => 0,
    'prefs' => 0,
    'filegals_manager' => 0,
    'permissions_displayed' => 0,
    'permType' => 0,
    'objectId' => 0,
    'show_disabled_features' => 0,
    'perms_clipboard_source' => 0,
    'inStructure' => 0,
    'perms' => 0,
    'permGroups' => 0,
    'groupNames' => 0,
    'permGroupCols' => 0,
    'permissions_added' => 0,
    'permissions_removed' => 0,
    'groupsFiltered' => 0,
    'groups' => 0,
    'featuresFiltered' => 0,
    'features' => 0,
    'quickperms' => 0,
    'permgroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bd72d4e55_95063602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bd72d4e55_95063602')) {function content_508e4bd72d4e55_95063602($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_treetable')) include 'lib/smarty_tiki/function.treetable.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Permission")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Permission"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='global'){?>Assign global permissions<?php }else{ ?>Assign permissions to <?php echo $_smarty_tpl->tpl_vars['objectType']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['objectName']->value;?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Permission"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php if (!empty($_smarty_tpl->tpl_vars['referer']->value)){?><?php echo smarty_function_button(array('href'=>((string)$_smarty_tpl->tpl_vars['referer']->value),'_text'=>"Back"),$_smarty_tpl);?>
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_text'=>"Admin Groups"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'){?>
	<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_text'=>"Admin users"),$_smarty_tpl);?>

	<?php }?>
	<?php echo smarty_function_button(array('href'=>"tiki-list_object_permissions.php",'_text'=>"Object Permissions List"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_objectpermissions')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Assign Permissions")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Assign Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>
	<h2>Edit Permissions</h2>
		<?php }?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<?php $_smarty_tpl->_capture_stack[0][] = array("notices", null, null); ob_start(); ?>
		<?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
			<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='global'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Currently editing Global permissions.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if ($_smarty_tpl->tpl_vars['objectType']->value!='category'){?>
						This object's direct permissions override any global permissions or category permissions affecting this object.
					<?php }else{ ?>
						This category's direct permissions override any global permissions affecting objects in it.
					<?php }?>
					<br />
					To edit global permissions <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value)); $_block_repeat=true; echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
click here<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['permissions_displayed']->value=='category'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					No permissions yet applied to this object but category permissions affect this object and are displayed below.<br />
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>To edit category permissions <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>'tiki-admin_categories.php')); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
click here<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['permissions_displayed']->value=='parent'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					No direct permissions yet applied to this object. Global permissions apply.<br />
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>To edit global permissions <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value)); $_block_repeat=true; echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
click here<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<?php }?>
					<br /><br />
					Currently inherited permissions displayed.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo Smarty::$_smarty_vars['capture']['notices'];?>

	<hr />
		<h2><?php if ($_smarty_tpl->tpl_vars['objectType']->value=='global'){?>Assign global permissions<?php }elseif($_smarty_tpl->tpl_vars['objectType']->value=='category'){?>Assign permissions to this category<?php }else{ ?>Assign permissions to this object<?php }?> <?php echo smarty_function_icon(array('_id'=>"img/loading-light.gif",'id'=>"perms_busy",'style'=>"vertical-align:top; display:none;"),$_smarty_tpl);?>
</h2>

		<div>
		<input type="hidden" name="referer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectName']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectType" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectType']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="permType" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['permType']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="show_disabled_features" value="<?php echo $_smarty_tpl->tpl_vars['show_disabled_features']->value;?>
" />
		
		<div class="input_submit_container" style="text-align: center">
			<input type="submit" name="assign" value="Assign" />
			<?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct'&&$_smarty_tpl->tpl_vars['objectType']->value!='global'){?>
				<input type="submit" name="remove" value="<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category'){?>Delete category permissions<?php }else{ ?>Delete object permissions<?php }?>" class="tips" title="Reset Perms|<?php if ($_smarty_tpl->tpl_vars['objectType']->value!='category'){?>This will remove all the settings here and permissions will be reset to inherit any category permissions that are set, or the global sitewide permissions.<?php }else{ ?>This will remove all the settings here and permissions will be reset to inherit the global sitewide permissions.<?php }?>"/>
			<?php }?>
			<input type="submit" name="copy" value="Copy" class="tips" title="Permissions Clipboard|Copy the permissions set here" />
			<?php if (!empty($_smarty_tpl->tpl_vars['perms_clipboard_source']->value)){?><input type="submit" name="paste" value="Paste" class="tips" title="Permissions Clipboard|Paste copied permissions from <em><?php echo $_smarty_tpl->tpl_vars['perms_clipboard_source']->value;?>
</em>" /><?php }?>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category'){?>
			<p>
				<input type="checkbox" id="propagate_category" name="propagate_category" value="1"/>
				<label for="propagate_category">Assign or remove permissions on <em>all</em> child categories</label>
			</p>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("input[name='assign'],input[name='remove']").click(function(){
if ($("#propagate_category").attr("checked")) {
	return confirm("Are you sure you want to affect all child categories?\nThere is no undo.");
} }); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		
		<?php if (($_smarty_tpl->tpl_vars['objectType']->value=='wiki'||$_smarty_tpl->tpl_vars['objectType']->value=='wiki page')&&!empty($_smarty_tpl->tpl_vars['inStructure']->value)){?>
			<input name="assignstructure" id="assignstructure" type="checkbox" />
			<label for="assignstructure">Assign or remove permissions on all pages of the sub-structure</label>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("input[name='assign'],input[name='remove']").click(function(){
if ($("#assignstructure").attr("checked")) {
	return confirm("Are you sure you want to affect all pages in this sub-structure?\nThere is no undo.");
} }); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		
		</div>
		<h3>Permissions</h3>

		<div>
		<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['perms']->value,'_checkbox'=>$_smarty_tpl->tpl_vars['permGroups']->value,'_checkboxTitles'=>$_smarty_tpl->tpl_vars['groupNames']->value,'_checkboxColumnIndex'=>$_smarty_tpl->tpl_vars['permGroupCols']->value,'_valueColumnIndex'=>"permName",'_columns'=>"\"label\"=\"Permission\"",'_groupColumn'=>'type','_openall'=>'y','_showSelected'=>'y','_columnsContainHtml'=>'y'),$_smarty_tpl);?>

		</div>

		<?php if ((count($_smarty_tpl->tpl_vars['perms']->value))=='0'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You must select at least one feature.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>

		<div class="input_submit_container" style="text-align: center">
			<input type="submit" name="assign" value="Assign" />
			<?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct'&&$_smarty_tpl->tpl_vars['objectType']->value!='global'){?>
				<input type="submit" name="remove" value="<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category'){?>Delete category permissions<?php }else{ ?>Delete object permissions<?php }?>" class="tips" title="Reset Perms|This will remove all the settings here and permissions will be reset to inherit the global sitewide permissions."/>
			<?php }?>
		</div>
	</form>
	
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Assign Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value)||!empty($_smarty_tpl->tpl_vars['permissions_removed']->value)){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"View Differences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"View Differences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value)){?>
				<h3>Permissions added:</h3>
				<blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_added']->value;?>
</blockquote>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['permissions_removed']->value)){?>
				<h3>Permissions removed:</h3>
				<blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_removed']->value;?>
</blockquote>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"View Differences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Select groups")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Select groups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
			<input type="hidden" name="referer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php if (isset($_smarty_tpl->tpl_vars['groupsFiltered']->value)){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Some of your groups have been automatically hidden.<br /> Select the groups below to assign permissions for.
					These groups are not the groups that have permissions on the object. It is only the groups you can see in the columns of the first tab.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					These groups are not the groups that have permissions on the object. It is only the groups you can see in the columns of the first tab.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['objectId']->value){?>
			<div class="navbar">
				 <input type="submit" name="used_groups" value="Select only groups that have a perm with the object" />
			</div>
			<?php }?>

			<h2>Groups</h2>
			
			<div>
			<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['groups']->value,'_checkbox'=>"group_filter",'_checkboxTitles'=>"Select all",'_checkboxColumnIndex'=>"in_group_filter",'_valueColumnIndex'=>"id",'_columns'=>'"groupName"="Group name","groupDesc"="Description"','_sortColumn'=>'parents','_collapseMaxSections'=>20,'_sortColumnDelimiter'=>','),$_smarty_tpl);?>

			</div>
			
			<div class="input_submit_container" style="text-align: center">
				<input type="submit" name="group_select" value="Select" />
			</div>
		</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Select groups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Select features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Select features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
			<input type="hidden" name="referer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php if (isset($_smarty_tpl->tpl_vars['featuresFiltered']->value)){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Some of your features have been automatically hidden.<br /> Select the features below to assign permissions for.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

			<label for="show_disabled_features2">Show permissions for disabled features</label>
			<input type="checkbox" name="show_disabled_features" id="show_disabled_features2" <?php if (isset($_smarty_tpl->tpl_vars['show_disabled_features']->value)&&$_smarty_tpl->tpl_vars['show_disabled_features']->value=='y'){?>checked="checked"<?php }?> onchange="this.form.submit();" />

			<h2>Features</h2>
			
			<div>
			<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['features']->value,'_checkbox'=>"feature_filter",'_checkboxTitles'=>"Select all",'_checkboxColumnIndex'=>"in_feature_filter",'_valueColumnIndex'=>"featureName",'_columns'=>'"featureName"="Feature name"','_sortColumn'=>"featureName",'_sortColumnDelimiter'=>'*','_collapseMaxSections'=>20,'_listFilter'=>'n'),$_smarty_tpl);?>

			</div>
			
			<div class="input_submit_container" style="text-align: center">
				<input type="submit" name="feature_select" value="Select" />
			</div>
		</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Select features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quick_object_perms']=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Quick Permissions")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Quick Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form name="allperms" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
		<input type="hidden" name="quick_perms" value="true"/>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>
			<h2>Quick Permissions</h2>
		<?php }?>

		<?php echo Smarty::$_smarty_vars['capture']['notices'];?>


		<h2>Assign Quick-Permissions to this object</h2>


		<table width="100%">
			<tr>
				<th>Groups</th>
			<?php  $_smarty_tpl->tpl_vars['permgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quickperms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->key => $_smarty_tpl->tpl_vars['permgroup']->value){
$_smarty_tpl->tpl_vars['permgroup']->_loop = true;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
</th>
			<?php } ?>
				<th class="tips" title="A couple of userdefined permissions are currently assigned (See tab Assign Permissions)">Advanced</th>
			</tr>
			<?php echo smarty_function_cycle(array('print'=>false,'values'=>"even,odd"),$_smarty_tpl);?>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['name'] = 'grp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total']);
?>
			<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
				<td>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>

				</td>
				<?php  $_smarty_tpl->tpl_vars['permgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quickperms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->key => $_smarty_tpl->tpl_vars['permgroup']->value){
$_smarty_tpl->tpl_vars['permgroup']->_loop = true;
?>
				<td>
					<input type="radio" name="perm_<?php echo rawurlencode($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']);?>
" value="<?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupSumm']==$_smarty_tpl->tpl_vars['permgroup']->value['name']){?>checked<?php }?> />
				</td>
				<?php } ?>
				<td>
					<input type="radio" name="perm_<?php echo rawurlencode($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']);?>
" value="userdefined" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupSumm']=='userdefined'){?>checked<?php }?> disabled />
				</td>
			</tr>
			<?php endfor; endif; ?>
		</table>
	
		<input type="hidden" name="referer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectName']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectType" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectType']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="objectId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="permType" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['permType']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="show_disabled_features" value="<?php echo $_smarty_tpl->tpl_vars['show_disabled_features']->value;?>
" />
		<div class="input_submit_container" style="text-align: center">
			<input type="submit" name="assign" value="Assign" />
		</div>
		
		<?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<em>Quick permissions</em> should be considered as an experimental feature.<br/>
				Although permissions will be set as expected using this form, it doesn't necessarily show the current permissions reliably.<br /><br />
				There is also no undo - <strong>Use with care!</strong>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Experimental"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		</div>
	</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Quick Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>