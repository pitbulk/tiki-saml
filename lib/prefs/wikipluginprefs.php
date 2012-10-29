<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: wikipluginprefs.php 39469 2012-01-12 21:13:48Z changi67 $

function prefs_wikipluginprefs_list()
{
	return array(
		'wikipluginprefs_pending_notification' => array(
			'name' => tra('Plugin pending approval notification'),
			'description' => tra('Alert by e-mail users with permission to approve plugin when a plugin is pending approval'),
			'dependencies' => array('sender_email'),
			'type' => 'flag',
			'default' => 'n',
		),
	);
}
