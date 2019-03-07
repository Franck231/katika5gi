<?php // phpinfo();


/** Include PHPExcel */
require_once  'PHPExcel.php';
// Create new PHPExcel object

function getClientByIdTransactionAndDate($date, $tmpfnametf)
{
 $test = false;
 $error = "";
 $tmpfname = $tmpfnametf;
 $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
 $excelObj = $excelReader->load($tmpfname);
 $worksheet = $excelObj->getSheet(0);
 $lastRow = $worksheet->getHighestRow();
 
	 echo "<h2>Kunde, die zu diesem Tag gezahlt haben</h2>";
	 
	 echo "<table>";
	 
	 				echo "<tr>
				<th>Clientid</th>
				<th>Prenom</th>
				<th>Nom du client </th>
				<th>Numero de transactions</th>
				<th>Montant</th>
				<th>Datum</th>
			    </tr>";
	 
			for ($row = 1; $row <= $lastRow; $row++) {
				
				$dt = $worksheet->getCell('F'.$row)->getFormattedValue();
				$dtt = date("d-m-Y", strtotime($dt));
				$dateTemp = date("d-m-Y", strtotime($date));
				
				
				if($dtt == $dateTemp){
					 echo "<tr><td>";
					 echo $worksheet->getCell('A'.$row)->getValue();
					 echo "</td>";
					 echo "<td>";
					 echo $worksheet->getCell('B'.$row)->getValue();
					 echo "</td>";
					 echo "<td>";
					 echo $worksheet->getCell('C'.$row)->getValue();
					 echo "</td>";
					 echo "<td>";
					 echo $worksheet->getCell('D'.$row)->getValue();
					 echo "</td>";
					 echo "<td>";
					 echo $worksheet->getCell('E'.$row)->getValue();
					 echo "</td>";
					 echo "<td>";
					 echo $worksheet->getCell('F'.$row)->getFormattedValue();
					 echo "</td><tr>";
				}
			}
		
		echo "</table>"; 
		
		echo "<button id=\"btnPru\"  onclick=\"showlikeReset()\"> Neue Prüfung </button>";
		
		unlink($tmpfname);
	 
}

		$tmpfname = "merdatiel.xlsx";
	    file_put_contents($tmpfname,  
          file_get_contents('Tableauventes.xlsx')
		  // file_get_contents_curl('www.hotmail.com')
        );	
		
		$tmpfdateValue = $_GET['q'];
		
		getClientByIdTransactionAndDate($tmpfdateValue, $tmpfname);

?>



