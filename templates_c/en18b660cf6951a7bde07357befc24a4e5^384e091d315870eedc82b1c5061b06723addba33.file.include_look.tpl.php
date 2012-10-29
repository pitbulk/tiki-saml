<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:26:25
         compiled from "/var/www/tiki/templates/admin/include_look.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1073154658508e4bc11c1dc9-70471378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384e091d315870eedc82b1c5061b06723addba33' => 
    array (
      0 => '/var/www/tiki/templates/admin/include_look.tpl',
      1 => 1341675333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1073154658508e4bc11c1dc9-70471378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thumbfile' => 0,
    'prefs' => 0,
    'user_prefs' => 0,
    'a_style' => 0,
    'tg_edit_theme_name' => 0,
    'headerlib' => 0,
    'tiki_p_create_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bc184da49_82848068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bc184da49_82848068')) {function content_508e4bc184da49_82848068($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>
<form action="tiki-admin.php?page=look" id="look" name="look" class="labelColumns" onreset="return(confirm("Cancel Edit"))" class="admin" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="looksetup" value="Apply" />
		<input type="reset" name="looksetupreset" value="Reset" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_look")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_look"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Theme")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Theme"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<div style="position:relative;">
				<div style="position:absolute;right:.5em;top:0.5em;">
					<img src="<?php echo $_smarty_tpl->tpl_vars['thumbfile']->value;?>
" alt="Theme Screenshot" id="style_thumb" width="160" height="120" />
				</div>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'style'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'style_option'),$_smarty_tpl);?>


					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery']=='n'){?>
						<input type="submit" name="changestyle" value="Go" />
					<?php }?>
				</div>
			</div>
			<div class="adminoptionbox">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y'){?>
					<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme']=='y'&&($_smarty_tpl->tpl_vars['user_prefs']->value['theme']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['site_style']!=$_smarty_tpl->tpl_vars['user_prefs']->value['theme'])||($_smarty_tpl->tpl_vars['prefs']->value['style']!=''&&$_smarty_tpl->tpl_vars['prefs']->value['site_style']!=$_smarty_tpl->tpl_vars['prefs']->value['style'])){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Admin")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Admin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The "users can change theme" feature will override the theme displayed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Admin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_style']!=$_smarty_tpl->tpl_vars['a_style']->value){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme not saved yet - click "Apply"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>	
			</div>


			<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="change_theme_childcontainer">
				Restrict available themes
				<?php echo smarty_function_preference(array('name'=>'available_styles'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'feature_fixed_width'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_fixed_width_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_fixed_width'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'useGroupTheme'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_theme_control'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control']=='y'){?>
				<div class="adminoptionboxchild">
					<?php echo smarty_function_button(array('_text'=>"Theme Control",'href'=>"tiki-theme_control.php"),$_smarty_tpl);?>

				</div>
			<?php }?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Theme"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Layout")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Layout"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				&quot;Modules&quot; are the items of content at the top &amp; bottom and in the right &amp; left columns of the site. Select
				<a class="rbox-link" href="tiki-admin_modules.php">Admin &gt; Modules</a> from the menu to create and edit modules.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		

			<?php echo smarty_function_preference(array('name'=>'feature_sitelogo'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_sitelogo_childcontainer">
				<fieldset>
					<legend>Logo</legend>
					<?php echo smarty_function_preference(array('name'=>'sitelogo_src'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_bgcolor'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_title'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_alt'),$_smarty_tpl);?>

				</fieldset>
					
				<fieldset>
					<legend>Title</legend>
					<?php echo smarty_function_preference(array('name'=>'sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitesubtitle'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<div class="adminoptionbox">
				<fieldset>
					<legend>Module zone visibility</legend>			
					<?php echo smarty_function_preference(array('name'=>'module_zones_top'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_topbar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_pagetop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_left_column'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_right_column'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_pagebottom'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zones_bottom'),$_smarty_tpl);?>
			
				</fieldset>
			</div>
			
			<div class="adminoptionbox">
				<fieldset>
					<legend>Site Report Bar</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_site_report'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_report_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_send_link'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Layout"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Shadow layer")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Shadow layer"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'feature_layoutshadows'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_layoutshadows_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'main_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'main_shadow_end'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'header_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'header_shadow_end'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'middle_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'middle_shadow_end'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'center_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'center_shadow_end'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'footer_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'footer_shadow_end'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'box_shadow_start'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'box_shadow_end'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Shadow layer"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Pagination")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Pagination"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'user_selector_threshold'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'maxRecords'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'nextprev_pagination'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'direct_pagination'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="direct_pagination_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_middle_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_ending_links'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'pagination_firstlast'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_fastmove_links'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_hide_if_one_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_icons'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Pagination"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"UI Effects")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"UI Effects"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="adminoptionbox">
				<fieldset class="admin">
					<legend>Standard UI effects</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>
			
			<div class="adminoptionbox">			
				<fieldset class="admin">
					<legend>Tab UI effects</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<fieldset>
				<legend>Other</legend>
				<div class="admin featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_shadowbox'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_jscalendar'),$_smarty_tpl);?>

				</div>
			</fieldset>		
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"UI Effects"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Customization")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Customization"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>Theme Generator <em>(Experimental)</em></legend>
				<?php echo smarty_function_preference(array('name'=>"themegenerator_feature"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="themegenerator_feature_childcontainer">
					<div class="adminoptionbox">			
						<?php echo smarty_function_preference(array('name'=>"themegenerator_theme"),$_smarty_tpl);?>

						<div  class="adminoptionboxchild" id="themegenerator_feature_childcontainer">
							
							<input type="text" name="tg_edit_theme_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tg_edit_theme_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_theme'])){?> style="display:none;"<?php }?> />
							<input type="submit" name="tg_new_theme" value="New"<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_theme'])){?> style="display:none;"<?php }?> />
							<input type="submit" name="tg_delete_theme" value="Delete"<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_theme'])){?> style="display:none;"<?php }?> />
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("select[name=themegenerator_theme]").change(function(){
	if ($(this)[0].selectedIndex === 0) {
		$("input[name=tg_edit_theme_name]").keyup(function(e){
			if (e.keyCode === 13 && $(this).val()) {
				$("input[name=tg_new_theme]").click();
			}
		}).show();
		$("input[name=tg_new_theme]").show();
		$("input[name=tg_delete_theme]").hide();
	}
							}).change();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=="y"&&!empty($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_theme'])){?>
								
								<?php echo smarty_function_button(array('_text'=>"Open editor",'_class'=>"tgFloatDialog",'href'=>"#"),$_smarty_tpl);?>

							<?php }?>
						</div>
					</div>
					<div class="adminoptionbox">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']!="y"||$_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']!="y"){?>
							<div id="themegenerator_container">
								<?php echo $_smarty_tpl->getSubTemplate ("themegen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								<div class="input_submit_container clear" style="text-align: center">
									<input type="submit" name="tg_preview" value="Preview Theme">
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['themegenerator_feature']=='y'){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
initThemeGenDialog();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php }?>
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Custom Codes</legend>
				<?php echo smarty_function_preference(array('name'=>"header_custom_css",'syntax'=>"css"),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_onclick'=>"toggle_brosho();return false;",'_ajax'=>"n")); $_block_repeat=true; echo smarty_block_self_link(array('_onclick'=>"toggle_brosho();return false;",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_function_icon(array('_id'=>"bricks"),$_smarty_tpl);?>
Experimental: CSS assistant (work in progress - click the x to remove)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_onclick'=>"toggle_brosho();return false;",'_ajax'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
				<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/jquery/brosho/jquery.brosho.js');?>

				<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/jquery_tiki/brosho/tiki_brosho.js');?>


				<?php echo smarty_function_preference(array('name'=>'feature_custom_html_head_content','syntax'=>"html"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_endbody_code','syntax'=>"tiki"),$_smarty_tpl);?>

				
				<?php echo smarty_function_preference(array('name'=>"header_custom_js",'syntax'=>"javascript"),$_smarty_tpl);?>

				
				<?php echo smarty_function_preference(array('name'=>"layout_add_body_group_class"),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Editing</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_editcss'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss']=='y'){?>
					<div class="adminoptionboxchild">
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_css']->value=='y'){?>
							<?php echo smarty_function_button(array('_text'=>"Edit CSS",'href'=>"tiki-edit_css.php"),$_smarty_tpl);?>

						<?php }?>
					</div>
				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'feature_view_tpl'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl']=='y'){?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"View Templates"),$_smarty_tpl);?>

					</div>
				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'feature_edit_templates'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates']=='y'){?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"Edit Templates"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Customization"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Miscellaneous")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Miscellaneous"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'feature_tabs'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_tabs_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_tabs_optional'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'layout_section'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['layout_section']=='y'){?>
				<?php echo smarty_function_button(array('_text'=>"Admin layout per section",'href'=>"tiki-admin_layout.php"),$_smarty_tpl);?>

			<?php }?>

			<?php echo smarty_function_preference(array('name'=>'feature_iepngfix'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_iepngfix_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'iepngfix_selectors'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'iepngfix_elements'),$_smarty_tpl);?>

			</div>

			<div class="adminoptionbox">
				<fieldset>
					<legend>Favicon</legend>
					<?php echo smarty_function_preference(array('name'=>'site_favicon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'site_favicon_type'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<div class="adminoptionbox">
				<fieldset class="admin">
					<legend>Context Menus (<em>Currently used in File Galleries only.</em>)</legend>
					<?php echo smarty_function_preference(array('name'=>'use_context_menu_icon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'use_context_menu_text'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<fieldset>
				<legend>Separators</legend>
				<?php echo smarty_function_preference(array('name'=>'site_crumb_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<em>Examples: &nbsp; &raquo; &nbsp; / &nbsp; &gt; &nbsp; : &nbsp; -> &nbsp; &#8594;</em>
				</div>

				<?php echo smarty_function_preference(array('name'=>'site_nav_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<em>Examples: &nbsp; | &nbsp; / &nbsp; &brvbar; &nbsp; :</em>
				</div>
			</fieldset>

			<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'feature_html_head_base_tag'),$_smarty_tpl);?>


		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Miscellaneous"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_look"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="input_submit_container clear" style="text-align: center">
		<input type="submit" name="looksetup" value="Apply" />
	</div>
</form>
<?php }} ?>