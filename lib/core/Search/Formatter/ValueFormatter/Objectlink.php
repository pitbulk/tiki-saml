<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Objectlink.php 40353 2012-03-24 16:17:19Z jonnybradley $

class Search_Formatter_ValueFormatter_Objectlink extends Search_Formatter_ValueFormatter_Abstract
{
	function render($name, $value, array $entry)
	{
		global $smarty;
		$smarty->loadPlugin('smarty_function_object_link');

		$params = array(
			'type' => $entry['object_type'],
			'id' => $entry['object_id'],
			'title' => $value,
		);

		if (isset($entry['url'])) {
			$params['url'] = $entry['url'];
		}

		return '~np~' . smarty_function_object_link($params, $smarty) . '~/np~';
	}
}

