

function changeIMG(ID,SRC){
	var id = document.getElementById(ID);
	id.src = SRC;
}
function switchADD(num){
	var id,img;
	switch(num){
		case 1 : 
		id = document.getElementById("one");
			id.removeAttribute("hidden");
		img = document.getElementById("IMGone");
			img.src = "icon/one_hover.png";
			document.getElementById("two").setAttribute("hidden","true");
			document.getElementById("three").setAttribute("hidden","true");
			document.getElementById("four").setAttribute("hidden","true");
			document.getElementById("IMGtwo").src="icon/two.png";
			document.getElementById("IMGthree").src="icon/three.png";
			document.getElementById("IMGfour").src="icon/four.png";
		break;
		case 2: 
		id = document.getElementById("two");
			id.removeAttribute("hidden","false");
		img = document.getElementById("IMGtwo");
			img.src = "icon/two_hover.png";
			document.getElementById("one").setAttribute("hidden","true");
			document.getElementById("three").setAttribute("hidden","true");
			document.getElementById("four").setAttribute("hidden","true");
			document.getElementById("IMGone").src="icon/one.png";
			document.getElementById("IMGthree").src="icon/three.png";
			document.getElementById("IMGfour").src="icon/four.png";
		break;
		case 3: 
		id = document.getElementById("three");
			id.removeAttribute("hidden","false");
		img = document.getElementById("IMGthree");
			img.src = "icon/three_hover.png";
			document.getElementById("one").setAttribute("hidden","true");
			document.getElementById("two").setAttribute("hidden","true");
			document.getElementById("four").setAttribute("hidden","true");
			document.getElementById("IMGone").src="icon/one.png";
			document.getElementById("IMGtwo").src="icon/two.png";
			document.getElementById("IMGfour").src="icon/four.png";
		break;
		case 4: 
		id = document.getElementById("four");
			id.removeAttribute("hidden","false");
		img = document.getElementById("IMGfour");
			img.src = "icon/four_hover.png";
			document.getElementById("one").setAttribute("hidden","true");
			document.getElementById("two").setAttribute("hidden","true");
			document.getElementById("three").setAttribute("hidden","true");
			document.getElementById("IMGone").src="icon/one.png";
			document.getElementById("IMGtwo").src="icon/two.png";
			document.getElementById("IMGthree").src="icon/three.png";
		break;
	}
}
function ifNonVide(ID){
	if(ID.value.length > 25) return true;
	return false;
}
function verifytit(){
	var titleJ = document.getElementById("titreJ");
	if(ifNonVide("titreJ")) return true;
	else alert("Il Faut Donnée Le titre du jeux avec un minimum de caractere 26.");
}
function verifydt(){
	var dateJ = document.getElementById("dateJ");
	if(dateJ.length == 12) return true;
	else alert("il faut donné une date de création du jeux correct !");
}
function verifyVideo(){
	var videoJ = document.getElementById("videoJ");
	if(ifNonVide("videoJ")) return true;
	else alert("il faut donné un lien correct du gameplay du jeux");
}
function verifyDesc(){
	var descJ = document.getElementById("descJ");
	if(ifNonVide("descJ")) return true;
	else alert("il faut donné une description correct !");
}
function verifyRequire(){
	var requirJ = document.getElementById('requirJ');
	if(ifNonVide("requirJ")) return true;
	else alert("il faut donnée un sstem de requirement correct !");
}
function verifyOne(){
	if(verifydt && verifytit && verifyVideo) return true;
}
// dateJ logoJ videoJ cap1 cap2 cap3 descJ requirJ