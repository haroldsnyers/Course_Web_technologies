/*
Exercice : maximum d'un tableau
*/

var valeurs = [11, 3, 7, 2, 9, 10];

var max = valeurs[0];
// L'indice commence à 1 puisque le maximum est initialisé avec la 1ère valeur du tableau
for (var i = 1; i < valeurs.length; i++) {
    if (valeurs[i] > max) {
        max = valeurs[i];
    }
}
console.log("Le maximum des éléments vaut " + max);

/*
Exercice : somme des valeurs d'un valeursleau
*/

var valeurs = [11, 3, 7, 2, 9, 10];

var somme = 0;
for (var i = 0; i < valeurs.length; i++) {
    somme += valeurs[i];
}
console.log("La somme des éléments vaut " + somme);

/*
Exercice : les trois mousquetaires
*/

var mousquetaires = ["Athos", "Porthos", "Aramis"];

console.log("Voici les " + mousquetaires.length + " mousquetaires :");
for (var i = 0; i < mousquetaires.length; i++) {
    console.log(mousquetaires[i]);
}

mousquetaires.push("D'Artagnan");

console.log("A présent, ils sont " + mousquetaires.length + " !");
mousquetaires.forEach(function (mousquetaire) {
    console.log(mousquetaire);
});

/*
Exercice : saisie d'une liste de mots
*/

var mots = [];

var mot = "";
while (mot !== "stop") {
    mot = prompt("Entrez un mot ou tapez stop pour arrêter :");
    if (mot !== "stop") {
        mots.push(mot);
    }
}

mots.forEach(function (mot) {
    console.log(mot);
});

