<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Fixed.php 40234 2012-03-17 19:17:41Z changi67 $

class Perms_Check_Fixed implements Perms_Check
{
	private $permissions;
	private $resolver;

	function __construct($permissions) 
	{
		$this->permissions = array_fill_keys($permissions, true);
	}

	function check(Perms_Resolver $resolver, array $context, $name, array $groups) 
	{
		if ($this->resolver && isset($this->permissions[$name])) {
			return $this->resolver->check($name, $groups);
		} else {
			return false;
		}
	}

	function setResolver( $resolver ) 
	{
		$this->resolver = $resolver;
	}

	function applicableGroups( Perms_Resolver $resolver ) 
	{
		return $this->resolver->applicableGroups();
	}
}
