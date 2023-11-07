<?php 
	include_once 'cores.php';
	function get_request($txt)
	{
		$txt=mysqli_real_escape_string(htmlentities(trim($_GET[$txt])));
		return $txt;
	}
 ?>