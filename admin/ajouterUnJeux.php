<?PHP

	$titre = $_POST["titleGame"];
	$dateDuJeux = $_POST["dtJeux"];
	$logoJeux = $_POST["logoIMG"];
	$gamePlay = $_POST["gameplay"];
	$description = $_POST["desc"];
	$_Requirement = $_POST["requir"];
  $_CAP1 = "../Games-cap/".basename($_FILES["cap1"]["name"]);
  $_CAP2 = "../Games-cap/".basename($_FILES["cap2"]["name"]);
  $_CAP3 = "../Games-cap/".basename($_FILES["cap3"]["name"]);
    if(move_uploaded_file($_FILES["cap1"]["tmp_name"], $_CAP1)) echo "Uploaded 1"; else echo "Error";
    if(move_uploaded_file($_FILES["cap2"]["tmp_name"], $_CAP2)) echo "Uploaded 2"; else echo "Error";
    if(move_uploaded_file($_FILES["cap3"]["tmp_name"], $_CAP3)) echo "Uploaded 3"; else echo "Error";

	if(isset($titre) && isset($dateDuJeux) && isset($logoJeux) && isset($gamePlay) && isset( $description) && isset($_Requirement)){

		$DB->insert("jeux","id,Titre,image,capture,capture2,capture3,Descr,System,video,Date_ajou,Visit,Lvl","NULL,
      '".$titre."','".$logoJeux."','".$_CAP1."','".$_CAP2."','".$_CAP3."','".$description."','".$_Requirement."','".$gamePlay."','".$dateDuJeux."',0,1"
    );
    echo "Insertion avec sucess ";
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