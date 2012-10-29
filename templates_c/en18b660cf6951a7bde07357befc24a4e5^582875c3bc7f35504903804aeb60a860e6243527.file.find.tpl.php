<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:36:25
         compiled from "/var/www/tiki/templates/find.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1232935862508e4e19cc0660-76482505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582875c3bc7f35504903804aeb60a860e6243527' => 
    array (
      0 => '/var/www/tiki/templates/find.tpl',
      1 => 1335752754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1232935862508e4e19cc0660-76482505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filegals_manager' => 0,
    'whatlabel' => 0,
    'find' => 0,
    'autocomplete' => 0,
    'find_in' => 0,
    'exact_match' => 0,
    'find_show_sub' => 0,
    'find_sub' => 0,
    'types' => 0,
    'types_tag' => 0,
    'find_type' => 0,
    'topics' => 0,
    'find_topic' => 0,
    'find_show_languages' => 0,
    'prefs' => 0,
    'find_lang' => 0,
    'languages' => 0,
    'find_show_languages_excluded' => 0,
    'find_langOrphan' => 0,
    'find_show_date_range' => 0,
    'find_date_from' => 0,
    'find_date_to' => 0,
    'find_show_categories' => 0,
    'find_show_categories_multi' => 0,
    'categories' => 0,
    'findSelectedCategoriesNumber' => 0,
    'find_categId' => 0,
    'identifier' => 0,
    'category' => 0,
    'cat_tree' => 0,
    'tiki_p_admin_categories' => 0,
    'key' => 0,
    'value' => 0,
    'filters' => 0,
    'filter_names' => 0,
    'filter_values' => 0,
    'item' => 0,
    'key2' => 0,
    'find_durations' => 0,
    'duration' => 0,
    'show_find_orphans' => 0,
    'find_orphans' => 0,
    'find_other' => 0,
    'find_other_val' => 0,
    'find_show_num_rows' => 0,
    'maxRecords' => 0,
    'gmapbuttons' => 0,
    'mapview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4e1a6e1552_20793647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4e1a6e1552_20793647')) {function content_508e4e1a6e1552_20793647($_smarty_tpl) {?><?php if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_modifier_tr_if')) include 'lib/smarty_tiki/modifier.tr_if.php';
if (!is_callable('smarty_function_html_select_date')) include 'lib/smarty_tiki/function.html_select_date.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_function_html_select_duration')) include 'lib/smarty_tiki/function.html_select_duration.php';
?>



