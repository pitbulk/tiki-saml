<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

function prefs_ssp_list()
{
	return array(
		'ssp_path' => array(
                        'name' => tra('Path of the simplesamlphp folder'),
			'description' => tra('This refers to the path of the simpleSAMLphp environment you want to use.'),
                        'type' => 'text',
                        'size' => 40,
                        'perspective' => false,
                        'default' => '/var/www/simplesamlphp',
                ),
                'ssp_source' => array(
                        'name' => tra('SimpleSAMLphp SP Auth Source'),
			'description' => tra('Select the SP source you want to use. (Sources are adefined in simpleSAMLphp at config/authsources.php).'),
                        'type' => 'text',
                        'size' => 20,
                        'perspective' => false,
                        'default' => 'default',
                ),
                'ssp_usernamemap' => array(
                        'name' => tra('SAML attribute that will be mapped to the Tiki username'),
			'description' => tra('The SAML attribute that will be mapped to the Tiki username. By default, this attribute will be set to "uid"'),
                        'type' => 'text',
                        'size' => 25,
                        'perspective' => false,
                        'default' => 'uid',
                ),
                'ssp_mailmap' => array(
                        'name' => tra('SAML attribute that will be mapped to the Tiki email'),
                        'description' => tra('The SAML attribute that will be mapped to the Tiki email. By default, this attribute will be set to "mail"'),
                        'type' => 'text',
                        'size' => 25,
                        'perspective' => false,
                        'default' => 'mail',
                ),
		'ssp_groupmap' => array(
                        'name' => tra('SAML attribute that will be mapped to the Tiki group'),
			'description' => tra('The SAML attribute that will be mapped to the Tiki email. For example the eduPersonAffiliation'),
                        'type' => 'text',
                        'size' => 25,
                        'perspective' => false,
                        'default' => '',
                ),

		'ssp_group' => array(
			'name' => tra('Default group'),
			'type' => 'text',
			'size' => 40,
			'perspective' => false,
			'default' => 'Registered',
		),
		'ssp_usegroup' => array(
			'name' => tra('Create with default group if groupmap not defined or has an empty/incorrect value'),
			'type' => 'flag',
			'perspective' => false,
			'default' => 'n',
		),
		'ssp_global_logout' => array(
			'name' => tra('Global logout'),
			'description' => tra('When enable, the "logout" function will log out you from Tiki Wiki, identity provider and all conected service providers'),
			'type' => 'flag',
			'perspective' => false,
			'default' => 'n',
		),
		'ssp_skip_admin' => array(
			'name' => tra('Use Tiki authentication for Admin login'),
			'type' => 'flag',
			'perspective' => false,
			'default' => 'n',
		),
		'ssp_create_user_tiki' => array(
			'name' => tra('Create user if not in Tiki'),
			'description' => tra('Auto create user if not exists'),
			'type' => 'flag',
			'perspective' => false,
			'default' => 'n',
		),
	);	
}
