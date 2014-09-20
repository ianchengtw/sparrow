<?php
class Sparrow {

	private $_data = "";
	
	function __construct(){
		$this->route();
	}
	function route(){
		$ac = isset($_REQUEST['_a'])?trim($_REQUEST['_a']):'index';
		
		if (method_exists($this, $ac)) {
			$this->$ac();
		}
	}
// -------------------- Model --------------------
// -------------------- View --------------------
	function page_default(){
		$this->header();
?>
		<!--	Add content in here	-->
<?php
		$this->footer();
	}
	function header(){
		echo '	<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>';
	}
	function footer(){
		echo '</body></html>';
	}
// -------------------- Controller --------------------
	function index(){
	
		$this->page_default();
		
	}
}

$s = new Sparrow();
