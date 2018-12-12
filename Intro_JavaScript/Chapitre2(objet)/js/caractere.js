// comptage de caractère
function count(mot){
    return mot.length;
}

// minuscule
function minus(mot){
    return mot.toLowerCase();
}

// majuscule
function maj(mot){
    return mot.toUpperCase();
}

function typecara(mot) {
    var countVoy = 0;
    var countCon = 0;
    for (i=0; i<mot.length; i++){
        var lettre = mot[i].toLowerCase();
        if ((lettre === 'a') || (lettre === 'e') || (lettre === 'i') ||
            (lettre === 'o') || (lettre === 'u') || (lettre === 'y')) {
            countVoy++;
        }
    }
    countCon = mot.length - countVoy;
    var liste = new Array(countVoy, countCon);
    return liste;
}

function inverse(mot){
    var newWord = "";
    for (i = mot.length - 1; i >= 0; i--){
        newWord += mot[i];
    }
    return newWord;
}

// palindrome (mot qui si on le retourne ne change pas)
function palindrome(mot){
    var motL = mot.toLowerCase();
    if (motL === inverse(motL)){
        return "Ceci est un palindrome";
    } else {
        return "Ceci n'est pas un palindrome"
    }
}

// Renvoie l'équivalent "leet speak" d'une lettre
function trouverLettreLeet(lettre) {
    // Par défaut, la lettre ne change pas
    var lettreLeet = lettre; // on assign la lettre à une nouvelle variable
    // si lettre même, lettre change en fct du case, sinon elle ne change pas
    switch (lettre.toLowerCase()) {
    case "a":
        lettreLeet = "4";
        break;
    case "b":
        lettreLeet = "8";
        break;
    case "e":
        lettreLeet = "3";
        break;
    case "l":
        lettreLeet = "1";
        break;
    case "o":
        lettreLeet = "0";
        break;
    case "s":
        lettreLeet = "5";
        break;
    case "t":
        lettreLeet = "7";
        break;
        // ...
    }
    return lettreLeet;
}

// Renvoie un mot converti en "leet speak"
function convertirEnLeetSpeek(mot) {
    var motLeet = "";
    for (var i = 0; i < mot.length; i++) {
        motLeet += trouverLettreLeet(mot[i]);
    }
    return motLeet;
}

// affichage
var premierMot = "Anaconda";
var deuxiemeMot = "Radar";

var countMot = count(premierMot);
var countMot2 = count(deuxiemeMot);

console.log("Le mot " + premierMot + " contient " + countMot + " caractère(s)");
console.log("Le mot " + deuxiemeMot + " contient " + countMot2 + " caractère(s)");

var motMinus = minus(premierMot);
var motMajus = maj(premierMot);

console.log("le mot " + premierMot + " en majuscule : " + motMajus);
console.log("le mot " + premierMot + " en minuscule : " + motMinus);

var motVoyelle = typecara(premierMot)[0];
var motConson = typecara(premierMot)[1];

console.log("le mot " + premierMot + " a " + motVoyelle + " voyelle(s) et " + motConson + " consonne(s)");

var motInverse = inverse(premierMot);

console.log("le mot " + premierMot + " en inverse donne " + motInverse);

var motPal = palindrome(premierMot);
var motLeet = convertirEnLeetSpeek(premierMot);

console.log(motPal);
console.log(deuxiemeMot + ", " + palindrome(deuxiemeMot));
console.log("le mot " + premierMot + " en leek donne : " + motLeet);


