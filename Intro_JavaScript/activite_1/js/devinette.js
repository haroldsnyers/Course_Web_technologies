/*
Activité : jeu de devinette
*/

// NE PAS MODIFIER OU SUPPRIMER LES LIGNES CI-DESSOUS
// COMPLETEZ LE PROGRAMME UNIQUEMENT APRES LE TODO

console.log("Bienvenue dans ce jeu de devinette !");

// Cette ligne génère aléatoirement un nombre entre 1 et 100
var solution = Math.floor(Math.random() * 100) + 1;

// Décommentez temporairement cette ligne pour mieux vérifier le programme
console.log("(La solution est " + solution + ")");

// TODO : complétez le programme
console.log("Le but est de deviner le chiffre générer par l'ordinateur.\nCelui-ci se trouvant entre 1 et 100.\nVous avez 6 tentatives!");
var nombreJoueur = Number(prompt("Entrée un chiffre "));

while(nombreJoueur) {
    for (i = 1; i < 7; i++) {
        if (i < 6) {
            if (nombreJoueur === solution) {
                console.log("Bravo ! la solution était " + solution);
                console.log("Vous avez trouvé en " + i + " essai(s)");
                i = 8;
            } else if (nombreJoueur > solution) {
                console.log("Tentative " + i + " : " + nombreJoueur + " est trop grand");
                nombreJoueur = Number(prompt("Tentez votre chance à nouveau"));
            } else { // if (nombreJoueur < solution) {
                console.log("Tentative " + i + " : " + nombreJoueur + " est trop petit");
                nombreJoueur = Number(prompt("Tentez votre chance à nouveau"));
            }
        } else { // i = 6
            if (nombreJoueur === solution) {
                console.log("Bravo ! la solution était " + solution);
                console.log("Vous avez trouvé en " + i + " essai(s)");
            } else { // nombreJoueur !== solution
                if (nombreJoueur > solution) {
                    console.log("Tentative " + i + " : " + nombreJoueur + " est trop grand");
                    console.log("Perdu... La solution était " + solution);
                } else { // nombreJoueur < solution
                    console.log("Tentative " + i + " : " + nombreJoueur + " est trop petit");
                    console.log("Perdu... La solution était " + solution);
                }
            }
        }
    }
}
