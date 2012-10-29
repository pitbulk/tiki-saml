<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:07
         compiled from "/var/www/tiki/templates/tiki-change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562020963508e4b73d6d722-19721860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d861bcb41391f969378db2f6648880f74709b4' => 
    array (
      0 => '/var/www/tiki/templates/tiki-change_password.tpl',
      1 => 1330896173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562020963508e4b73d6d722-19721860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_user_validation' => 0,
    'oldpass' => 0,
    'userlogin' => 0,
    'prefs' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b74052938_30765072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b74052938_30765072')) {function content_508e4b74052938_30765072($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		function regCapsLock(e){
			kc = e.keyCode?e.keyCode:e.which;
			sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
			if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
				document.getElementById('divRegCapson').style.visibility = 'visible';
			else
				document.getElementById('divRegCapson').style.visibility = 'hidden';
		}

		var submit_counter = 0;
		function match_pass() {
			submit_counter += 1;
			ret_msg = document.getElementById('validate');
			pass0 = document.getElementById('oldpass').value;
			pass1 = document.getElementById('pass1').value;
			pass2 = document.getElementById('pass2').value;
			if (submit_counter > 10) {
				ret_msg.innerHTML = "<img src='img/icons/exclamation.png' style='vertical-align:middle' alt='Overflow' /> Too many tries";
				return false;
			} else if ((pass0 == '') || (pass1 == '') || (pass2 == '')) {
				ret_msg.innerHTML = "<img src='img/icons/exclamation.png' style='vertical-align:middle' alt='Missing' /> Passwords missing";
				return false;
			} else if ( pass1 != pass2 ) {
				ret_msg.innerHTML = "<img src='img/icons/exclamation.png' style='vertical-align:middle' alt='Do not match' /> Passwords don\'t match";
				return false;
			}
			return true;
		}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (isset($_smarty_tpl->tpl_vars['new_user_validation']->value)&&$_smarty_tpl->tpl_vars['new_user_validation']->value=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your account has been validated. You have to choose a password to use this account.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['new_user_validation'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change password enforced<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form method="post" action="tiki-change_password.php" >
<?php if (!empty($_smarty_tpl->tpl_vars['oldpass']->value)&&$_smarty_tpl->tpl_vars['new_user_validation']->value=='y'){?>
	<input type="hidden" name="oldpass" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oldpass']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }elseif(!empty($_REQUEST['actpass'])){?>
	<input type="hidden" name="actpass" value="<?php echo htmlspecialchars($_REQUEST['actpass'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<fieldset><?php if ($_smarty_tpl->tpl_vars['new_user_validation']->value!='y'){?><legend>Change your password</legend><?php }?>
	<div class="simplebox highlight" id="divRegCapson" style="visibility:hidden"><?php echo smarty_function_icon(array('_id'=>'error','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock is on.</div>
<table class="formcolor">
<tr>
  <td><label for="user">Username:</label></td>
  <td>
  	<?php if (empty($_smarty_tpl->tpl_vars['userlogin']->value)){?>
		<input type="text" id="user" name="user"/ >
	<?php }else{ ?>
		<input type="hidden" id="user" name="user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userlogin']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<strong><?php echo $_smarty_tpl->tpl_vars['userlogin']->value;?>
</strong>
	<?php }?>
  </td>
</tr>
<?php if (empty($_REQUEST['actpass'])&&$_smarty_tpl->tpl_vars['new_user_validation']->value!='y'){?>
<tr>
  <td><label for="oldpass">Old password:</label></td>
  <td><input type="password" name="oldpass" id="oldpass" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oldpass']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
<?php }?>     
<tr>
  <td><label for="pass1">New password:</label></td>
  <td>
						<div style="float:right;width:175px;margin-left:5px;">
							<div id="mypassword_text"></div>
							<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div> 
						</div>
  <input type="password" name="pass" id="pass1" onkeypress="regCapsLock(event)" onkeyup="runPassword(this.value, 'mypassword');<?php if (0&&$_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>check_pass();<?php }?>" />
	<?php if (1||$_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']!='y'){?>
		<?php echo $_smarty_tpl->getSubTemplate ('password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
  
  </td>
</tr>
<tr>
  <td><label for="pass2">Repeat password:</label></td>
  <td><input type="password" name="pass2" id="pass2" /></td>
</tr>
<?php if (empty($_smarty_tpl->tpl_vars['email']->value)){?>
<tr>
  <td><label for="email">Email:</label></td>
  <td><input type="text" name="email" id="email" /></td>
</tr>
<?php }?>
<tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="change" value="Change" onclick="return match_pass();"/><span id="validate"></span></td>
</tr>
</table>
</fieldset>
</form>
<?php }} ?>