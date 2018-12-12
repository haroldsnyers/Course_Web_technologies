//// affichage nom
//var prenom = prompt("Entrez votre prénom :");
//var nom = prompt("Entrez votre nom :");
//alert("Bonjour, " + prenom + " " + nom);

// conversion celsius/Fahrenheit
var nbrCelcius = prompt("Entrée un nombre : ");
var nbrFahrenheit = Number(nbrCelcius) * 9 / 5 + 32;
alert(nbrCelcius + " °C = " + nbrFahrenheit + " °F");

///*
//Exercice : calculer un prix TTC à partir d'un prix HT
//*/
//
//// Saisie du prix hors taxes
//var prixHT = Number(prompt("Entrez le prix HT :"));
//
//// Calcul du prix TTC
//var tauxTVA = 19.6 / 100;
//var prixTTC = prixHT * (1 + tauxTVA);
//
//// Affichage du résultat
//console.log("Le prix TTC est de " + prixTTC + " euros");

///*
//Exercice : inverser les valeurs des variables nombre1 et nombre2.
//*/
//
//var nombre1 = 5;
//var nombre2 = 3;
//
///* Solution utilisant l'addition et la soustraction
//(ne fonctionne qu'avec des nombres) */
//nombre1 = nombre1 + nombre2;
//nombre2 = nombre1 - nombre2;
//nombre1 = nombre1 - nombre2;
//
//console.log(nombre1); // Doit afficher 3
//console.log(nombre2); // Doit afficher 5

///*
//Exercice : inverser les valeurs des variables nombre1 et nombre2.
//*/
//
//var nombre1 = 5;
//var nombre2 = 3;
//
//// Solution utilisant d'une variable temporaire
//var temp = nombre1;
//nombre1 = nombre2;
//nombre2 = temp;
//
//console.log(nombre1); // Doit afficher 3
//console.log(nombre2); // Doit afficher 5
