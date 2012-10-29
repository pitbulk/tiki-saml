<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: HtmlPurifier.php 40112 2012-03-10 17:32:24Z pkdille $

class TikiFilter_HtmlPurifier implements Zend_Filter_Interface
{
	private $cache;

	function __construct( $cacheFolder )
	{
		$this->cache = $cacheFolder;
	}

	function filter( $data )
	{
		require_once('lib/htmlpurifier_tiki/HTMLPurifier.tiki.php');

		return HTMLPurifier($data);
	}
}
