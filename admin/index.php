<?PHP
//<>
	
	require_once("database.php");
	$DB = new Database("localhost","root","","shana");
	include("tmp/head.html");
	if(isset($_GET["mode"])){
		switch ($_GET["mode"]) {
			case 'ajouter':
				include("tmp/ajouter.html");
				break;
				case 'list':
				include("tmp/modifiere.html");
				break;
			case 'addNewGame':
			include("ajouterUnJeux.php");
			 break;	
			case 'modifier':
				if(isset($_GET["id"])){
					if(intval($_GET["id"])>0){
						include("tmp/modifier.html");
					}
				}
			break;
			case 'edit': 
				if(isset($_GET["mode"]) && $_GET["mode"]=="edit" ){
					if(intval($_GET["id"])>0){
					include("tmp/editer.html");
					} echo "editing";
					}
				echo "i'm EDIT";
			break;
			case 'VeditGame': 
				if(isset($_GET["mode"]) && $_GET["mode"]=="VeditGame" && isset($_GET["id"])){
				include("editJeux.php");
				}
			break;
			case 'delete': 
				if(isset($_GET["mode"]) && $_GET["mode"]=="delete" && isset($_GET["id"])){
				include("delete.php");
				}
			break;
			default:
				include("tmp/body.html");
				break;
		}
	}
	include("tmp/end.html");
/*
<div id="head">
	
</div>
<div id="PanelLeft">
	<a href="index.php?mode=ajouter" >Ajouter</a>
	<a href="index.php?mode=ajouter" >Modifier</a>
	<a href="#" >Supprimer</a>
	<a href="#" >Suivre</a>
	<a href="#" >Statistiques</a>
	<a href="#" >Boite Messagerie</a>

</div>

<div id="content">
	<div id="Title">
		<h2> Titre de fonction </h2>	
	</div>
	<div id="fonction_Content">
*/

?>