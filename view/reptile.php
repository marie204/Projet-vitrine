
<section id="corpsDocs"><h5>Bienvenue sur notre section reptilienne, bonne lecture!</h5></section>
<div id='testZone'></div>


<?php 
echo '<script> var maSess = ';
if (isset($_SESSION['content'])) {
	echo '"'.$_SESSION['content'].'";';
}else{ echo 'false';}
echo '</script>';
?>


<script>
	//TODO Debugguer soucis du foreach! 
	//TODO Terminer la possibilité pour l'utilisateur de créer des pages. 
	var tableContenu = [];
	var tableTitre = [];
	var userName = [];
	var prodDate = [];
	var lastMod = [];
</script>
		<?php remplirTableau(); ?>
<script>
	fonctionGeneration();
	maSess == false ? null : fonctionCreateButton();
	fonctionRemplir();
	function fonctionGeneration(){
		//console.log('shoot');
		monCompte = tableContenu.length;
		if (monCompte > 0){
			document.getElementById('corpsDocs').innerHTML = 'test';
		}else{
			document.getElementById('corpsDocs').innerHTML = "Rien à afficher ici pour le moment! <br> ";
			if (maSess== false) { document.getElementById('corpsDocs').innerHTML +=" Brandissez votre compte utilisateur pour changer ça!";}else{document.getElementById('corpsDocs').innerHTML += 'Montre l\'exemple et change moi ça, '+maSess+'!! Dirais-je si actuellement la fonction était terminée! <br>'; }
		}		
	};
	
	function fonctionCompte()
	{
		a = 0;
		for (var i = 0;  i < tableContenu.length; i++) {
			a = a+1;
		}
	return a;
	}
	function createForm(){
		fonctionDeleteButton();
		document.getElementById('corpsDocs').innerHTML += '<form action="./controller/creationPage.php" method="post"><input class="wid100" type="text" name="monTitre"><textarea class="wid100" name="monReptile" cols="100" rows="10"></textarea><input type="submit" name="monBouton" value="pagesreptile"></form>'; 
		
	}
	function fonctionCreateButton(){
		document.getElementById('corpsDocs').innerHTML += '<button id="boutonCreation" onClick="createForm();">monBouton</button>'
	}
	function fonctionDeleteButton(){
		//console.log('ok');
		document.getElementById('corpsDocs').innerHTML = "";
		fonctionGeneration();
	}
	function fonctionRemplir(){
		console.log(tableContenu);
	}
</script>
<?php
function remplirTableau(){
		$mesDocuments = scandir('./view/pagesreptile/');
		for ($i=0; $i < count($mesDocuments) ; $i++) { 
			if (strstr($mesDocuments[$i], '.txt')) {
				//echo $mesDocuments[$i];
				$file0 = file('./view/pagesreptile/'.$mesDocuments[$i]);
				/*$table = fopen('./view/pagesreptile/'.$mesDocuments[$i], 'r');
				$file = fread($table, filesize('./view/pagesreptile/'.$mysqliesDocuments[$i]));*/
				var_dump($file0);
				//echo $file;
				
				
				//echo '<script>console.log(tableContenu);</script>';
			//$table = fclose($table);
				//echo $mesDocuments[$i].'<br>';

			}
		}
	}

?>
