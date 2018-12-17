// affichage
function display(sData){
    var codeP = document.getElementById(sData);
    console.log(sData);
    // code pour l'affichage de la traduction de la piece
    document.getElementById("pieceTrans").innerHTML = sData.value;
}


// Communication serveur
function request(appel) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            appel(xhr.responseText);
        }
    };
    var select = document.getElementById('inlineFormCustomSelect');
    var index = select.selectedIndex;
    var language = select.options[index].value;
    
    // récupération de la piece
    var pieceATrad = document.getElementById('piece')
    var piece = pieceATrad.value;
    
    var sVar1 = encodeURIComponent(language);  
	var sVar2 = encodeURIComponent(piece);   

    xhr.open("GET", "http://laboweb.ecam.be/translate/index.php?target=" +sVar1+ "&term=" +sVar2, true);
    xhr.send();
}

