<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:06
         compiled from "/var/www/tiki/templates/tiki-admin_modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156192504508e4bead14424-19851575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f612fcd4ee5ed6979ed321c83495424bdb3fc83' => 
    array (
      0 => '/var/www/tiki/templates/tiki-admin_modules.tpl',
      1 => 1336582702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156192504508e4bead14424-19851575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_edit_menu' => 0,
    'missing_params' => 0,
    'prefs' => 0,
    'module_zones' => 0,
    'zone_info' => 0,
    'zone_initial' => 0,
    'assigned_modules' => 0,
    'module' => 0,
    'preview' => 0,
    'assign_name' => 0,
    'preview_data' => 0,
    'info' => 0,
    'moduleId' => 0,
    'user_modules' => 0,
    'um_name' => 0,
    'um_title' => 0,
    'um_parse' => 0,
    'maximum' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'polls' => 0,
    'galleries' => 0,
    'contents' => 0,
    'rsss' => 0,
    'menus' => 0,
    'banners' => 0,
    'wikistructures' => 0,
    'um_data' => 0,
    'module_list_show_all' => 0,
    'all_modules_info' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4beb99de51_79080983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4beb99de51_79080983')) {function content_508e4beb99de51_79080983($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_modifier_capitalize')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_function_popup')) include 'lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_block_textarea')) include 'lib/smarty_tiki/block.textarea.php';
