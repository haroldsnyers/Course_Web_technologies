// Renvoie un message de bienvenue
function direBonjour(prenom, nom) {
    var message = "Bonjour, " + prenom + " " + nom + " !";
    return message;
}

// TODO : faire saisir le prénom et le nom de l'utilisateur
var prénomU = prompt("Entrée prenom");
var nomU = prompt("Entrée nom");

// TODO : appeler direBonjour() avec les bons arguments et afficher son résultat
console.log(direBonjour(prénomU, nomU));
alert(direBonjour(prénomU, nomU));

// Renvoie le carré d'un nombre
function carre(x) {
  // TODO : compléter le code de la fonction
    var resultCarré = x * x;
    return resultCarré;
}

console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25

// le carré de chiffre entre 0 et 10
for (var i = 0; i <= 10; i++) {
    console.log(carre(i));
}

/*
Exercice : fonction calculatrice
*/

// Renvoie le résultat d'un calcul
function calculer(operandeGauche, operation, operandeDroite) {
    var resultat;
    switch (operation) {
    case "+":
        resultat = operandeGauche + operandeDroite;
        break;
    case "-":
        resultat = operandeGauche - operandeDroite;
        break;
    case "*":
        resultat = operandeGauche * operandeDroite;
        break;
    case "/":
        resultat = operandeGauche / operandeDroite;
        break;
    }
    return resultat;
}

console.log(calculer(4, "+", 6)); // Doit afficher 10
console.log(calculer(4, "-", 6)); // Doit afficher -2
console.log(calculer(2, "*", 0)); // Doit afficher 0
console.log(calculer(12, "/", 0)); // Doit afficher Infinity

/*
Exercice : périmètre et aire d'un cercle
*/

// Renvoie le périmètre d'un cercle
function perimetre(rayon) {
    return 2 * rayon * Math.PI;
}

// Renvoie l'aire d'un cercle
function aire(rayon) {
    return Math.pow(rayon, 2) * Math.PI;
}

var r = Number(prompt("Entrez le rayon d'un cercle :"));
console.log("Son périmètre vaut " + perimetre(r));
console.log("Son aire vaut " + aire(r));

/*
Exercice : fonction minimum
*/

// Renvoie le minimum de 2 nombres
function min(a, b) {
    if (a < b) {
        return a;
    } else {
        return b;
    }
}

console.log(min(4.5, 5)); // Doit afficher 4.5
console.log(min(19, 9)); // Doit afficher 19
console.log(min(1, 1)); // Doit afficher 1
