<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:08
         compiled from "/var/www/tiki/templates/modules/mod-login_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161048372508e4b74946c59-28232149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '831818720365878119347a69c07598f96cb2ec67' => 
    array (
      0 => '/var/www/tiki/templates/modules/mod-login_box.tpl',
      1 => 1343241897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161048372508e4b74946c59-28232149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_logo_instance' => 0,
    'tpl_module_title' => 0,
    'module_params' => 0,
    'nobox' => 0,
    'style' => 0,
    'mode' => 0,
    'user' => 0,
    'tiki_p_admin' => 0,
    'prefs' => 0,
    'base_url_https' => 0,
    'openid_userlist' => 0,
    'username' => 0,
    'showloginboxes' => 0,
    'challenge' => 0,
    'urllogin' => 0,
    'close_tags' => 0,
    'error_login' => 0,
    'loginuser' => 0,
    'error_user' => 0,
    'adminuser' => 0,
    'base_url_http' => 0,
    'show_stay_in_ssl_mode' => 0,
    'stay_in_ssl_mode' => 0,
    'use_intertiki_auth' => 0,
    'intertiki' => 0,
    'k' => 0,
    'registration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b754ef2a7_49983248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b754ef2a7_49983248')) {function content_508e4b754ef2a7_49983248($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_autocomplete')) include 'lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function capLock(e, el){
	kc = e.keyCode ? e.keyCode : e.which;
	sk = e.shiftKey ? e.shiftKey : (kc == 16 ? true : false);
	if ((kc >= 65 && kc <= 90 && !sk) || (kc >= 97 && kc <= 122 && sk)) {
		$('.divCapson', $(el).parents('div:first')).show();
	} else {
		$('.divCapson', $(el).parents('div:first')).hide();
	}
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

//We were having problems with the menu disapearing when you selected an input, this prevents the menu from going away once you have put focus on an input
var hasFocus = false;
var loginPopup = $('.siteloginbar_popup .cssmenu_horiz')

loginPopup.find('ul')
	.mouseout(function() {
		return !hasFocus;
	});

loginPopup.find(':input')
	.focus(function() {
		hasFocus = true;
	})
	.blur(function() {
		hasFocus = false;
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").submit( function () {
	if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val() && $("#login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val()) {
		return true;
	} else {
		$("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").focus();
		return false;
	}
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!isset($_smarty_tpl->tpl_vars['tpl_module_title']->value)){?><?php $_smarty_tpl->tpl_vars['tpl_module_title'] = new Smarty_variable("Log in", null, 0);?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value)){?><?php $_smarty_tpl->tpl_vars['module_params'] = new Smarty_variable(' ', null, 0);?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['nobox']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('module_params', null, 0);
$_smarty_tpl->tpl_vars['module_params']->value['nobox'] = $_smarty_tpl->tpl_vars['nobox']->value;?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['style']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('module_params', null, 0);
$_smarty_tpl->tpl_vars['module_params']->value['style'] = $_smarty_tpl->tpl_vars['style']->value;?><?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['mode']->value=="header"){?><div class="siteloginbar<?php if ($_smarty_tpl->tpl_vars['user']->value){?> logged-in<?php }?>"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
		<?php if (empty($_smarty_tpl->tpl_vars['mode']->value)||$_smarty_tpl->tpl_vars['mode']->value=="module"){?>
			<div>Logged in as: <span style="white-space: nowrap"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span></div>
			<div style="text-align: center;">
				<?php echo smarty_function_button(array('href'=>"tiki-logout.php",'_text'=>"Log out"),$_smarty_tpl);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
				<form action="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['https_login']=='encouraged'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='required'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='force_nocheck'){?><?php echo $_smarty_tpl->tpl_vars['base_url_https']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['login_url'];?>
" method="post"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete']=='y'){?> autocomplete="off"<?php }?>>
					<fieldset>
						<legend>Switch User</legend>
						<label for="login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Username:</label>
						<input type="hidden" name="su" value="1" />
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y'){?>
							<?php echo smarty_function_help(array('url'=>"Switch+User",'desc'=>"Switch User:Enter user name and click 'Switch'.<br />Useful for testing permissions."),$_smarty_tpl);?>

						<?php }?>
						<input type="text" name="username" id="login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" size="<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['input_size'])){?>15<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['module_params']->value['input_size'];?>
<?php }?>" />
						<div style="text-align: center"><button type="submit" name="actsu">Switch</button></div>
						<?php echo smarty_function_autocomplete(array('element'=>("#login-switchuser_").($_smarty_tpl->tpl_vars['module_logo_instance']->value),'type'=>"username"),$_smarty_tpl);?>

					</fieldset>
				</form>
			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="header"){?>
			<span style="white-space: nowrap"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span> <a href="tiki-logout.php" title="Log out">Log out</a>
		<?php }elseif($_smarty_tpl->tpl_vars['mode']->value=="popup"){?>
			<div class="siteloginbar_popup">
				<ul class="clearfix cssmenu_horiz">
					<li id="logout_link_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
"><div class="tabmark"><a href="tiki-logout.php" class="login_link">Log out<span class="sf-sub-indicator"> »</span></a></div>
						<ul class="siteloginbar_poppedup">
							<li class="tabcontent">
								<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
 <a href="tiki-logout.php" title="Log out">Log out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'&&count($_smarty_tpl->tpl_vars['openid_userlist']->value)>1){?>
		<form method="get" action="tiki-login_openid.php">
			<fieldset>
				<legend>Switch user</legend>
				<select name="select">
				<?php  $_smarty_tpl->tpl_vars['username'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['username']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['openid_userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['username']->key => $_smarty_tpl->tpl_vars['username']->value){
$_smarty_tpl->tpl_vars['username']->_loop = true;
?>
					<option<?php if ($_smarty_tpl->tpl_vars['username']->value==$_smarty_tpl->tpl_vars['user']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</option>
				<?php } ?>
				</select>
				<input type="hidden" name="action" value="select"/>
				<input type="submit" value="Go"/>
			</fieldset>
		</form>
		<?php }?>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='cas'&&$_smarty_tpl->tpl_vars['showloginboxes']->value!='y'){?>
		<b><a class="linkmodule" href="tiki-login.php?cas=y">Log in through CAS</a></b>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y'){?>
			<br /><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
		<?php }?>
	<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='shib'&&$_smarty_tpl->tpl_vars['showloginboxes']->value!='y'){?>
		<b><a class="linkmodule" href="tiki-login.php">Log in through Shibboleth</a></b>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['shib_skip_admin']=='y'){?>
			<br /><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
		<?php }?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['close_tags'] = new Smarty_variable('', null, 0);?>
		<form name="loginbox" id="loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" action="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['https_login']=='encouraged'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='required'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='force_nocheck'){?><?php echo $_smarty_tpl->tpl_vars['base_url_https']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['login_url'];?>
"
				method="post" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_challenge']=='y'){?>onsubmit="doChallengeResponse()"<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete']=='y'){?> autocomplete="off"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_challenge']=='y'){?>
			<script type='text/javascript' src="lib/md5.js"></script>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function doChallengeResponse() {
	hashstr = document.loginbox.user.value +
				document.loginbox.pass.value +
				document.loginbox.email.value;
	str = document.loginbox.user.value + 
			MD5(hashstr) + document.loginbox.challenge.value;
	document.loginbox.response.value = MD5(str);
	document.loginbox.pass.value='';
	document.loginbox.submit();
	return false;
}
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<input type="hidden" name="challenge" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['challenge']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<input type="hidden" name="response" value="" />
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['urllogin']->value)){?><input type="hidden" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urllogin']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="popup"){?>
			<div class="siteloginbar_popup">
				<ul class="clearfix cssmenu_horiz">
					<li id="logout_link_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
"><div class="tabmark"><a href="tiki-login.php" class="login_link">Log in<span class="sf-sub-indicator"> »</span></a></div>
						<ul class="siteloginbar_poppedup">
							<li class="tabcontent">
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></li></ul></li></ul></div><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['module_params']->value['nobox']!='y'){?>
			<fieldset>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></fieldset><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['error_login']->value==-5){?>Invalid username
				<?php }elseif($_smarty_tpl->tpl_vars['error_login']->value==-3){?>Invalid password
				<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_login']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<div>
			<?php if (!isset($_smarty_tpl->tpl_vars['module_logo_instance']->value)){?><?php $_smarty_tpl->tpl_vars['module_logo_instance'] = new Smarty_variable(' ', null, 0);?><?php }?>
			<label for="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'){?>Email:<?php }else{ ?>Username:<?php }?></label>
			<?php if (!isset($_smarty_tpl->tpl_vars['loginuser']->value)||$_smarty_tpl->tpl_vars['loginuser']->value==''){?>
				<input type="text" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" size="<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['input_size'])){?>15<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['module_params']->value['input_size'];?>
<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)){?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_user']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }elseif(!empty($_smarty_tpl->tpl_vars['adminuser']->value)){?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['adminuser']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>/>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
if ($('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
:visible').length) {if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").offset().top < $(window).height()) {$('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
')[0].focus();} }<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<input type="hidden" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loginuser']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loginuser']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_challenge']=='y'){?> <!-- quick hack to make challenge/response work until 1.8 tiki auth overhaul -->
			<div>
				<label for="login-email_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">eMail:</label>
				<input type="text" name="email" id="login-email_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" size="<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['input_size'])){?>15<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['module_params']->value['input_size'];?>
<?php }?>" />
			</div>
		<?php }?>
		<div>
			<label for="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Password:</label>
			<input onkeypress="capLock(event, this)" type="password" name="pass" id="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" size="<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['input_size'])){?>15<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['module_params']->value['input_size'];?>
