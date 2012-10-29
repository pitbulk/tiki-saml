<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: quantify.php 39469 2012-01-12 21:13:48Z changi67 $

function prefs_quantify_list()
{
	return array(
		'quantify_changes' => array(
			'name' => tra('Quantify change size'),
			'description' => tra('In addition to tracking the changes, track the change size and display the approximate up-to-date-ness of the page.'),
			'type' => 'flag',
			'default' => 'n',
		),
	);
}