<div class="clearfix">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
" class="findtable">
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)){?><input type="hidden" name="filegals_manager" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filegals_manager']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>

		<?php echo smarty_function_query(array('_type'=>'form_input','maxRecords'=>'NULL','type'=>'NULL','types'=>'NULL','find'=>'NULL','topic'=>'NULL','lang'=>'NULL','exact_match'=>'NULL','categId'=>'NULL','cat_categories'=>'NULL','filegals_manager'=>'NULL','save'=>'NULL','offset'=>'NULL','searchlist'=>'NULL','searchmap'=>'NULL'),$_smarty_tpl);?>


	<label class="findtitle">
		<?php if (empty($_smarty_tpl->tpl_vars['whatlabel']->value)){?>
			Find
		<?php }else{ ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['whatlabel']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<input type="text" name="find" id="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php if (isset($_smarty_tpl->tpl_vars['autocomplete']->value)){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#find").tiki("autocomplete", "<?php echo $_smarty_tpl->tpl_vars['autocomplete']->value;?>
")<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</label>
	<?php if (isset($_smarty_tpl->tpl_vars['find_in']->value)){?><?php echo smarty_function_help(array('url'=>"#",'desc'=>"Find in: ".((string)$_smarty_tpl->tpl_vars['find_in']->value)),$_smarty_tpl);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['exact_match']->value)){?>
	<label class="findexactmatch" for="findexactmatch" style="white-space: nowrap">
			Exact match
		<input type="checkbox" name="exact_match" id="findexactmatch" <?php if ($_smarty_tpl->tpl_vars['exact_match']->value!='n'){?>checked="checked"<?php }?>/>
	</label>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['find_show_sub']->value)&&$_smarty_tpl->tpl_vars['find_show_sub']->value=='y'){?>
	<label class="findsub">
		and all the sub-objects
		<input type="checkbox" name="find_sub" id="find_sub" <?php if (!empty($_smarty_tpl->tpl_vars['find_sub']->value)&&$_smarty_tpl->tpl_vars['find_sub']->value=='y'){?>checked="checked"<?php }?>/>
	</label>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&(!isset($_smarty_tpl->tpl_vars['types_tag']->value)||$_smarty_tpl->tpl_vars['types_tag']->value=='select')){?>
	<select name="type" class="findtypes">
		<option value='' <?php if ($_smarty_tpl->tpl_vars['find_type']->value==''){?>selected="selected"<?php }?>>any type</option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['find_type']->value==$_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']){?>selected="selected"<?php }?>>
				<?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['type']), ENT_QUOTES, 'UTF-8', true);?>

			</option>
		<?php endfor; endif; ?>
	</select>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['topics']->value)){?>
	<select name="topic" class="findtopics">
		<option value='' <?php if ($_smarty_tpl->tpl_vars['find_topic']->value==''){?>selected="selected"<?php }?>>any topic</option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['topics']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['find_topic']->value==$_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['topicId']){?>selected="selected"<?php }?>>
				<?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']), ENT_QUOTES, 'UTF-8', true);?>

			</option>
		<?php endfor; endif; ?>
	</select>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['find_show_languages']->value)&&$_smarty_tpl->tpl_vars['find_show_languages']->value=='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'){?>
	<span class="findlang">
		<select name="lang" class="in">
			<option value='' <?php if ($_smarty_tpl->tpl_vars['find_lang']->value==''){?>selected="selected"<?php }?>>any language</option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if (!is_array($_smarty_tpl->tpl_vars['prefs']->value['available_languages'])||count($_smarty_tpl->tpl_vars['prefs']->value['available_languages'])==0||in_array($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'],$_smarty_tpl->tpl_vars['prefs']->value['available_languages'])){?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['find_lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']){?>selected="selected"<?php }?>>
				<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

			</option>
			<?php }?>
		<?php endfor; endif; ?>
		</select>
		<?php if (isset($_smarty_tpl->tpl_vars['find_show_languages_excluded']->value)&&$_smarty_tpl->tpl_vars['find_show_languages_excluded']->value=='y'){?>
		<label>not in
			<select name="langOrphan" class="notin">
				<option value='' <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value==''){?>selected="selected"<?php }?>></option>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if (!is_array($_smarty_tpl->tpl_vars['prefs']->value['available_languages'])||count($_smarty_tpl->tpl_vars['prefs']->value['available_languages'])==0||in_array($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'],$_smarty_tpl->tpl_vars['prefs']->value['available_languages'])){?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']){?>selected="selected"<?php }?>>
					<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

				</option>
			<?php }?>
		<?php endfor; endif; ?>
			</select>
		</label>
		<?php }?>
	</span>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['find_show_date_range']->value)&&$_smarty_tpl->tpl_vars['find_show_date_range']->value=='y'){?>
	<div id="date_range_find">
		<span class="findDateFrom">
			From
			<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_from']->value,'prefix'=>"find_from_",'start_year'=>"-2",'end_year'=>"+2",'month_format'=>"%m",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

		</span>
		<span class="findDateTo">
			to
			<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_to']->value,'prefix'=>"find_to_",'start_year'=>"-2",'end_year'=>"+2",'month_format'=>"%m",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

		</span>
	</div>
<?php }?>

