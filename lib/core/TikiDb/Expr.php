<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Expr.php 39469 2012-01-12 21:13:48Z changi67 $

class TikiDb_Expr
{
	private $string;
	private $arguments;

	function __construct($string, array $arguments)
	{
		$this->string = $string;
		$this->arguments = $arguments;
	}

	function getQueryPart($currentField)
	{
		return str_replace('$$', $currentField, $this->string);
	}

	function getValues()
	{
		return $this->arguments;
	}
}

