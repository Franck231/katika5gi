<?php // phpinfo();

/** Include PHPExcel */
require_once  'PHPExcel.php';
// Create new PHPExcel object

function getLoginStatus($userName,$pw)
{
 
     $UserNameOk = "mekou";
	 $PwOk = "tintin@toto";
	 
	 $res = "0";

				
		if (strcmp($UserNameOk, $userName) == 0) {
					
					if (strcmp($PwOk,$pw) == 0) {
						
						$res = "1";

					}
		}
		
		echo $res;
}

		
		$userName = $_GET['q'];
		$pw = $_GET['r'];

		getLoginStatus($userName,$pw);

?>



