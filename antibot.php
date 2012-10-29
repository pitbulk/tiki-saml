<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: antibot.php 39467 2012-01-12 19:47:28Z changi67 $

require_once ('tiki-setup.php');
if (!$prefs['feature_antibot'] == 'y') {
	die;
}

require_once('lib/captcha/captchalib.php');

$captchalib->generate();
$captcha = array('captchaId' => $captchalib->getId(), 'captchaImgPath' => $captchalib->getPath());

echo json_encode($captcha);
