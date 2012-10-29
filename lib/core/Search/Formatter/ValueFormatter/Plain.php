<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Plain.php 40353 2012-03-24 16:17:19Z jonnybradley $

class Search_Formatter_ValueFormatter_Plain extends Search_Formatter_ValueFormatter_Abstract
{
	private $separator = false;

	function __construct($arguments)
	{
		if (isset($arguments['separator'])) {
			$this->separator = $arguments['separator'];
		}
	}

	function render($name, $value, array $entry)
	{
		if (is_array($value) && $this->separator !== false) {
			return implode($this->separator, $value);
		} else {
			return $value;
		}
	}
}