<?php if (((isset($_smarty_tpl->tpl_vars['find_show_categories']->value)&&$_smarty_tpl->tpl_vars['find_show_categories']->value=='y')||(isset($_smarty_tpl->tpl_vars['find_show_categories_multi']->value)&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'))&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
	<div class="category_find">
	<?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='n'||$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value<=1){?>
	<div id="category_singleselect_find">
		<select name="categId" class="findcateg">
			<option value='' <?php if ($_smarty_tpl->tpl_vars['find_categId']->value==''){?>selected="selected"<?php }?>>any category</option>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['identifier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['identifier']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['find_categId']->value==$_smarty_tpl->tpl_vars['identifier']->value){?>selected="selected"<?php }?>>
					<?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['category']->value['categpath']), ENT_QUOTES, 'UTF-8', true);?>

				</option>
			<?php } ?>
		</select>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'){?><a href="#" onclick="show('category_multiselect_find');hide('category_singleselect_find');">Multiple select</a><?php }?>
	</div>
	<?php }?>
	<div id="category_multiselect_find" style="display: <?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value=='y'&&$_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value>1){?>block<?php }else{ ?>none<?php }?>;">
  		<div class="multiselect"> 
  			<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0){?>
				<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

				<div class="clear">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y'){?>
    				<div class="floatright"><a href="tiki-admin_categories.php" class="link">Admin Categories <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a></div>
				<?php }?>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

			<?php }else{ ?>
				<div class="clear">
 				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y'){?>
    				<div class="floatright"><a href="tiki-admin_categories.php" class="link">Admin Categories <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a></div>
 				<?php }?>
    			No categories defined
  			<?php }?>
			</div> 
		</div> 
	</div> 
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['types']->value)&&isset($_smarty_tpl->tpl_vars['types_tag']->value)&&$_smarty_tpl->tpl_vars['types_tag']->value=='checkbox'){?>
	<div class="findtypes">
		<ul>
			<li>
				in:
			</li>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li>
					<input type="checkbox" name="types[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (is_array($_smarty_tpl->tpl_vars['find_type']->value)&&in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['find_type']->value)){?>checked="checked"<?php }?> /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</li>
		<?php } ?>
		</ul>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
	<div class="findfilter">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<span>
				<?php echo $_smarty_tpl->tpl_vars['filter_names']->value[$_smarty_tpl->tpl_vars['key']->value];?>
:
			</span>
			<select name="findfilter_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
				<option value='' <?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]==''){?>selected="selected"<?php }?>>--</option>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value]==$_smarty_tpl->tpl_vars['key2']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
				<?php } ?>
			</select>
		<?php } ?>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['find_durations']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['duration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['duration']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['find_durations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['duration']->key => $_smarty_tpl->tpl_vars['duration']->value){
$_smarty_tpl->tpl_vars['duration']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['duration']->key;
?>
		<label class="find_duration">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['duration']->value['label'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php echo smarty_function_html_select_duration(array('prefix'=>$_smarty_tpl->tpl_vars['duration']->value['prefix'],'default'=>$_smarty_tpl->tpl_vars['duration']->value['default'],'default_unit'=>$_smarty_tpl->tpl_vars['duration']->value['default_unit']),$_smarty_tpl);?>

		</label>
	<?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['show_find_orphans']->value)&&$_smarty_tpl->tpl_vars['show_find_orphans']->value=='y'){?>
	<label class="find_orphans" for="find_orphans">
		   Orphans
		   <input type="checkbox" name="find_orphans" id="find_orphans" <?php if ($_smarty_tpl->tpl_vars['find_orphans']->value=='y'){?>checked="checked"<?php }?>/>
	</label>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['find_other']->value)){?>
	<label class="find_other" for="find_other">
		   <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['find_other']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		   <input type="text" name="find_other" id="find_other" value="<?php if (!empty($_smarty_tpl->tpl_vars['find_other_val']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find_other_val']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
	</label>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['find_show_num_rows']->value)&&$_smarty_tpl->tpl_vars['find_show_num_rows']->value=='y'){?>
	<label class="findnumrows" for="findnumrows">
			Number of displayed rows
			<input type="text" name="maxRecords" id="findnumrows" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maxRecords']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="3" />
	</label>
<?php }?>

<label class="findsubmit">
	<input type="submit" name="search" value="Go" />
	<?php if ($_smarty_tpl->tpl_vars['find']->value!=''){?>
		<span class="button">
			<a href="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array('find'=>'','type'=>'','types'=>'','topic'=>'','lang'=>'','langOrphan'=>'','exact_match'=>'','categId'=>'','maxRecords'=>'','find_from_Month'=>'','find_from_Day'=>'','find_from_Year'=>'','find_to_Month'=>'','find_to_Day'=>'','find_to_Year'=>''),$_smarty_tpl);?>
" title="Clear Filter">Clear Filter</a>
		</span>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)&&$_smarty_tpl->tpl_vars['gmapbuttons']->value)&&(isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value)){?>
		<input type="submit" name="searchlist" value="List View" />
		<input type="hidden" name="mapview" value="y" />
	<?php }elseif((isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)&&$_smarty_tpl->tpl_vars['gmapbuttons']->value)){?>
		<input type="submit" name="searchmap" value="Map View" />
		<input type="hidden" name="mapview" value="n" />
	<?php }?>
</label>

</form>
</div>

<?php }} ?>