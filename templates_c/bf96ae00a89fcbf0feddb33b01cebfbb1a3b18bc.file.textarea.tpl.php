<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:26
         compiled from "/var/www/tiki/templates/prefs/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1825456539508e4bc2697c35-29246997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf96ae00a89fcbf0feddb33b01cebfbb1a3b18bc' => 
    array (
      0 => '/var/www/tiki/templates/prefs/textarea.tpl',
      1 => 1315143306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1825456539508e4bc2697c35-29246997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'syntax' => 0,
    'codemirror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bc27bb173_91968904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bc27bb173_91968904')) {function content_508e4bc27bb173_91968904($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>" style="text-align: left;"><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
:</label><?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<textarea name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['syntax']->value){?> data-syntax="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['syntax']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-codemirror="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['codemirror']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?> style="width:95%"<?php if ($_smarty_tpl->tpl_vars['p']->value['size']){?> rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['size'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?><br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em><?php }?><?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>