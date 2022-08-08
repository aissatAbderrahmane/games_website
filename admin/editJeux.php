<?PHP

	$titre = $_POST["titleGame"];
	$dateDuJeux = $_POST["dtJeux"];
	$logoJeux = $_POST["logoIMG"];
	$gamePlay = $_POST["gameplay"];
	$description = $_POST["desc"];
	$_Requirement = $_POST["requir"];
	if(isset($titre) && isset($dateDuJeux) && isset($logoJeux) && isset($gamePlay) && isset( $description) && isset($_Requirement)){
		$DB->update("jeux"," Titre='".$titre."' "," id='".$_GET["id"]."' ");
		$DB->update("jeux"," image= '".$logoJeux."' "," id='".$_GET["id"]."' ");
		$DB->update("jeux"," capture='cap1s'"," id='".$_GET["id"]."' ");
		$DB->update("jeux","capture2='csap2'"," id='".$_GET["id"]."' ");
		$DB->update("jeux","capture3='caps3' "," id='".$_GET["id"]."' ");
		$DB->update("jeux","Descr='".$description."' "," id='".$_GET["id"]."' ");
		$DB->update("jeux"," System='".$_Requirement."' "," id='".$_GET["id"]."' ");
		$DB->update("jeux"," video='".$gamePlay."'"," id='".$_GET["id"]."' ");
		$DB->update("jeux"," Date_ajou='".$dateDuJeux."'"," id='".$_GET["id"]."' ");
    echo "Modification avec sucess ";
	}
	
/*

  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `capture` text NOT NULL,
  `capture2` text NOT NULL,
  `capture3` text NOT NULL,
  `Descr` text NOT NULL,
  `System` text NOT NULL,
  `video` text NOT NULL,
  `Date_ajou` varchar(250) NOT NULL,
  `Visit` int(11) NOT NULL,
  `Lvl` int(1) NOT NULL,*/

?>

