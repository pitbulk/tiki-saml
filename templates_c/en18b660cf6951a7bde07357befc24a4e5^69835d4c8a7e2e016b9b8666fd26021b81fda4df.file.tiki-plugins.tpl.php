<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:36:01
         compiled from "/var/www/tiki/templates/tiki-plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1385815399508e4e01532207-70740439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69835d4c8a7e2e016b9b8666fd26021b81fda4df' => 
    array (
      0 => '/var/www/tiki/templates/tiki-plugins.tpl',
      1 => 1323213396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1385815399508e4e01532207-70740439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin_list' => 0,
    'plugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4e017c34d1_06472557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4e017c34d1_06472557')) {function content_508e4e017c34d1_06472557($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_listfilter')) include 'lib/smarty_tiki/function.listfilter.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_modifier_substring')) include 'lib/smarty_tiki/modifier.substring.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('url'=>"tiki-plugins.php",'help'=>"Wiki+Plugins")); $_block_repeat=true; echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki+Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki+Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

For security, grant the <strong>tiki_p_plugin_approve</strong> permission only to trusted user groups. Use the <a href="tiki-admin.php?page=textarea">Admin: Text Area page</a> to deactivate potentially risky plugins.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<p>
		This page lists the plugins that require validation, the first time they are encountered. Each plugin contains a unique <em>signature</em> that is preserved.</p>
<p>When you upgrade from an old version, you may need to reparse all the pages. <?php echo smarty_function_button(array('href'=>"tiki-plugins.php?refresh=y",'_text'=>"Refresh"),$_smarty_tpl);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['plugin_list']->value){?>
		<p>If a plugin is no longer in use (for example, it has been removed from the wiki page), use <strong>Clear</strong> to remove it from this list. The plugin will automatically be added if it is encountered.
		</p>
		<p>Plugins can be individually previewed, approved, or rejected from the particular location that contains the plugin. For security, you should review each plugin to ensure it is safe to approve.</p>
	<form method="post" action="">
<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

		
		<?php echo smarty_function_listfilter(array('selectors'=>'#plugins_list tr.odd,#plugins_list tr.even'),$_smarty_tpl);?>
 
		<table class="normal" id="plugins_list">
			<tr>
				<th><?php echo smarty_function_select_all(array('checkbox_names'=>'clear[]'),$_smarty_tpl);?>
</th>
				<th>Plugin </th>
				<th>Location </th>
				<th>Added By </th>
				<th>Actions </th>
			</tr>
<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
			<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
				<td class="checkbox"><input type="checkbox" name="clear[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'], ENT_QUOTES, 'UTF-8', true);?>
"/></td>
				<td class="text"><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'], ENT_QUOTES, 'UTF-8', true);?>
"><strong><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_substring($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'],0,20), ENT_QUOTES, 'UTF-8', true),"-","</strong> <br />Signature: ");?>
...</label>
				<td class="text"><?php if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType']=='wiki page'){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wiki page: <a href="%0#%2" title="View this page.">%1</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
					Unknown
					<?php }?>
				</td>
				<td class="text"><?php if ($_smarty_tpl->tpl_vars['plugin']->value['added_by']){?><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['plugin']->value['added_by']);?>
<?php }else{ ?>Unknown<?php }?>
				</td>
				<td class="action">
					<a href="tiki-plugins.php?approveone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
"><?php echo smarty_function_icon(array('_id'=>'accept','alt'=>"Approve"),$_smarty_tpl);?>
</a>
					<a href="tiki-plugins.php?clearone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
"><?php echo smarty_function_icon(array('_id'=>'delete','alt'=>"Clear"),$_smarty_tpl);?>
</a>
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType']=='wiki page'){?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="%0#%2" title="View this page."><?php echo smarty_function_icon(array('_id'=>'page'),$_smarty_tpl);?>
</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'], ENT_QUOTES, 'UTF-8', true),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
	
<?php }?>	
<?php } ?>
			</tr>
		</table>
		<p>
		<label for="submit_mult">Perform action with checked:</label>
		<select name="submit_mult" id="submit_mult" onchange="this.form.submit();">
			<option value="" selected="selected">...</option>
			<option value="clear" >Clear</option>
			<option value="approve">Approve</option>
		</select> or
		<input type="submit" name="approveall" value="Approve all pending plugins"/>
		</p>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

Using <strong>Approve</strong> or <strong>Approve All</strong> will approve and activate the pending plugins. Use this feature <strong>only</strong> if you have verified that all the pending plugins are safe.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
	<script type='text/javascript'>
		<!--
		// Fake js to allow the use of the <noscript> tag (so non-js-users can still submit)
		//-->
	</script>
	<noscript>
		<input type="submit" value="OK" />
	</noscript>

<?php }else{ ?>
	<p>No plugins pending approval.</p>
<?php }?>
<?php }} ?>