<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:28:32
         compiled from "/var/www/tiki/templates/admin_modules_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952672954508e4c40bbc399-09296701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c5fed1cfdbd1b2cab1d33f30b0a70e0ca8ed7a' => 
    array (
      0 => '/var/www/tiki/templates/admin_modules_form.tpl',
      1 => 1316095513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952672954508e4c40bbc399-09296701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_modules_info' => 0,
    'name' => 0,
    'assign_name' => 0,
    'assign_selected' => 0,
    'info' => 0,
    'assign_info' => 0,
    'sect' => 0,
    'assign_position' => 0,
    'orders' => 0,
    'assign_order' => 0,
    'assign_cache' => 0,
    'assign_rows' => 0,
    'groups' => 0,
    'prefs' => 0,
    'assign_type' => 0,
    'params' => 0,
    'param' => 0,
    'assign_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4c411d4914_10117883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4c411d4914_10117883')) {function content_508e4c411d4914_10117883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_capitalize')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_autocomplete')) include 'lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_popup')) include 'lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
?>


			
<div id="module_params">
	<div class="cbox-data">
		<label for="assign_name"><strong>Module Name</strong></label>
		<select id="assign_name" name="assign_name">
			<option value=""></option>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_modules_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['assign_name']->value==$_smarty_tpl->tpl_vars['name']->value||$_smarty_tpl->tpl_vars['assign_selected']->value==$_smarty_tpl->tpl_vars['name']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</option>
			<?php } ?>
		</select>
		<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value)){?><div class="description"><?php echo $_smarty_tpl->tpl_vars['assign_info']->value['description'];?>
<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value['documentation'])){?> <?php echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['assign_info']->value['documentation']),$_smarty_tpl);?>
<?php }?></div><?php }?>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['assign_name']->value)){?>
		<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])&&$_smarty_tpl->tpl_vars['assign_info']->value['type']=='function'){?>
			<ul>
				<li><a href="#param_section_basic">Basic</a></li>
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assign_info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['sect']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
					<li><a href="#param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sect']->value);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
				<?php } ?>
			</ul>
		<?php }else{ ?>
		<?php }?>
		<fieldset id="param_section_basic">
			<div class="admin2cols adminoptionbox clearfix">
				<label for="assign_position">Position</label>
				<select id="assign_position" name="assign_position">
					<option value="t" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='t'){?>selected="selected"<?php }?>>Top</option>
					<option value="o" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='o'){?>selected="selected"<?php }?>>Topbar</option>
					<option value="p" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='p'){?>selected="selected"<?php }?>>Page Top</option>
					<option value="l" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='l'){?>selected="selected"<?php }?>>Left</option>
					<option value="r" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='r'){?>selected="selected"<?php }?>>Right</option>
					<option value="q" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='q'){?>selected="selected"<?php }?>>Page Bottom</option>
					<option value="b" <?php if ($_smarty_tpl->tpl_vars['assign_position']->value=='b'){?>selected="selected"<?php }?>>Bottom</option>
				</select>
			</div>

			<div class="admin2cols adminoptionbox clearfix">
				<label for="assign_order">Order</label>
				<select id="assign_order" name="assign_order">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['assign_order']->value==$_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>

			<div class="admin2cols adminoptionbox clearfix">
				<label for="assign_cache">Cache Time (secs)</label>
				<input type="text" id="assign_cache" name="assign_cache" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['assign_cache']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			</div>
			<?php if (!isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])||$_smarty_tpl->tpl_vars['assign_info']->value['type']!='function'){?>
				<div class="admin2cols adminoptionbox clearfix">
					<label for="assign_rows">Rows</label>
					<input type="text" id="assign_rows" name="assign_rows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['assign_rows']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				</div>
			<?php }?>
			<div class="admin2cols adminoptionbox clearfix">
				<div class="q1">
					<label for="groups">Groups</label>
				</div>
				<div class="description q234">
					<select multiple="multiple" id="groups" name="groups[]">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['selected']=='y'){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php endfor; endif; ?>
					</select>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['modallgroups']=='y'){?>
						<div class="simplebox">
							<?php echo smarty_function_icon(array('_id'=>'information','style'=>"vertical-align:middle;float:left"),$_smarty_tpl);?>
 The <a class="rbox-link" href="tiki-admin.php?page=module">Display Modules to All Groups</a> setting will override your selection of specific groups.
						</div>
						<br />
					<?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules']=='y'){?>
				<div class="admin2cols adminoptionbox clearfix">
					Visibility
						<select name="assign_type">
							<option value="D" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='D'){?>selected="selected"<?php }?>>
								Displayed now for all eligible users even with personal assigned modules
							</option>
							<option value="d" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='d'){?>selected="selected"<?php }?>>
								Displayed for the eligible users with no personal assigned modules
							</option>
							<option value="P" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='P'){?>selected="selected"<?php }?>>
								Displayed now, can't be unassigned
							</option>
							<option value="h" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value=='h'){?>selected="selected"<?php }?>>
								Not displayed until a user chooses it
							</option>
						</select>
						<div class="simplebox">
							<?php echo smarty_function_icon(array('_id'=>'information','style'=>"vertical-align:middle;float:left;"),$_smarty_tpl);?>
