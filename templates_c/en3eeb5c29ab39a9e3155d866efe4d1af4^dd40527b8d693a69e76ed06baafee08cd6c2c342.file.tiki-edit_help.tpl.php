<?php /* Smarty version Smarty-3.1.10, created on 2012-10-29 09:27:08
         compiled from "/var/www/tiki/templates/tiki-edit_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140922558508e4becb31414-26099141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd40527b8d693a69e76ed06baafee08cd6c2c342' => 
    array (
      0 => '/var/www/tiki/templates/tiki-edit_help.tpl',
      1 => 1345814661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140922558508e4becb31414-26099141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'wysiwyg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508e4bece77ff0_22385844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508e4bece77ff0_22385844')) {function content_508e4bece77ff0_22385844($_smarty_tpl) {?><?php if (!is_callable('smarty_block_add_help')) include 'lib/smarty_tiki/block.add_help.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/tiki/lib/smarty/libs/plugins/function.cycle.php';
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('add_help', array('show'=>'y','title'=>"Wiki Help",'id'=>"wiki_help")); $_block_repeat=true; echo smarty_block_add_help(array('show'=>'y','title'=>"Wiki Help",'id'=>"wiki_help"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<h3>Wiki Syntax</h3>
<div class="help_section">
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y'){?> 
<p>For more information, please see
	<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Wiki+Page+Editor" target="tikihelp" class="tikihelp" title="Wiki Page Editor: More help on editing wiki pages">
		Wiki Page Editor <?php echo smarty_function_icon(array('_id'=>'help','style'=>"vertical-align:middle"),$_smarty_tpl);?>

	</a>
	and
	<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Wiki+Syntax" target="tikihelp" class="tikihelp" title="Wiki Syntax: The syntax system used for creating pages in Tiki">
		Wiki Syntax <?php echo smarty_function_icon(array('_id'=>'help','style'=>"vertical-align:middle"),$_smarty_tpl);?>

	</a>
</p>
<?php }?>
 
<table width="95%" class="formcolor">
 <tr>
	<th>Wiki Syntax</th>
</tr>
<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')){?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td width="20%"><img src='img/icons/text_bold.png' alt='' /> <strong>Bold text</strong> &nbsp;&nbsp;&nbsp; __text__ </td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td width="20%"><img src='img/icons/text_italic.png' alt='' /> <strong>Italic text</strong> &nbsp;&nbsp;&nbsp; 2 single quotes ('). &nbsp;&nbsp;&nbsp; '"text"' </td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_underline.png' alt='' /> <strong>Underlined text</strong> &nbsp;&nbsp;&nbsp; ===text===</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/palette.png' alt='' /> <strong>Colored text</strong> <br/> ~~#FFEE33:text~~ or  ~~yellow:text~~. Will display using the indicated HTML color or color name. Color name can contain two colors separated by a comma. In this case, the first color would be the foreground and the second one the background.</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_strikethrough.png' alt='' /> <strong>Deleted text</strong> &nbsp;&nbsp;&nbsp; 2 dashes "-". &nbsp;&nbsp;&nbsp; --text--</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_heading_1.png' alt='' /><img src='img/icons/text_heading_2.png' alt='' /><img src='img/icons/text_heading_3.png' alt='' /> <strong>Headings</strong> <br/> !heading1, !!heading2, !!!heading3 </td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Show/Hide</strong> <br/> !+, !!- show/hide heading section. + (shown) or - (hidden) by default.</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Autonumbered Headings</strong> <br/> !#, !!#, !+#, !-# ... </td></tr>

<?php }?>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Table of contents</strong> <br/>{toc}, {maketoc} prints out a table of contents for the current page based on structures (toc) or ! headings (maketoc). Common optional parameters for maketoc are: title|maxdepth|levels|nums, and for toc are: order|showdesc|shownum|structId|maxdepth|pagename.</td></tr>

<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')){?>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/page.png' alt='' /> <strong>Horizontal rule</strong> &nbsp;&nbsp;&nbsp; -<em></em>-<em></em>-<em></em>- </td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/box.png' alt='' /> <strong>Text box</strong> &nbsp;&nbsp;&nbsp; ^Box content^</td></tr>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_align_center.png' alt='' /> <strong>Centered text</strong> &nbsp;&nbsp;&nbsp; <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_use_three_colon_centertag']=='y'){?>:::text:::<?php }else{ ?>::text::<?php }?></td></tr>

<?php }?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong><img src='img/icons/database_gear.png' alt='' /> Dynamic variables</strong> <br/> %Name% Inserts an editable variable</td></tr>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/world_link.png' alt='' /> <strong>External links</strong> <br/> use square brackets for an external link: [URL], [URL|link_description],[URL|link_description|relation] or [URL|description|relation|nocache] (that last prevents the local Wiki from caching the linked page; relation can be used to insert rel attribute for the link - useful e.g. for shadowbox).<br />
For an external Wiki, use ExternalWikiName:PageName or ((External Wiki Name: Page Name))</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Square Brackets</strong> <br/> Use [[foo] to show [foo].</td></tr>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/page_link.png' alt='' /> <strong>Wiki References</strong> <br/> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wikiwords']=='y'){?>JoinCapitalizedWords or use <?php }?>((page)) or ((page|description)) for wiki references
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_alink']=='y'){?>
, ((page|#anchor)) or ((page|#anchor|desc)) for wiki heading/anchor references
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wikiwords']=='y'){?>, ))SomeName(( prevents referencing<?php }?>
</td></tr>

<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')){?>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_list_bullets.png' alt='' /> <img src='img/icons/text_list_numbers.png' alt='' /> <strong>Lists</strong> <br/> * for bullet lists, # for numbered lists, ;Word:definition for definiton lists</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Indentation</strong> <br/>+, ++ Creates an indentation for each plus (useful in list to continue at the same level)</td></tr>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_tables']=='new'){?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/table.png' alt='' /> <strong>Tables</strong> <br/> || row1-col1 | row1-col2 | row1-col3<br />row2-col1 | row2-col2 | row2-col3 ||</td></tr>
<?php }else{ ?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/table.png' alt='' /> <strong>Tables</strong> <br/> ||row1-col1|row1-col2|row1-col3||row2-col1|row2-col2|row2-col3||</td></tr>
<?php }?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><img src='img/icons/text_padding_top.png' alt='' /> <strong>Title bar</strong> &nbsp;&nbsp;&nbsp; -=Title=- </td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td width="20%"><strong>Monospace font</strong> &nbsp;&nbsp;&nbsp; -+Code sample+- </td></tr>

<?php }?>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Line break</strong> <br/>%%% (very useful especially in tables)</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Multi-page pages</strong> <br/>Use ...page... to separate pages</td></tr>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Non parsed sections</strong> <br/> ~np~ data ~/np~ Prevents wiki parsing of the enclosed data.</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Preformated sections</strong> <br/> ~pp~ data ~/pp~ Displays preformated text/code; no Wiki processing is done inside these sections (as with np), and the spacing is fixed (no word wrapping is done).  ~pre~ data ~/pre~ also displayes preformatted text with fixed spacing, but wiki processing still occurs on the text.</td></tr>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Comments</strong> <br/> ~tc~ Tiki Comment ~/tc~ makes a Tiki comment.  It will be completely removed from the display, but saved in the file for future reference.  ~hc~ HTML Comment ~/hc~ makes an HTML comment.  It will be inserted as a comment in the output HTML; these are not normally displayed in browsers, but can be seen using "View Source" or similar.</td></tr>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_monosp']=='y'){?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Block Preformatting</strong> <br/> Indent text with any number of spaces to turn it into a monospaced block that still follows other Wiki formatting instructions. It will be indended with the same number of spaces that you used.  Note that this mode does not preserve exact spacing and line breaks; use ~pp~...~/pp~ for that.</td></tr>
<?php }?>
<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Direction</strong> <br/>{r2l}, {l2r}, {rm}, {lm}Insert resp. right-to-left and left-to-right text direction DIV (up to end of text) and markers for langages as arabic or hebrew.</td></tr>

<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
"><td><strong>Special characters</strong> <br/>
~hs~ hard space,
~c~ &copy;,
~amp~ &amp;,
~lt~ &lt;,
~gt~ &gt;,
~ldq~ &ldquo;,
~rdq~ &rdquo;,
~lsq~ &lsquo;,
~rsq~ &rsquo;,
~--~ &mdash;,
~bs~ &#92;,
numeric between ~ for HTML numeric characters entity</td></tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_paragraph_formatting']=='y'){?>
<p>Because the Wiki paragraph formatting feature is on, all groups of non-blank lines are collected into paragraphs.  Lines can be of any length, and will be wrapped together with the next line.  Paragraphs are separated by blank lines.</p>
<?php }else{ ?>
<p>Because the Wiki paragraph formatting feature is off, each line will be presented as you write it.  This means that if you want paragraphs to be wrapped properly, a paragraph should be all together on one line.</p>
<?php }?>
</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_add_help(array('show'=>'y','title'=>"Wiki Help",'id'=>"wiki_help"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>