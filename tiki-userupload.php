<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-userupload.php 39467 2012-01-12 19:47:28Z changi67 $

$section = 'mytiki';

require_once ('tiki-setup.php');
if ( $prefs['feature_use_fgal_for_user_files'] == 'y' && $user != '' ) {
	$filegallib = TikiLib::lib('filegal');
	$idGallery = $filegallib->get_user_file_gallery();

	// redirect user in correct gallery
	header('location: tiki-upload_file.php?galleryId='.$idGallery);
}
