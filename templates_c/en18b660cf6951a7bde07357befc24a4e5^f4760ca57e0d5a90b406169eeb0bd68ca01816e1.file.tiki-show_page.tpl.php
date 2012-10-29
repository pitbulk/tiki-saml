<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:35
         compiled from "/var/www/tiki/templates/tiki-show_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:415671842508e4b8fa8f6b7-39446592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4760ca57e0d5a90b406169eeb0bd68ca01816e1' => 
    array (
      0 => '/var/www/tiki/templates/tiki-show_page.tpl',
      1 => 1335679272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415671842508e4b8fa8f6b7-39446592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'info' => 0,
    'hide_page_header' => 0,
    'prefs' => 0,
    'crumbs' => 0,
    'machine_translate_to_lang' => 0,
    'print_page' => 0,
    'saved_msg' => 0,
    'user' => 0,
    'category_watched' => 0,
    'watching_categories' => 0,
    'translation_alert' => 0,
    'editable' => 0,
    'tiki_p_edit' => 0,
    'page' => 0,
    'beingEdited' => 0,
    'tiki_p_view_freetags' => 0,
    'freetags' => 0,
    'pages' => 0,
    'page_info' => 0,
    'first_page' => 0,
    'prev_page' => 0,
    'pagenum' => 0,
    'next_page' => 0,
    'last_page' => 0,
    'structure' => 0,
    'tiki_p_assign_perm_wiki_page' => 0,
    'page_id' => 0,
    'parsed' => 0,
    'has_footnote' => 0,
    'footnote' => 0,
    'wiki_authors_style' => 0,
    'base_url' => 0,
    'is_categorized' => 0,
    'display_catobjects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b9058edb7_76007361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b9058edb7_76007361')) {function content_508e4b9058edb7_76007361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_breadcrumbs')) include 'lib/smarty_tiki/function.breadcrumbs.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_rating')) include 'lib/smarty_tiki/function.rating.php';
?>
<?php if (!isset($_smarty_tpl->tpl_vars['pageLang']->value)){?>
	<?php if (isset($_smarty_tpl->tpl_vars['info']->value['lang'])){?>
		<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['lang'], null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['pageLang'] = new Smarty_variable('', null, 0);?>
	<?php }?>
<?php }?>
		
<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloc']=='page'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_breadcrumbs']=='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_siteloclabel']=='y'){?>Location : <?php }?>
		<?php echo smarty_function_breadcrumbs(array('type'=>"trail",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'){?>
			<?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>

		<?php }?>
	<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('tiki-flaggedrev_approval_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }?> 

<?php if (!$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y'){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='top'){?>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['saved_msg']->value)&&$_smarty_tpl->tpl_vars['saved_msg']->value!=''){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['saved_msg']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&$_smarty_tpl->tpl_vars['category_watched']->value=='y'){?>
	<div class="categbar" style="clear: both; text-align: right">
		Watched by categories:
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<a href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categId'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['watching_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>&nbsp;
		<?php endfor; endif; ?>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']=='y'){?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<div class="cbox">
			<div class="cbox-title">
				<?php echo smarty_function_icon(array('_id'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 Content may be out of date
			</div>
			<div class="cbox-data">
				<p>
					An urgent request for translation has been sent. Until this page is updated, you can see a corrected version in the following pages:
				</p>
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'],'wiki','with_next');?>
no_bl=y">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page'], ENT_QUOTES, 'UTF-8', true);?>

							</a>
							(<?php echo $_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['lang'];?>
)
							<?php if ($_smarty_tpl->tpl_vars['editable']->value&&($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'||mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox')&&$_smarty_tpl->tpl_vars['beingEdited']->value!='y'){?> 
								<a href="tiki-editpage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;source_page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['page']);?>
&amp;oldver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['last_update']);?>
&amp;newver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['translation_alert']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['current_version']);?>
&amp;diff_style=htmldiff" title="update from it">
									<?php echo smarty_function_icon(array('_id'=>'arrow_refresh','alt'=>"update from it",'style'=>"vertical-align:middle"),$_smarty_tpl);?>

								</a>
							<?php }?>
						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		</div>
	<?php endfor; endif; ?>
<?php }?>

<article id="top" class="wikitext clearfix<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']!='y'){?> nopagetitle<?php }?>">
	<?php if (!isset($_smarty_tpl->tpl_vars['hide_page_header']->value)||!$_smarty_tpl->tpl_vars['hide_page_header']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0])&&$_smarty_tpl->tpl_vars['prefs']->value['freetags_show_middle']=='y'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='bottom'){?>
			<div class="center navigation_bar pagination position_top">
				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_first','alt'=>"First page"),$_smarty_tpl);?>
</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_previous','alt'=>"Previous page"),$_smarty_tpl);?>
</a>

				<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_next','alt'=>"Next page"),$_smarty_tpl);?>
</a>

				<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_last','alt'=>"Last page"),$_smarty_tpl);?>
</a>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_page_title']=='y'){?>
			<h1 class="pagetitle"><?php echo smarty_function_breadcrumbs(array('type'=>"pagetitle",'loc'=>"page",'crumbs'=>$_smarty_tpl->tpl_vars['crumbs']->value,'machine_translate'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value,'source_lang'=>$_smarty_tpl->tpl_vars['pageLang']->value,'target_lang'=>$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value),$_smarty_tpl);?>
</h1>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']!='bottom')){?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('poll.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_simple_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_assign_perm_wiki_page']->value=='y'){?>
			<form method="post" action="">
				<?php echo smarty_function_rating(array('type'=>"wiki page",'id'=>$_smarty_tpl->tpl_vars['page_id']->value),$_smarty_tpl);?>

			</form>
		<?php }?>
	<?php }?> 

	<?php if ($_smarty_tpl->tpl_vars['machine_translate_to_lang']->value!=''){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			This text was automatically translated by Google Translate from the following page: <a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	
	<div id="page-data">
		<?php if (isset($_smarty_tpl->tpl_vars['pageLang']->value)&&($_smarty_tpl->tpl_vars['pageLang']->value=='ar'||$_smarty_tpl->tpl_vars['pageLang']->value=='he')){?>
			<div style="direction:RTL; unicode-bidi:embed; text-align: right; <?php if ($_smarty_tpl->tpl_vars['pageLang']->value=='ar'){?>font-size: large;<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

			</div>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

		<?php }?>
	</div>
	
	
	<hr class="hrwikibottom" /> 

	<?php if ($_smarty_tpl->tpl_vars['structure']->value=='y'&&(($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='bottom')||($_smarty_tpl->tpl_vars['prefs']->value['wiki_structure_bar_position']=='both'))){?>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-wiki_structure_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['pages']->value>1&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_page_navigation_bar']!='top'){?>
		<br />
		<div class="center navigation_bar pagination position_bottom">
			<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['first_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_first','alt'=>"First page"),$_smarty_tpl);?>
</a>

			<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_previous','alt'=>"Previous page"),$_smarty_tpl);?>
</a>

			<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
page: %0/%1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['pagenum']->value,'_1'=>$_smarty_tpl->tpl_vars['pages']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>

			<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_next','alt'=>"Next page"),$_smarty_tpl);?>
</a>

			<a href="tiki-index.php?<?php if ($_smarty_tpl->tpl_vars['page_info']->value){?>page_ref_id=<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_ref_id'];?>
<?php }else{ ?>page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php }?>&amp;pagenum=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
"><?php echo smarty_function_icon(array('_id'=>'resultset_last','alt'=>"Last page"),$_smarty_tpl);?>
</a>
		</div>
	<?php }?>
