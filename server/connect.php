<?php  
$link ='mysql:host=localhost;dbname=test';
	try{
	$bdd = new PDO($link,'root','') 
	or die('Erreur de la connexion');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}

/*echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "get";
echo "<pre>";
print_r($_GET);
echo "</pre>";*/
if(!empty($_GET)){
	extract($_GET);
	if($action == 'getArticle'){

		$query = "select * from article";
		$result = $bdd->prepare($query);
		$result->execute();
		$datas = $result->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode(json($datas));

		/*echo "<pre>";
		print_r($datas);
		echo "</pre>";*/
	}
}


function json($table){
	$js = '[';
	foreach ($table as $key => $value) {
		$tjs ='{';
		foreach ($value as $ke => $d) {
			$tjs .= '"'.$ke.'":"'.$d.'",';
		}
		if(strlen($tjs) > 1)
			$tjs = substr($tjs, 0,strlen($tjs)-1);
		$tjs .='}';
		$js .= $tjs.',';
	}
	if(strlen($js) > 1)
			$js = substr($js, 0,strlen($js)-1);

	$js .=']';
	return $js;
}