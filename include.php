<?php 
	
	function TestBlockHTML($replStr){
  	$template = '
		<span class="badge"><h1>$str</h1></span><hr>
   ';
 	return strtr($template, array( '$str' => $replStr));
	}

	
 ?>