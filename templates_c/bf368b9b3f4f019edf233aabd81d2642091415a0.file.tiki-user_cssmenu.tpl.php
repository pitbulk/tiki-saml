<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:25:38
         compiled from "/var/www/tiki/templates/tiki-user_cssmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1862817178508e4b92099976-33361920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf368b9b3f4f019edf233aabd81d2642091415a0' => 
    array (
      0 => '/var/www/tiki/templates/tiki-user_cssmenu.tpl',
      1 => 1350942773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1862817178508e4b92099976-33361920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_channels' => 0,
    'drilldownmenu' => 0,
    'idCssmenu' => 0,
    'menu_type' => 0,
    'menu_info' => 0,
    'menuId' => 0,
    'menuClass' => 0,
    'chdata' => 0,
    'opensec' => 0,
    'sectionType' => 0,
    'nb_opensec' => 0,
    'prefs' => 0,
    'icon' => 0,
    'translate' => 0,
    'escape_menu_labels' => 0,
    'link_on_section' => 0,
    'sep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4b92715616_35029175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4b92715616_35029175')) {function content_508e4b92715616_35029175($_smarty_tpl) {?><?php if (!is_callable('smarty_block_repeat')) include 'lib/smarty_tiki/block.repeat.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['menu_channels']->value)>0){?>
	<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable('0', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['drilldownmenu']->value!='y'){?><?php $_smarty_tpl->tpl_vars["menuId"] = new Smarty_variable("cssmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value), null, 0);?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['menu_type']->value){?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["menuClass"] = new Smarty_variable("cssmenu".$_tmp1." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["menuId"] = new Smarty_variable("drilldownmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value), null, 0);?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['menu_type']->value){?><?php echo "_";?><?php echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;?><?php }?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["menuClass"] = new Smarty_variable("drilldownmenu".$_tmp2." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']), null, 0);?><?php }?><ul id="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['menuClass']->value;?>
"><?php  $_smarty_tpl->tpl_vars['chdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chdata']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chdata']->key => $_smarty_tpl->tpl_vars['chdata']->value){
$_smarty_tpl->tpl_vars['chdata']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['chdata']->key;
?><?php if ($_smarty_tpl->tpl_vars['chdata']->value['type']!='o'&&$_smarty_tpl->tpl_vars['chdata']->value['type']!='-'){?><?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?><?php if ($_smarty_tpl->tpl_vars['chdata']->value['type']=='s'||$_smarty_tpl->tpl_vars['chdata']->value['type']=='r'){?><?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable(0, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable($_smarty_tpl->tpl_vars['chdata']->value['type'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['opensec']->value>$_smarty_tpl->tpl_vars['sectionType']->value){?><?php $_smarty_tpl->tpl_vars['nb_opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-$_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?><?php $_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value)); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
</ul></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?><?php }?><?php }?><li class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuSection menuSection<?php echo $_smarty_tpl->tpl_vars['opensec']->value;?>
 menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']){?> selected<?php }?><?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']){?> selectedAscendant<?php }?>"><a<?php if (!empty($_smarty_tpl->tpl_vars['chdata']->value['url'])){?> href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&$_smarty_tpl->tpl_vars['chdata']->value['sefurl']){?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['sefurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['sefurl'];?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['url'];?>
<?php }?><?php }?>"<?php }?>><?php if ($_smarty_tpl->tpl_vars['menu_type']->value=='vert'&&$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&$_smarty_tpl->tpl_vars['opensec']->value==0){?><?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['icon']->value)&&$_smarty_tpl->tpl_vars['icon']->value){?><?php echo smarty_function_icon(array('_id'=>'folder','align'=>"left"),$_smarty_tpl);?>
<?php }?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value=='n'){?><?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></span><?php if ($_smarty_tpl->tpl_vars['link_on_section']->value!='n'){?></a><?php }?><?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value+1, null, 0);?><ul><?php }elseif($_smarty_tpl->tpl_vars['chdata']->value['type']=='o'){?><li class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuOption menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']){?> selected<?php }?><?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']){?> selectedAscendant<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&$_smarty_tpl->tpl_vars['chdata']->value['sefurl']){?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['sefurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['sefurl'];?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['url'];?>
<?php }?><?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu_type']->value=='vert'&&$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&$_smarty_tpl->tpl_vars['opensec']->value==0){?><?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>
<?php }?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value=='n'){?><?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></span></a></li><?php if ($_smarty_tpl->tpl_vars['sep']->value=='line'){?><?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?><?php }?><?php }elseif($_smarty_tpl->tpl_vars['chdata']->value['type']=='-'){?><?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?></ul></li><?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-1, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable("line", null, 0);?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['opensec']->value)); $_block_repeat=true; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
</ul></li><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable(0, null, 0);?><?php }?></ul>
<?php }?>
<?php }} ?>