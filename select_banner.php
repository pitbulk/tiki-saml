<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: select_banner.php 39467 2012-01-12 19:47:28Z changi67 $
  
if (!isset($_REQUEST["zone"])) {
	die;
}

require_once ('tiki-setup.php');

include_once ('lib/banners/bannerlib.php');

if (!isset($bannerlib)) {
	$bannerlib = new BannerLib;
}

// CHECK FEATURE BANNERS HERE
$access->check_feature('feature_banners');

$banner = $bannerlib->select_banner($_REQUEST["zone"]);
print ($banner);
