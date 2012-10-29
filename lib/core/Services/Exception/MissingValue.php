<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: MissingValue.php 39469 2012-01-12 21:13:48Z changi67 $

class Services_Exception_MissingValue extends Services_Exception
{
	function __construct($field)
	{
		parent::__construct("<!--field[$field]-->" . tr('Field Required'), 409);
	}
}

