<?php
// (c) Copyright 2002-2012 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: timer.class.php 39469 2012-01-12 21:13:48Z changi67 $

class timer
{
	function parseMicro($micro)
	{
		list($micro, $sec) = explode(' ', microtime());

		return $sec + $micro;
	}

	function start($timer = 'default', $restart = FALSE)
	{
		//if (isset($this->timer[$timer]) && !$restart) {
			// report error - timer already exists
		//}
		$this->timer[$timer] = $this->parseMicro(microtime());
	}

	function stop($timer = 'default')
	{
		$result = $this->elapsed($timer);
		unset ($this->timer[$timer]);
		return $result;
	}

	function elapsed($timer = 'default')
	{
		return $this->parseMicro(microtime()) - $this->timer[$timer];
	}
}
