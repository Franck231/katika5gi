<!DOCTYPE HTML>
<html>

<head>
<script>
function showlikeReset() {

		document.getElementById("theName").style.display = "inline";
				document.getElementById("theVorname").style.display = "inline";
				document.getElementById("lbl").style.display = "inline";
				document.getElementById("btnVer").style.display = "inline";
				document.getElementById("lbl2").style.display = "inline";
		document.getElementById("txtHint").innerHTML = "";
}

  function myFunction() {
   // document.getElementById("theTransaction").innerHTML = "Hello World";
  // alert(document.getElementById("theTransaction").value);
  
  var mystring = document.getElementById("theName").value;
  
  if(mystring.length == 0 ){
	  
	  alert('Das Feld für den Namen ist leer');
	  return;
  }
  
    
  var mystring2 = document.getElementById("theVorname").value;
  
  if(mystring2.length == 0 ){
	  
	  alert('Das Feld für den Vornamen ist leer');
	  return;
  }

  
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				document.getElementById("theName").style.display = "none";
				document.getElementById("theVorname").style.display = "none";
				document.getElementById("lbl").style.display = "none";
				document.getElementById("btnVer").style.display = "none";
				document.getElementById("lbl2").style.display = "none";
            }
        };
        xmlhttp.open("GET","callFrancFinalcheckNameVorname.php?q="+mystring+"&r="+mystring2,true);
        xmlhttp.send();
}

window.onload = function () {
		
		document.getElementById("btnToDate").style.display = "none";
		document.getElementById("btnToNTrans").style.display = "none";
		document.getElementById("btnNomPrenom").style.display = "none";
		document.getElementById("btnabml2").style.display = "none";
		document.getElementById("lbsuch").style.display = "none";

    }
	
	function zurueck() {
		document.getElementById("lbsuch").style.display = "inline";
		document.getElementById("btnToDate").style.display = "inline";
		document.getElementById("btnToNTrans").style.display = "inline";
		document.getElementById("btnNomPrenom").style.display = "inline";
		document.getElementById("btnabml2").style.display = "inline";
		
		
		document.getElementById("theName").style.display = "none";
		document.getElementById("theVorname").style.display = "none";
		document.getElementById("lbl").style.display = "none";
		document.getElementById("lbl2n").style.display = "none";
		document.getElementById("btnVer").style.display = "none";
		document.getElementById("btnabml1").style.display = "none";
		document.getElementById("btnabml1").style.display = "none";
		document.getElementById("btnVer2n").style.display = "none";
		
		
    }



</script>

<title> Katika </title>


</head>

<body>
<div id ="Enveloppe">
<section id ="Entete">
<link href ="Stylesheet.css"rel="stylesheet"type="text/css">
<img alt= "logo de l'entreprise" src="katika.png">
<h1>
<label id="lbsuch">Wählen Sie eine Option aus:</label>
</h1>
</section>

  <label id="lbl">Geben Sie bitte den Namen an:</label> <input id = "theName" type="text" ><br>
  <label id="lbl2n">Geben Sie bitte den Vornamen an:</label> <input id = "theVorname" type="text" ><br>
  <button id="btnVer" onclick="myFunction()">Überprüfen</button >
  <button id = "btnabml1" onclick="location.href='index.php';" >Abmelden</button >
  <button id="btnVer2n" onclick="zurueck()"> Zurueck </button >
  
   <button id="btnToDate" onclick="window.location.href='chckWithDate.php'"> Verifier avec la Date</button >
   <button id="btnToNTrans" onclick="window.location.href='check_transactionNummer.php'"> Verifier avec la Transactions</button >
   <button id="btnNomPrenom" onclick="window.location.href='check_name_vorname.php'"> Verifier avec Nom et Prenom</button >
   <button id = "btnabml2" onclick="location.href='index.php';" >Abmelden</button >
 
  <br>
  <div id="txtHint"></div>
   
 <section id="informations">
<h4>
Email<br>
katika@yahoo.com
</h4>
</section>
</div>
</body>

</html>