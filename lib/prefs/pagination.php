<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: pagination.php 39469 2012-01-12 21:13:48Z changi67 $

function prefs_pagination_list()
{
	return array(
		'pagination_firstlast' => array(
			'name' => tra("Display 'First' and 'Last' links"),
			'type' => 'flag',
			'default' => 'y',
		),
		'pagination_fastmove_links' => array(
			'name' => tra('Display fast move links (by 10 percent of the total number of pages) '),
			'type' => 'flag',
			'default' => 'y',
		),
		'pagination_hide_if_one_page' => array(
			'name' => tra('Hide pagination when there is only one page'),
			'type' => 'flag',
			'default' => 'y',
		),
		'pagination_icons' => array(
			'name' => tra('Use Icons'),
			'type' => 'flag',
			'default' => 'y',
		),
	);	
}
