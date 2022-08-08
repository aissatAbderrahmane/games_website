<?PHP
	if(isset($_GET["id"]))
		$DB->deletes("jeux", " id='".$_GET["id"]."' ");
	echo "Suprission avec sucess ";

?>