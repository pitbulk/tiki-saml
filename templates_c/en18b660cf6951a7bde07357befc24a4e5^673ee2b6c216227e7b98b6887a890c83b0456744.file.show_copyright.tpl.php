<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:37
         compiled from "/var/www/tiki/templates/show_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1049096593508e4b911c1552-71134735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '673ee2b6c216227e7b98b6887a890c83b0456744' => 
    array (
      0 => '/var/www/tiki/templates/show_copyright.tpl',
      1 => 1266527455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049096593508e4b911c1552-71134735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'page' => 0,
    'tiki_p_edit_copyrights' => 0,
    'copyrightpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b9125dab3_77005799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b9125dab3_77005799')) {function content_508e4b9125dab3_77005799($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']==$_smarty_tpl->tpl_vars['page']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_copyrights']->value=='y'){?>
			<br />
			To edit the copyright notices <a href="copyrights.php?page=<?php echo $_smarty_tpl->tpl_vars['copyrightpage']->value;?>
">Click Here</a>.
		<?php }?>
	<?php }else{ ?>
		<br />
		The content on this page is licensed under the terms of the <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'],'wiki','with_next');?>
copyrightpage=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
</a>.
	<?php }?>
<?php }?>
<?php }} ?>