<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:11
         compiled from "/var/www/tiki/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2049157402508e4b776c80d5-73855246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc4d199f90f71527b1b65eeceb71d2f27096e425' => 
    array (
      0 => '/var/www/tiki/templates/footer.tpl',
      1 => 1335888138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2049157402508e4b776c80d5-73855246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'phpErrors' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b77807d40_30484754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b77807d40_30484754')) {function content_508e4b77807d40_30484754($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_listfilter')) include 'lib/smarty_tiki/function.listfilter.php';
if (!is_callable('smarty_function_debugger')) include 'lib/smarty_tiki/function.debugger.php';
?>

<?php if ((!isset($_smarty_tpl->tpl_vars['display']->value)||$_smarty_tpl->tpl_vars['display']->value=='')){?>
	<?php if (count($_smarty_tpl->tpl_vars['phpErrors']->value)){?>
		<?php if (($_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||$_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']=='n'){?>
		<?php echo smarty_function_button(array('_ajax'=>"n",'_id'=>"show-errors-button",'_onclick'=>"flip('errors');return false;",'_text'=>"Show php error messages"),$_smarty_tpl);?>

		<div id="errors" class="rbox warning" style="display:<?php if ((isset($_SESSION['tiki_cookie_jar']['show_errors'])&&$_SESSION['tiki_cookie_jar']['show_errors']=='y')||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'){?>block<?php }else{ ?>none<?php }?>;">
			&nbsp;<?php echo smarty_function_listfilter(array('selectors'=>'#errors>div'),$_smarty_tpl);?>

			<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phpErrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value){
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['err']->value;?>

			<?php } ?>
		</div>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'){?>
		
		<?php echo smarty_function_debugger(array(),$_smarty_tpl);?>

	<?php }?>

<?php }?>
<?php }} ?>