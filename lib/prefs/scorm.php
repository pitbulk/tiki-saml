<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: scorm.php 39469 2012-01-12 21:13:48Z changi67 $

function prefs_scorm_list()
{
	return array(
		'scorm_enabled' => array(
			'name' => tra('SCORM Support'),
			'description' => tra('Handle SCORM package files on upload. SCORM is a standard used in Learning Management Systems.'),
			'dependencies' => array(
				'feature_file_galleries',
				'feature_trackers',
			),
			'type' => 'flag',
			'default' => 'n',
		),
		'scorm_tracker' => array(
			'name' => tra('SCORM Tracker'),
			'description' => tra('Tracker ID to use to store the SCORM metadata.'),
			'type' => 'text',
			'filter' => 'int',
			'default' => 0,
			'size' => 5,
		),
	);
}

