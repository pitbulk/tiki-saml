<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:09
         compiled from "/var/www/tiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:336282884508e4b7594afa4-51774973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e66e3b017dff7bd14251f73d1615ecdd433770' => 
    array (
      0 => '/var/www/tiki/templates/credits.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336282884508e4b7594afa4-51774973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b759a3d87_94256227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b759a3d87_94256227')) {function content_508e4b759a3d87_94256227($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/tiki/lib/smarty/libs/plugins/modifier.replace.php';
?>Theme: <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style'],'.css',''),'None',''));?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['style_option']){?> - <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style_option'],'.css',''),'None',''));?>
<?php }?>
<?php }} ?>