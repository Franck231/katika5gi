<?php // phpinfo();

/** Include PHPExcel */
require_once  'PHPExcel.php';
// Create new PHPExcel object

function getClientByIdTransactionAndDate($tmpfkundename,$tmpfVorname,$tmpfnametf)
{



 $test = false;
 $error = "";
 $tmpfname = $tmpfnametf;
 $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
 $excelObj = $excelReader->load($tmpfname);
 $worksheet = $excelObj->getSheet(0);
 $lastRow = $worksheet->getHighestRow();
 
     $a = "";
	 
	 $b = "no";
	 $c = "";
 
	 $a = $a . "<h2>Infos: </h2>";
	 
	 $a = $a . "<table>";
	 
	 	    $a = $a . "<tr>
				<th>Clientid</th>
				<th>Prenom</th>
				<th>Nom du client </th>
				<th>Numero de transactions</th>
				<th>Montant</th>
				<th>Datum</th>
			    </tr>";

			for ($row = 1; $row <= $lastRow; $row++) {	
				
				if (strcmp($worksheet->getCell('C'.$row)->getValue(), $tmpfkundename) == 0) {
					
					if (strcmp($worksheet->getCell('B'.$row)->getValue(), $tmpfVorname) == 0) {
						

						 $a = $a . "<tr><td>";
						 $a = $a . $worksheet->getCell('A'.$row)->getValue();
						 $a = $a . "</td>";
						 $a = $a . "<td>";
						 $a = $a . $worksheet->getCell('B'.$row)->getValue();
						 $a = $a . "</td>";
						 $a = $a . "<td>";
						 $a = $a . $worksheet->getCell('C'.$row)->getValue();
						 $a = $a . "</td>";
						 $a = $a . "<td>";
						 $a = $a . $worksheet->getCell('D'.$row)->getValue();
						 $a = $a . "</td>";
						 $a = $a . "<td>";
						 $a = $a . $worksheet->getCell('E'.$row)->getValue();
						 $a = $a . "</td>";
						 $a = $a . "<td>";
						 $a = $a . $worksheet->getCell('F'.$row)->getFormattedValue();
						 $a = $a . "</td><tr>";
						 
						 $b = "yes";

					}
					
    
				}
			
				
			

			}
		
		$a = $a . "</table>"; 
		$a = $a . "<button id=\"btnPru\"  onclick=\"showlikeReset()\"> Neue Prüfung </button>";
		
		
		if (strcmp($b, "no") == 0){
			
			 $c = $c . "Keine Transaction mit diesen Vornamen und Namen vorhanden";
			 $c = $c . "<br>";
			 $c = $c . "<button id=\"btnPru\"  onclick=\"showlikeReset()\"> Neue Prüfung </button>";
			 
			 echo $c;
			 
		} else {
			echo $a;
		}
		
		unlink($tmpfname);
	 
}

		$tmpfname = "merdatiel.xlsx";
	    file_put_contents($tmpfname,  
          file_get_contents('Tableauventes.xlsx')
		  // file_get_contents_curl('www.hotmail.com')
        );	
		
		$tmpfkundename = $_GET['q'];
		$tmpfVorname = $_GET['r'];

		getClientByIdTransactionAndDate($tmpfkundename,$tmpfVorname,$tmpfname);

?>