Because <a class="rbox-link" href="tiki-admin.php?page=module">Users can Configure Modules</a>, select either &quot;Displayed now for all eligible users even with personal assigned modules&quot; or &quot;Displayed now, can't be unassigned&quot; to make sure users will notice any newly assigned modules.
						</div>
					</div>
				<?php }?>
			</fieldset>
			<?php if (isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])&&$_smarty_tpl->tpl_vars['assign_info']->value['type']=='function'){?>
				<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['sect'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assign_info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['sect']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
					<fieldset id="param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
">
						<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value){
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
							<div class="admin2cols adminoptionbox clearfix">
								<div class="q1">
									<label for="assign_params[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['param']->value['required']){?> <span class="attention">(required)</span><?php }?></label>
								</div>
								<div class="description q234">
									<input type="text" id="assign_params[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]" name="assign_params[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])){?> class="<?php echo $_smarty_tpl->tpl_vars['param']->value['filter'];?>
" <?php }?>/>
									<br />
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['description'], ENT_QUOTES, 'UTF-8', true);?>

									<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['default'])){?> - Default: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</div>
							</div>
						<?php } ?>
					</fieldset>
				<?php } ?>
				<?php echo smarty_function_autocomplete(array('element'=>".pagename",'type'=>"pagename",'options'=>"multiple: true, multipleSeparator:';'"),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#module_params").tabs();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<div class="admin2cols adminoptionbox clearfix">
					<div class="q1">
						<a <?php echo smarty_function_popup(array('text'=>"Params: specific params to the module and/or general params ('lang', 'flip', 'title', 'decorations', 'section', 'overflow', 'page', 'nobox', 'bgcolor', 'color', 'theme', 'notitle', 'nopage'). Separator between params:'&amp;'. E.g. maxlen=15&amp;nonums=y.",'width'=>200,'center'=>true),$_smarty_tpl);?>
>
							<label for="assign_params">Parameters</label>
						</a>
						&nbsp;<?php echo smarty_function_help(array('url'=>"Module+Parameters",'desc'=>"Enter the parameters in URL format, e.g. 'nobox=y&class=rbox-data'"),$_smarty_tpl);?>

					</div>
					<div class="q234">
						<textarea id="assign_params" name="assign_params" rows="1" cols="60" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['assign_params']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate")); $_block_repeat=true; echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit custom module <?php echo smarty_function_icon(array('_id'=>"arrow_right"),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
			<?php }?>
		<div class="input_submit_container">
			<input type="submit" name="preview" value="Preview" onclick="needToConfirm=false;" />
			<input type="submit" name="assign" value="Assign" onclick="needToConfirm=false;" />
		</div>
	<?php }?>
</div>
<?php }} ?>