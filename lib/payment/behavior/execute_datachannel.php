<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: execute_datachannel.php 39469 2012-01-12 21:13:48Z changi67 $

function payment_behavior_execute_datachannel( $data, $params, $posts, $executionId )
{
	include 'lib/wiki-plugins/wikiplugin_datachannel.php';
	unset($params['price']);
	$params['quietReturn'] = 'y';
	$_POST['datachannel_execution'] = $executionId;

	foreach ($posts as $key => $post) {
		$_POST[$key] = $post;
	}

	wikiplugin_datachannel($data, $params);
}