<?php }?>" />
			<div class="divCapson" style="display:none;">
				<?php echo smarty_function_icon(array('_id'=>'error','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock is on.
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme']!='disabled'&&(empty($_smarty_tpl->tpl_vars['module_params']->value['remember'])||$_smarty_tpl->tpl_vars['module_params']->value['remember']!='n')){?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme']=='always'){?>
				<input type="hidden" name="rme" id="login-remember-module-input_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
			<?php }else{ ?>
				<div style="text-align: center" class="rme">
					<label for="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Remember me
					(for
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==300){?>
						5 minutes)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==900){?>
						15 minutes)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==1800){?>
						30 minutes)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==3600){?>
						1 hour)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==7200){?>
						2 hours)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==36000){?>
						10 hours)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==72000){?>
						20 hours)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==86400){?>
						1 day)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==604800){?>
						1 week)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==2629743){?>
						1 month)
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==31556926){?>
						1 year)
					<?php }?>
					</label>
					<input type="checkbox" name="rme" id="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></div><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>
		<?php }?>
		<div style="text-align: center">
			<input class="button submit" type="submit" name="login" value="Log in" />
		</div>
		<?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'||$_smarty_tpl->tpl_vars['module_params']->value['show_register']=='y'){?>
			<div <?php if ($_smarty_tpl->tpl_vars['mode']->value=='header'){?>style="text-align: right; display:inline"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['forgotPass']=='y'){?><div class="pass"><a  href="tiki-remind_password.php" title="Click here if you've forgotten your password">I forgot my password</a></div><?php }?><?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_register']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['allowRegister']=='y'){?><?php if ($_smarty_tpl->tpl_vars['mode']->value=='header'&&$_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['forgotPass']=='y'){?>&nbsp;|&nbsp;<?php }?><div class="register"><a  href="tiki-register.php" title="Click here to register">Register</a></div><?php }?>
			</div>
		<?php }else{ ?>
			&nbsp;
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_switch_ssl_mode']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['https_login']=='allowed'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='encouraged')){?>
			<div>
				<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['base_url_http']->value;?>
<?php echo $_smarty_tpl->tpl_vars['prefs']->value['login_url'];?>
" title="Click here to login using the default security protocol">Standard</a>
				<a class="linkmodule" href="<?php echo $_smarty_tpl->tpl_vars['base_url_https']->value;?>
<?php echo $_smarty_tpl->tpl_vars['prefs']->value['login_url'];?>
" title="Click here to login using a secure protocol">Secure</a>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode']=='y'&&$_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value=='y'){?>
			<div>
				<label for="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Stay in SSL mode:</label>?
				<input type="checkbox" name="stay_in_ssl_mode" id="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value=='y'){?>checked="checked"<?php }?> />
			</div>
		<?php }?>
		
		<input type="hidden" name="stay_in_ssl_mode_present" value="y" />
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode']!='y'||$_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value!='y'){?>
			<input type="hidden" name="stay_in_ssl_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['use_intertiki_auth']->value)&&$_smarty_tpl->tpl_vars['use_intertiki_auth']->value=='y'){?>
			<select name='intertiki'>
				<option value="">local account</option>
				<option value="">-----------</option>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['intertiki']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
				<?php } ?>
			</select>
		<?php }?>
		
		<?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>

	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'&&!$_smarty_tpl->tpl_vars['user']->value&&(!isset($_smarty_tpl->tpl_vars['registration']->value)||$_smarty_tpl->tpl_vars['registration']->value!='y')){?>
	<form method="get" action="tiki-login_openid.php">
		<fieldset>
			<legend>OpenID Log in</legend>
			<input class="openid_url" type="text" name="openid_url"/>
			<input type="submit" value="Go"/>
			<a class="linkmodule tikihelp" target="_blank" href="http://doc.tiki.org/OpenID">What is OpenID?</a>
		</fieldset>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_login']=='y'){?>
	<div style="text-align: center"><a href="tiki-socialnetworks.php?request_facebook=true"><img src="http://developers.facebook.com/images/devsite/login-button.png" /></a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=="header"){?></div><?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>