if (!is_callable('smarty_function_listfilter')) include 'lib/smarty_tiki/function.listfilter.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Modules",'admpage'=>"module")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Modules<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<div class="navbar"><?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php?clear_cache=1",'_text'=>"Clear Cache"),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y'){?><?php echo smarty_function_button(array('href'=>"tiki-admin_menus.php",'_text'=>"Admin Menus"),$_smarty_tpl);?>
<?php }?><?php if (empty($_REQUEST['show_hidden_modules'])){?><?php echo smarty_function_button(array('show_hidden_modules'=>"y",'_text'=>"Show hidden modules"),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_button(array('show_hidden_modules'=>'','_text'=>"Hide hidden modules"),$_smarty_tpl);?>
<?php }?><?php echo smarty_function_button(array('href'=>"./",'_text'=>"Exit Modules"),$_smarty_tpl);?>
<?php echo smarty_function_button(array('save_modules'=>"y",'_text'=>"Save",'_style'=>"display:none;",'_id'=>"save_modules",'_ajax'=>"n"),$_smarty_tpl);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['missing_params']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Modules Parameters")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following required parameters are missing:<br/><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['missing_params']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo $_smarty_tpl->tpl_vars['missing_params']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['last']){?>,&nbsp;<?php }?><?php endfor; endif; ?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Modules",'icon'=>"star")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<ul><li>Drag the modules around to re-order then click save when ready</li><li>Double click them to edit</li><li>Modules with "position: absolute" in their style can be dragged in to position</li><li>New modules can be dragged from the "All Modules" tab</li></ul><p><strong>Note:</strong> Links and buttons in modules, apart from the Application Menu, have been deliberately disabled on this page to make drag and drop more reliable. Click here to return <a href="./">HOME</a><br /><strong><em>More info here</em></strong> <?php echo smarty_function_icon(array('_id'=>"help",'link'=>"http://dev.tiki.org/Modules+Revamp"),$_smarty_tpl);?>
</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Assigned modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Assigned modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?><legend class="heading"><span>Assign/Edit modules</span></legend><?php }?><h2>Assigned Modules</h2><?php echo smarty_function_button(array('edit_assign'=>0,'cookietab'=>2,'_auto_args'=>"edit_assign,cookietab",'_text'=>"Add module"),$_smarty_tpl);?>
<div id="assigned_modules"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php  $_smarty_tpl->tpl_vars['zone_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zone_info']->_loop = false;
 $_smarty_tpl->tpl_vars['zone_initial'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zone_info']->key => $_smarty_tpl->tpl_vars['zone_info']->value){
$_smarty_tpl->tpl_vars['zone_info']->_loop = true;
 $_smarty_tpl->tpl_vars['zone_initial']->value = $_smarty_tpl->tpl_vars['zone_info']->key;
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name']))); $_block_repeat=true; echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div id="<?php echo $_smarty_tpl->tpl_vars['zone_info']->value['id'];?>
_modules"><table class="normal" id="assigned_zone_<?php echo $_smarty_tpl->tpl_vars['zone_initial']->value;?>
"><tr><th>Name</th><th>Order</th><th>Cache</th><th>Rows</th><th>Parameters</th><th>Groups</th><th>Action</th></tr><?php echo smarty_function_cycle(array('print'=>false,'values'=>"even,odd"),$_smarty_tpl);?>
<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assigned_modules']->value[$_smarty_tpl->tpl_vars['zone_initial']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['module']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['module']->iteration=0;
 $_smarty_tpl->tpl_vars['module']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['module']->iteration++;
 $_smarty_tpl->tpl_vars['module']->index++;
 $_smarty_tpl->tpl_vars['module']->first = $_smarty_tpl->tpl_vars['module']->index === 0;
 $_smarty_tpl->tpl_vars['module']->last = $_smarty_tpl->tpl_vars['module']->iteration === $_smarty_tpl->tpl_vars['module']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['assigned_foreach']['first'] = $_smarty_tpl->tpl_vars['module']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['assigned_foreach']['last'] = $_smarty_tpl->tpl_vars['module']->last;
?><tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['ord'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['cache_time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['rows'];?>
</td><td style="font-size:smaller;"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['module']->value['params'], 'unescape'),"+"," "),"&","<br />");?>
</td><td style="font-size:smaller;"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_groups'];?>
</td><td><a class="link" href="tiki-admin_modules.php?edit_assign=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
&cookietab=2" title="Edit"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['assigned_foreach']['first']){?><a class="link" href="tiki-admin_modules.php?modup=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
" title="Move Up"><?php echo smarty_function_icon(array('_id'=>'resultset_up'),$_smarty_tpl);?>
</a><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['assigned_foreach']['last']){?><a class="link" href="tiki-admin_modules.php?moddown=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
" title="Move Down"><?php echo smarty_function_icon(array('_id'=>'resultset_down'),$_smarty_tpl);?>
</a><?php }?><a class="link" href="tiki-admin_modules.php?unassign=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
" title="Unassign"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"x"),$_smarty_tpl);?>
</a></td></tr><?php }
if (!$_smarty_tpl->tpl_vars['module']->_loop) {
?><?php echo smarty_function_norecords(array('_colspan'=>7),$_smarty_tpl);?>
<?php } ?></table></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } ?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><form method="post" action="#"><input id="module-order" type="hidden" name="module-order" value=""/></form><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Assigned modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if (isset($_REQUEST['edit_assign'])||$_smarty_tpl->tpl_vars['preview']->value=="y"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit module")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit module"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a name="assign"></a><?php if ($_smarty_tpl->tpl_vars['assign_name']->value==''){?><h2>Assign new module</h2><?php }else{ ?><h2>Edit this assigned module: <?php echo $_smarty_tpl->tpl_vars['assign_name']->value;?>
</h2><?php }?><?php if ($_smarty_tpl->tpl_vars['preview']->value=='y'){?><h3>Preview</h3><?php echo $_smarty_tpl->tpl_vars['preview_data']->value;?>
<?php }?><form method="post" action="tiki-admin_modules.php<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)){?>#assign<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['info']->value['moduleId'])){?><input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['moduleId'];?>
" /><?php }elseif(!empty($_smarty_tpl->tpl_vars['moduleId']->value)){?><input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
" /><?php }?><fieldset><?php echo $_smarty_tpl->getSubTemplate ('admin_modules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)){?><div class="input_submit_container"><input type="submit" name="preview" value="Module Options" onclick="needToConfirm=false;" /></div><?php }?></fieldset></form><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit module"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Custom Modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Custom Modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?><legend class="heading"><a href="#usertheme" name="usertheme"><span>Custom Modules</span></a></legend><?php }?><h2>Custom Modules</h2><table class="normal"><tr><th>Name</th><th>Title</th><th>Action</th></tr><?php echo smarty_function_cycle(array('print'=>false,'values'=>"even,odd"),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_modules']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td class="text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td class="text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['title'], ENT_QUOTES, 'UTF-8', true);?>
</td><td class="action"><a class="link" href="tiki-admin_modules.php?um_edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
&amp;cookietab=2#editcreate" title="Edit"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a><a class="link" href="tiki-admin_modules.php?edit_assign=<?php echo rawurlencode($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
&amp;cookietab=2#assign" title="Assign"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Assign"),$_smarty_tpl);?>
</a><a class="link" href="tiki-admin_modules.php?um_remove=<?php echo rawurlencode($_smarty_tpl->tpl_vars['user_modules']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
&amp;cookietab=2" title="Delete"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Delete"),$_smarty_tpl);?>
</a></td></tr><?php endfor; else: ?><?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>
<?php endif; ?></table><br /><?php if ($_smarty_tpl->tpl_vars['um_name']->value==''){?><h2>Create new custom module</h2><?php }else{ ?><h2>Edit this custom module: <?php echo $_smarty_tpl->tpl_vars['um_name']->value;?>
</h2><?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create your new custom module below. Make sure to preview first and make sure all is OK before <a href="#assign">assigning it</a>. Using HTML, you will be fine. However, if you improperly use wiki syntax or Smarty code, you could lock yourself out of the site.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<form name='editusr' method="post" action="tiki-admin_modules.php"><table class="formcolor"><tr valign="top"><td valign="top" class="odd"><?php if ($_smarty_tpl->tpl_vars['um_name']->value!=''){?><a href="tiki-admin_modules.php#editcreate">Create new custom module</a><?php }?><table><tr><td><label for="um_name">Name</label></td><td><input type="text" id="um_name" name="um_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['um_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td></tr><tr><td><label for="um_title">Title</label></td><td><input type="text" id="um_title" name="um_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['um_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td></tr><tr><td></td><td><label><input type="checkbox" name="um_parse" value="y" <?php if ($_smarty_tpl->tpl_vars['um_parse']->value=="y"){?>checked="checked"<?php }?> /> Must be wiki parsed.</label></td></tr></table></td><td class="even" style="vertical-align:top"><h3>Objects that can be included</h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<table><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=="y"){?><tr><td><label for="list_polls">Available polls:</label></td><td><select name="polls" id='list_polls'><option value="{poll}">--Random active poll--</option><option value="{poll id=current}">--Random current poll--</option><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['polls']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{poll pollId=<?php echo $_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pollId'];?>
}"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['polls']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_polls', 'um_data');" title="Use Poll"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: id= rate=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['galleries']->value){?><tr><td><label for="list_galleries">Random image from:</label></td><td><select name="galleries" id='list_galleries'><option value="{gallery id=-1}">All galleries</option><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{gallery id=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['galleryId'];?>
}"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_galleries', 'um_data');" title="Use Gallery"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: id= showgalleryname=1 hideimgname=1 hidelink=1",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['contents']->value){?><tr><td><label for="list_contents">Dynamic content blocks:</label></td><td><select name="contents" id='list_contents'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contents']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{content id=<?php echo $_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['contentId'];?>
}"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description'],20,"...",true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_contents', 'um_data');" title="Use Dynamic Content"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['rsss']->value){?><tr><td><label for="list_rsss">External feeds:</label></td><td><select name="rsss" id='list_rsss'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsss']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{rss id=<?php echo $_smarty_tpl->tpl_vars['rsss']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['rssId'];?>
}"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rsss']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_rsss', 'um_data');" title="Use RSS Module"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: id= max= skip=x,y ",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['menus']->value){?><tr><td><label for="list_menus">Default Tiki menus:</label></td><td><select name="menus" id='list_menus'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menus']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{menu id=<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['menuId'];?>
 css=n}"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_menus', 'um_data');" title="Use Menu"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params:<br />id=<br />structureId=<br />css=<br />link_on_section=y <i>or</i> n<br />type=vert <i>or</i> horiz<br />translate=y <i>or</i> n<br />menu_cookie=y <i>or</i> n",'width'=>120,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cssmenus']=="y"){?><tr><td><label for="list_cssmenus">CSS menus:</label></td><td><select name="cssmenus" id='list_cssmenus'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menus']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{menu id=<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['menuId'];?>
 type= }"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_cssmenus', 'um_data');" title="Use CSS menu"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params:<br />id=<br />type=horiz <i>or</i> vert<br />sectionLevel=<br />toLevel= ",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['banners']->value){?><tr><td><label for="list_banners">Banner zones:</label></td><td><select name="banners" id='list_banners'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['banners']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{banner zone=<?php echo $_smarty_tpl->tpl_vars['banners']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['zone'];?>
}"><?php echo $_smarty_tpl->tpl_vars['banners']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['zone'];?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_banners', 'um_data');" title="Use Banner Zone"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: zone= target=_blank|_self|",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?><?php if ($_smarty_tpl->tpl_vars['wikistructures']->value){?><tr><td><label for="list_wikistructures">Wiki Structures:</label></td><td><select name="structures" id='list_wikistructures'><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wikistructures']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><option value="{wikistructure id=<?php echo $_smarty_tpl->tpl_vars['wikistructures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['page_ref_id'];?>
}"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wikistructures']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php endfor; endif; ?></select></td><td><a class="link" href="javascript:setUserModuleFromCombo('list_wikistructures', 'um_data');" title="Use Wiki Structure"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a></td><td><a <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a></td></tr><?php }?></table><?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cssmenus']=='y'){?>To use a <a target="tikihelp" href="http://users.tpg.com.au/j_birch/plugins/superfish/">CSS (Superfish) menu</a>, use one of these syntaxes:<ul><li>{menu id=X type=vert}</li><li>{menu id=X type=horiz}</li></ul><?php }?>To use a default Tiki menu:<ul><li>{menu id=X  css=n}</li></ul><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td></tr><tr><td colspan="2" class="odd">Data<br /><a name="editcreate"></a><?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>'um_data','id'=>'um_data','rows'=>"6",'cols'=>"80",'_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','rows'=>"6",'cols'=>"80",'_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['um_data']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','rows'=>"6",'cols'=>"80",'_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br /><input type="submit" name="um_update" value="<?php if (empty($_smarty_tpl->tpl_vars['um_name']->value)){?>Create<?php }else{ ?>Save<?php }?>" onclick="needToConfirm=false" /></td></tr></table></form><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Custom Modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"All Modules")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"All Modules"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<form method="post" action="tiki-admin_modules.php"><div style="height:400px;overflow:auto;"><div class="navbar"><?php echo smarty_function_listfilter(array('selectors'=>'#module_list li'),$_smarty_tpl);?>
<input type="checkbox" name="module_list_show_all" id="module_list_show_all"<?php if ($_smarty_tpl->tpl_vars['module_list_show_all']->value){?> checked="checked"<?php }?> /><label for="module_list_show_all">Show all modules</label></div><ul id="module_list"><?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_modules_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['info']->value['enabled']){?>enabled<?php }else{ ?>disabled<?php }?> clearfix"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /><div class="q1 tips"title="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 &lt;em&gt;(<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)&lt;/em&gt;|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
<?php if (!$_smarty_tpl->tpl_vars['info']->value['enabled']){?>&lt;br /&gt;&lt;small&gt;&lt;em&gt;(Requires <?php echo implode(' &amp; ',$_smarty_tpl->tpl_vars['info']->value['prefs']);?>
)&lt;/em&gt;&lt;/small&gt;<?php }?>"><?php echo smarty_function_icon(array('_id'=>"module"),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</strong> <em><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</em></div><div class="description q23"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div></li><?php } ?></ul></div></form><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#module_list_show_all").click(function(){
	$("#module_list li.disabled").toggle($(this).attr("checked"));
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"All Modules"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>