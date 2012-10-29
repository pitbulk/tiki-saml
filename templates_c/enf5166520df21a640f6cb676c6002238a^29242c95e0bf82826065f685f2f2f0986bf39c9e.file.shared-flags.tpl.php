<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:08
         compiled from "/var/www/tiki/templates/prefs/shared-flags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1059863829508e4bec33dc74-28450600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29242c95e0bf82826065f685f2f2f0986bf39c9e' => 
    array (
      0 => '/var/www/tiki/templates/prefs/shared-flags.tpl',
      1 => 1329892083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059863829508e4bec33dc74-28450600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bec535878_37258229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bec535878_37258229')) {function content_508e4bec535878_37258229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include 'lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']){?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['helpurl'], ENT_QUOTES, 'UTF-8', true);?>
" target="tikihelp" class="tikihelp" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']){?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('_id'=>'help','alt'=>''),$_smarty_tpl);?>

	</a>
<?php }elseif($_smarty_tpl->tpl_vars['p']->value['description']){?>
	<span class="tikihelp" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']){?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('_id'=>'information','alt'=>''),$_smarty_tpl);?>

	</span>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['warning']){?>
	<a href="#" target="tikihelp" class="tikihelp" title="Warning: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['warning'], ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smarty_function_icon(array('_id'=>'error','alt'=>''),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['modified']&&$_smarty_tpl->tpl_vars['p']->value['available']){?>
	<input class="pref-reset system" type="checkbox" name="lm_reset[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:none" />
	<input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_default" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['popup_html'])){?>
	<a class="icon" title="Actions" href="#" style="padding:0; margin:0; border:0"
			 <?php echo smarty_function_popup(array('trigger'=>"onClick",'sticky'=>1,'mouseoff'=>1,'fullhtml'=>1,'center'=>"true",'text'=>htmlspecialchars(strtr($_smarty_tpl->tpl_vars['p']->value['popup_html'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
>
		<?php echo smarty_function_icon(array('_id'=>'application_form','alt'=>"Actions"),$_smarty_tpl);?>

	</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['voting_html'])){?>
	<?php echo $_smarty_tpl->tpl_vars['p']->value['voting_html'];?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('.pref-reset')
	.change( function() {
		var c = $(this).attr('checked') === "checked";
		var $el = $(this).closest('.adminoptionbox').find('input:not(:hidden),select,textarea')
			.not('.system').attr( 'disabled', c )
			.css("opacity", c ? .6 : 1 );
		var defval = $("#" + $(this).val() + "_default").val();
		if ($el.attr("type") == "checkbox") {
			$el.attr('checked', defval === "y" ? c : !c);
		} else {
			var temp = $("[name=" + $(this).val() + "]").val();
			$el.val( defval );
			$("#" + $(this).val() + "_default").val( temp );
		}
		$el.change();
	})
	.wrap('<span/>')
	.closest('span')
	.append('<?php echo smarty_function_icon(array('_id'=>'arrow_undo','alt'=>"Reset to default",'href'=>"#"),$_smarty_tpl);?>
')
	.find('a')
	.click( function() {
		var box = $(this).closest('span').find(':checkbox');
		box.attr('checked', box.filter(':checked').length == 0).change();
		var $i = $(this).find("img");
		if ($i.attr("src").indexOf("undo") > -1) {
			$i.attr({
				"src": $i.attr("src").replace("undo", "redo"),
				"title": "Restore current value",
				"alt": "Restore current value"
			});
		} else {
			$i.attr({
				"src": $i.attr("src").replace("redo", "undo"),
				"title": "Reset to default",
				"alt": "Reset to default"
			});
		}
		return false;
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->tpl_vars['p']->value['pages'];?>

<?php }} ?>