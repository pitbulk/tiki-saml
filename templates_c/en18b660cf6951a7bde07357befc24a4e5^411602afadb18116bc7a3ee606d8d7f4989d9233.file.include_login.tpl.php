<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:38:49
         compiled from "/var/www/tiki/templates/admin/include_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1494824676508e4ea9616686-25382352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411602afadb18116bc7a3ee606d8d7f4989d9233' => 
    array (
      0 => '/var/www/tiki/templates/admin/include_login.tpl',
      1 => 1348016084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1494824676508e4ea9616686-25382352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedback' => 0,
    'gd_lib_found' => 0,
    'listgroups' => 0,
    'gr' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4ea9e41878_85889075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4ea9e41878_85889075')) {function content_508e4ea9e41878_85889075($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
		
	$("#genPass span").click(function () {
		var passcodeId = $("input[name=registerPasscode]").attr('id');
		genPass(passcodeId);
		return false
	});

	$("input[name=useRegisterPasscode]").change(function () {
		if (!$(this).is(':checked')){
			document.LogForm.registerPasscode.value='';
		}
		return false
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_text'=>"Admin Groups"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_text'=>"Admin Users"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'_text'=>"Manage permissions"),$_smarty_tpl);?>
	
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['feedback']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Feedback",'type'=>'note')); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Feedback",'type'=>'note'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->tpl_vars['feedback']->value;?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Feedback",'type'=>'note'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form action="tiki-admin.php?page=login" class="admin" method="post" name="LogForm">
	<input type="hidden" name="loginprefs" />
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_login")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'auth_method'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_intertiki'),$_smarty_tpl);?>

			
			<fieldset>
				<legend>Registration &amp; Log in</legend>
				<?php echo smarty_function_preference(array('name'=>'allowRegister'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="allowRegister_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'validateUsers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateEmail'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateRegistration'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="validateRegistration_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'validator_emails','size'=>"80"),$_smarty_tpl);?>

					</div>

					<?php echo smarty_function_preference(array('name'=>'useRegisterPasscode'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="useRegisterPasscode_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'registerPasscode'),$_smarty_tpl);?>

						<span id="genPass">
								<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>'','_text'=>"Generate a passcode"),$_smarty_tpl);?>

						</span>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['gd_lib_found']->value!='y'){?>
						<div class="highlight">
							<?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 Requires PHP GD library.
						</div>
					<?php }?>
					<?php echo smarty_function_preference(array('name'=>'generate_password'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'http_referer_registration_check'),$_smarty_tpl);?>

					<div class="adminoptionbox">
						<div class="adminoptionlabel">
							<label for="registration_choices">Users can select a group to join at registration:</label>
							<br />
							<em>By default, new users automatically join the Registered group.</em>
						</div>
						<div class="adminoptionlabel">
							<select id="registration_choices" name="registration_choices[]" multiple="multiple" size="5" style="width:95%;">
								<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value){
$_smarty_tpl->tpl_vars['gr']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->value = $_smarty_tpl->tpl_vars['gr']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupName']!='Anonymous'){?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gr']->value['groupName'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice']=='y'){?> selected="selected"<?php }?>><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value['groupName'],"52"), ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php }?>
								<?php } ?>
							</select>
						</div>
						<?php echo smarty_function_preference(array('name'=>'user_must_choose_group'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'userTracker'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="userTracker_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="user_register_prettytracker_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_tpl'),$_smarty_tpl);?>

					</div>
				<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_output'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="user_register_prettytracker_output_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_outputwiki'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_register_prettytracker_outputtowiki'),$_smarty_tpl);?>

					</div>
				<?php echo smarty_function_preference(array('name'=>'user_trackersync_trackers'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_trackersync_realname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_trackersync_geo'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_trackersync_groups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_trackersync_parentgroup'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_trackersync_lang'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'groupTracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'email_due'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unsuccessful_logins'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unsuccessful_logins_invalid'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'eponymousGroups'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'syncGroupsWithDirectory'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'syncUsersWithDirectory'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'desactive_login_autocomplete'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_challenge'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'session_protected'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'https_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_http_basic'),$_smarty_tpl);?>


				<div class="adminoptionboxchild https_login_childcontainer allowed encouraged force_nocheck required">
					<?php echo smarty_function_preference(array('name'=>'feature_show_stay_in_ssl_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_switch_ssl_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'http_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'https_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'https_external_links_for_users'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'rememberme'),$_smarty_tpl);?>

				<div class="adminoptionboxchild rememberme_childcontainer all always">
					<?php echo smarty_function_preference(array('name'=>'remembertime'),$_smarty_tpl);?>

				</div>
	
				<fieldset>
					<legend>Cookie</legend>
					<?php echo smarty_function_preference(array('name'=>'cookie_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cookie_domain'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cookie_path'),$_smarty_tpl);?>

				</fieldset>
				<?php echo smarty_function_preference(array('name'=>'feature_banning'),$_smarty_tpl);?>

			</fieldset>
	
			<fieldset>
				<legend>Username</legend>
				<?php echo smarty_function_preference(array('name'=>'login_is_email','mode'=>'invert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_is_email_obscure'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="login_is_email_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'min_username_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'max_username_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'lowercase_username'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'username_pattern'),$_smarty_tpl);?>

			</fieldset>
	
			<fieldset>
				<legend>Password</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_clear_passwords']=='y'){?> 
					<?php echo smarty_function_preference(array('name'=>'feature_clear_passwords'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id='feature_clear_passwords_childcontainer'>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>'Security risk')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>'Security risk'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Store passwords in plain text is activated. You should never set this unless you know what you are doing.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>'Security risk'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				<?php }?>
	
				<?php echo smarty_function_preference(array('name'=>'forgotPass'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_crypt_passwords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'change_password'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_num'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_case'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_chr_special'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_repetition'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_diff_username'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'min_pass_length'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_due'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_button(array('href'=>"?page=login&amp;refresh_email_group=y",'_text'=>"Assign users to group function of email pattern"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"LDAP")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"LDAP"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<input type="hidden" name="auth_ldap" />
			<fieldset>
				<legend>LDAP <?php echo smarty_function_help(array('url'=>"Login+Authentication+Methods"),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ldap'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div><?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to LDAP for these changes to take effect.</div>
					</div>
				<?php }?>
					
				<?php echo smarty_function_preference(array('name'=>'ldap_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ldap_create_user_ldap'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ldap_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_permit_tiki_users'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Bind settings<?php echo smarty_function_help(array('url'=>"LDAP+Authentication"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_port'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_debug'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_ssl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_starttls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_scope'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_version'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_basedn'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP User</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_userdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_useroc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_nameattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_countryattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_emailattr'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Admin</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_adminuser'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_adminpass'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"LDAP"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"LDAP external groups")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"LDAP external groups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>LDAP external groups</legend>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_external'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Bind settings<?php echo smarty_function_help(array('url'=>"LDAP+Authentication"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_port'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_debug'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_ssl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_starttls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_scope'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_version'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_basedn'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP User</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_userdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_corr_userattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_useroc'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Group</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupdn'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupdescattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupoc'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Group Member - if group membership can be found in group attributes</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_memberattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_memberisdn'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP User Group - if group membership can be found in user attributes</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_usergroupattr'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_groupgroupattr'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>LDAP Admin</legend>
				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_adminuser'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_ldap_group_adminpass'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"LDAP external groups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"PAM")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"PAM"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<input type="hidden" name="auth_pam" />
			<fieldset>
				<legend>PAM <?php echo smarty_function_help(array('url'=>"AuthPAM",'desc'=>"PAM"),$_smarty_tpl);?>
</legend>
	
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='pam'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div>
							<?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to PAM for these changes to take effect.
						</div>
					</div>
				<?php }?>
					
				<?php echo smarty_function_preference(array('name'=>'pam_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pam_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pam_service'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"PAM"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Shibboleth")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Shibboleth"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Shibboleth<?php echo smarty_function_help(array('url'=>"AuthShib",'desc'=>"Shibboleth Authentication "),$_smarty_tpl);?>
</legend>
				<input type="hidden" name="auth_shib" />
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='shib'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div><?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to Shibboleth for these changes to take effect.</div>
					</div>
				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'shib_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shib_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'shib_affiliation'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'shib_usegroup'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="shib_usegroup_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'shib_group'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Shibboleth"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"CAS")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"CAS"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<input type="hidden" name="auth_cas" />
			<fieldset>
				<legend>CAS (Central Authentication Service)<?php echo smarty_function_help(array('url'=>"CAS+Authentication"),$_smarty_tpl);?>
</legend>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div>
							<?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to CAS for these changes to take effect.
						</div>
					</div>
				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'cas_create_user_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_autologin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_show_alternate_login'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_force_logout'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cas_version'),$_smarty_tpl);?>


				<fieldset>
					<legend>CAS Server</legend>
					<?php echo smarty_function_preference(array('name'=>'cas_hostname','label'=>"CAS Server Name"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_port','label'=>"CAS Server Port"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_path','label'=>"CAS Server Path"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_extra_param','label'=>"CAS Extra Parameter"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'cas_authentication_timeout'),$_smarty_tpl);?>

				</fieldset>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"CAS"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"phpBB")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"phpBB"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>phpBB<?php echo smarty_function_help(array('url'=>"phpBB+Authentication",'desc'=>"phpBB User Database Authentication "),$_smarty_tpl);?>
</legend>
				<input type="hidden" name="auth_phpbb" />
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='phpbb'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div><?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to phpBB for these changes to take effect.</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['allowRegister']!='n'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div><?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must turn Users can register off for phpBB Authentication to function properly.</div>
					</div>
				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_create_tiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_skip_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_disable_tikionly'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_version'),$_smarty_tpl);?>


				<div style="padding:0.5em;clear:both" class="simplebox">
					<div><?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 MySql only (for now).</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbhost'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbuser'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbpasswd'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_dbname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_phpbb_table_prefix'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"phpBB"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Web Server")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Web Server"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Web Server<?php echo smarty_function_help(array('url'=>"External+Authentication#Web_Server_HTTP_",'desc'=>"Web Server Authentication "),$_smarty_tpl);?>
</legend>
				<input type="hidden" name="auth_ws" />
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ws'){?>
					<div style="padding:0.5em;clear:both" class="simplebox">
						<div>
							<?php echo smarty_function_icon(array('_id'=>'information'),$_smarty_tpl);?>
 You must change the Authentication Method to Web Server for these changes to take effect.
						</div>
					</div>
				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'auth_ws_create_tiki'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Web Server"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="heading input_submit_container" style="text-align: center">
		<input type="submit" value="Change preferences" />
	</div>
</form>
<?php }} ?>