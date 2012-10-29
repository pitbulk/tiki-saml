{* $Id: mod-categories.tpl 38462 2011-10-23 20:44:18Z chealer $ *}

{tikimodule error=$module_params.error title=$tpl_module_title name="categories" flip=$module_params.flip decorations=$module_params.decorations nobox=$module_params.nobox notitle=$module_params.notitle error=$module_params.error}
	{if isset($tree)}
		{$tree}
	{/if}
{/tikimodule}
