<?php
	
	function getResults()
	{
		return json_decode(file_get_contents('r.json'), true);
	}

	?>