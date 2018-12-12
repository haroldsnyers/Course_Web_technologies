//var stylo = {
//    type: "bille",
//    couleur: "bleu",
//    marque: "Bic"
//};
//
//console.log(stylo.type); // Affiche "bille"
//console.log(stylo.couleur); // Affiche "bleu"
//console.log(stylo.marque); // Affiche "Bic"
//
//console.log(stylo['type']); // Affiche "bille"
//console.log(stylo['couleur']); // Affiche "bleu"
//console.log(stylo['marque']); // Affiche "Bic"
//
//console.log("Mon stylo à " + stylo.type + " " + stylo.marque + " écrit en " + stylo.couleur);

//mini jeu
//var perso = {
//    nom: "Aurora",
//    sante: 150,
//    force: 25
//};
//
//console.log(perso.nom + " a " + perso.sante + " points de vie et " + perso.force + " en force");
//
//// Aurora est blessée par une flèche
//perso.sante = perso.sante - 20;
//
//// Aurora trouve un bracelet de force
//perso.force = perso.force + 10;
//
//console.log(perso.nom + " a " + perso.sante + " points de vie et " + perso.force + " en force");

//ou 
var perso = {
    nom: "Aurora",
    sante: 150,
    force: 25,

    // Renvoie la description du personnage
    decrire: function () {
        var description = this.nom + " a " + this.sante + " points de vie et " + this.force + " en force et " + this.xp + " points d'expérience.";
        return description;
    }
};

perso.xp = 0;

console.log(perso.decrire());

// Aurora est blessée par une flèche
perso.sante = perso.sante - 20;

// Aurora trouve un bracelet de force
perso.force = perso.force + 10;

// Aurora apprend une nouvelle compétence
perso.xp = perso.xp + 15;

console.log(perso.decrire());

/*
Exercice : objet cercle
*/

var r = Number(prompt("Entrez le rayon d'un cercle :"));

var cercle = {
    rayon: r,

    // Renvoie le périmètre du cercle
    perimetre: function () {
        return 2 * this.rayon * Math.PI;
    },
    // Renvoie l'aire du cercle
    aire: function () {
        return this.rayon * this.rayon * Math.PI;
        // Autre possibilité
        //return Math.pow(this.rayon, 2) * Math.PI;
    }
};

console.log("Son périmètre vaut " + cercle.perimetre());
console.log("Son aire vaut " + cercle.aire());

/*
Exercice : objet chien
*/

var chien = {
    nom: "Crockdur",
    race: "mâtin de Naples",
    taille: 75,

    // Renvoie l'aboiement du chien
    aboyer: function () {
        return "Grrr ! Grrr !";
    }
};

console.log(chien.nom + " est un " + chien.race + " mesurant " + chien.taille + " cm");
console.log("Tiens, un chat ! " + chien.nom + " aboie : " + chien.aboyer());

/*
Exercice : compte bancaire
*/

var compte = {
    titulaire: "Alex",
    solde: 0,

    // Crédite le compte d'un certain montant
    crediter: function (montant) {
        this.solde = this.solde + montant;
    },
    // Débite le compte d'un certain montant
    debiter: function (montant) {
        this.solde = this.solde - montant;
    },
    // Renvoie la description du compte
    decrire: function () {
        var description = "Titulaire : " + this.titulaire +
            ", solde : " + this.solde + " euros";
        return description;
    }
};

console.log(compte.decrire());
var credit = Number(prompt("Entrez le montant à créditer :"));
compte.crediter(credit);
var debit = Number(prompt("Entrez le montant à débiter :"));
compte.debiter(debit);
console.log(compte.decrire());