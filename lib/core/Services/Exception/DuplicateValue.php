<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: DuplicateValue.php 39469 2012-01-12 21:13:48Z changi67 $

class Services_Exception_DuplicateValue extends Services_Exception
{
	function __construct($field, $value)
	{
		parent::__construct("<!--field[$field]-->" . tr('"%0" already exists', $value), 409);
	}
}

