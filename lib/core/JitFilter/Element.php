<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Element.php 40234 2012-03-17 19:17:41Z changi67 $

class JitFilter_Element
{
	private $value;

	function __construct( $value )
	{
		$this->value = $value;
	}

	function filter( $filter )
	{
		$filter = TikiFilter::get($filter);

		return $filter->filter($this->value);
	}

	function __call( $name, $arguments )
	{
		return $this->filter($name);
	}
}
