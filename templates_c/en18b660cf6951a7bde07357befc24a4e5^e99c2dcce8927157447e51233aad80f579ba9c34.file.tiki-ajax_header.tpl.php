<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:11
         compiled from "/var/www/tiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317422514508e4b7769f5d8-02337918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99c2dcce8927157447e51233aad80f579ba9c34' => 
    array (
      0 => '/var/www/tiki/templates/tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317422514508e4b7769f5d8-02337918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b776bca01_57791779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b776bca01_57791779')) {function content_508e4b776bca01_57791779($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>