</article> 

<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value=='y'){?>
	<div class="wikitext" id="wikifootnote"><?php echo $_smarty_tpl->tpl_vars['footnote']->value;?>
</div>
<?php }?>

<p class="editdate">
	<?php if (isset($_smarty_tpl->tpl_vars['wiki_authors_style']->value)&&$_smarty_tpl->tpl_vars['wiki_authors_style']->value!='none'){?>
		<?php echo $_smarty_tpl->getSubTemplate ('wiki_authors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ('show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['print_page']->value=='y'){?>
		<br />
		<?php $_smarty_tpl->_capture_stack[0][] = array('url', null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
<?php if (!empty($_REQUEST['itemId'])){?>&amp;itemId=<?php echo $_REQUEST['itemId'];?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		The original document is available at <a href="<?php echo Smarty::$_smarty_vars['capture']['url'];?>
"><?php echo Smarty::$_smarty_vars['capture']['url'];?>
</a>
	<?php }?>
</p>

<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categoryobjects']=='y'){?>
	<?php echo $_smarty_tpl->tpl_vars['display_catobjects']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['is_categorized']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['category_morelikethis_algorithm']!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ('category_related_objects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_topline_position']=='both'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-wiki_topline.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['print_page']->value!='y'){?>
	<?php if ((!$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='bottom'||$_smarty_tpl->tpl_vars['prefs']->value['page_bar_position']=='both')&&$_smarty_tpl->tpl_vars['machine_translate_to_lang']->value==''){?>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php }} ?>