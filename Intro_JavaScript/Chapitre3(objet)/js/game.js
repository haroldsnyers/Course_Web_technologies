//var Personnage = {
//    nom: "",
//    sante: 0,
//    force: 0,
//    xp: 0,
//
//    // Renvoie la description du personnage
//    decrire: function () {
//        var description = this.nom + " a " + this.sante + " points de vie, " +
//            this.force + " en force et " + this.xp + " points d'expérience";
//        return description;
//    }
//};
//
//var perso1 = Object.create(Personnage);
//perso1.nom = "Aurora";
//perso1.sante = 150;
//perso1.force = 25;
//
//var perso2 = Object.create(Personnage);
//perso2.nom = "Glacius";
//perso2.sante = 130;
//perso2.force = 35;
//
//console.log(perso1.decrire());
//console.log(perso2.decrire());

// avec initialisation, évite d'être répétitif. 
//var Personnage = {
//    // Initialise le personnage
//    init: function (nom, sante, force) {
//        this.nom = nom;
//        this.sante = sante;
//        this.force = force;
//        this.xp = 0;
//    },
//
//    // Renvoie la description du personnage
//    decrire: function () {
//        var description = this.nom + " a " + this.sante + " points de vie, " +
//            this.force + " en force et " + this.xp + " points d'expérience";
//        return description;
//    }
//};
//
//var perso1 = Object.create(Personnage);
//perso1.init("Aurora", 150, 25);
//
//var perso2 = Object.create(Personnage);
//perso2.init("Glacius", 130, 30);
//
//console.log(perso1.decrire());
//console.log(perso2.decrire());

//ajout d'adversaire, ceux-ci on certains points commun avec les heros mais aussi des
// différence, donc il va falloir que d'en plus du prototype pour chaque personnage il
// il va falloir rajouter des proprieté en plus pour les joueur et pour les monstres.

//var Personnage = {
//    // Initialise le personnage
//    initPerso: function (nom, sante, force) {
//        this.nom = nom;
//        this.sante = sante;
//        this.force = force;
//    }
//};
//
//var Joueur = Object.create(Personnage);
//// Initialise le joueur
//Joueur.initJoueur = function (nom, sante, force) {
//    // ajout des propriété typique du joueur en plus des propriétés du personnage
//    this.initPerso(nom, sante, force);
//    this.xp = 0; // L'expérience du joueur est toujours initialisée à 0
//};
//// Renvoie la description du joueur
//Joueur.decrire = function () {
//    var description = this.nom + " a " + this.sante + " points de vie, " +
//        this.force + " en force et " + this.xp + " points d'expérience";
//    return description;
//};
//
//var Adversaire = Object.create(Personnage);
//// Initialise l'adversaire
//Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {
//    // ajout des propriété typique du monstre en plus des propriétés du personnage
//    this.initPerso(nom, sante, force);
//    this.race = race;
//    this.valeur = valeur; // xp que le joueur recevra en le tuant
//};
//
//// initialisation partie
//var joueur1 = Object.create(Joueur);
//joueur1.initJoueur("Aurora", 150, 25);
//
//var joueur2 = Object.create(Joueur);
//joueur2.initJoueur("Glacius", 130, 30);
//
//console.log("Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros :");
//console.log(joueur1.decrire());
//console.log(joueur2.decrire());
//
//var monstre = Object.create(Adversaire);
//monstre.initAdversaire("ZogZog", 40, 20, "orc", 10);
//
//console.log("Un affreux monstre arrive : c'est un " + monstre.race + " nommé " + monstre.nom);

// Jeux final ou les heros peuvent attaquer les monstres et vice-versa. 
// Une différence dans l'attaque du joueur est que quand le joueur tue le monstre, il recevra des 
// xp correspondant à la valeur du monstre

var Personnage = {
    // Initialise le personnage
    initPerso: function (nom, sante, force) {
        this.nom = nom;
        this.sante = sante;
        this.force = force;
        // L'inventaire est géré sous la forme d'une propriété de type objet
        this.inventaire = {
            or: 10,
            cle: 1
        };
    },
    // Attaque un personnage cible
    attaquer: function (cible) {
        if ((this.sante > 0) && (cible.sante > 0)) {
            var degats = this.force;
            console.log(this.nom + " attaque " + cible.nom + " et lui fait " + degats + " points de dégâts");
            cible.sante = cible.sante - degats;
            if (cible.sante > 0) {
                console.log(cible.nom + " a encore " + cible.sante + " points de vie");
            } else { // cible.sante <= 0
                cible.sante = 0; // mise à zero de la sante, sante négative pas possible
                console.log(cible.nom + " est mort !");
            }
        } else if ((this.sante > 0) && (cible.sante === 0)){
            console.log(this.nom + " ne peut pas attaquer : " + cible.nom + " est déjà mort...");
        } else {
            console.log(this.nom + " ne peut pas attaquer : il est mort...");
        }
    }
};

var Joueur = Object.create(Personnage);
// Initialise le joueur
Joueur.initJoueur = function (nom, sante, force) {
    this.initPerso(nom, sante, force);
    this.xp = 0;
};
// Renvoie la description du joueur
Joueur.decrire = function () {
    var description = this.nom + " a " + this.sante + " points de vie, " +
        this.force + " en force et " + this.xp + " points d'expérience, " + this.inventaire.or 
            + " pièces d'or et " + this.inventaire.cle + " clé(s)";
    return description;
};
// Combat un adversaire
Joueur.combattre = function (adversaire) {
    // L'objet Joueur gagne une méthode combattre() qui fait appel par délégation 
    // à la méthode attaquer() dePersonnage
    this.attaquer(adversaire);
    if ((adversaire.sante === 0) && (this.sante > 0)) {
        console.log(this.nom + " a tué " + adversaire.nom + " et gagne " + adversaire.valeur +
            " points d'expérience, " + adversaire.inventaire.or + " pièces d'or et " + 
            adversaire.inventaire.cle + " clé(s)");
        this.xp += adversaire.valeur;
        this.or += adversaire.or;
        this.cle += adversaire.cle;
        // car si on met pas ça, à chaque fois qu'on essaie d'attaque le monstre et 
        // qu'on le tue même si il est déjà mort, on reçevra à nouveau les cle, or et valeur
        adversaire.valeur = 0;
        adversaire.or = 0;
        adversaire.cle = 0;
    }
};

var Adversaire = Object.create(Personnage);
// Initialise l'adversaire
Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {
    this.initPerso(nom, sante, force);
    this.race = race;
    this.valeur = valeur;
};

var joueur1 = Object.create(Joueur);
joueur1.initJoueur("Aurora", 150, 45);

var joueur2 = Object.create(Joueur);
joueur2.initJoueur("Glacius", 130, 150);

console.log("Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros :");
console.log(joueur1.decrire());
console.log(joueur2.decrire());

var monstre = Object.create(Adversaire);
monstre.initAdversaire("ZogZog", 400, 120, "orc", 10);

console.log("Un affreux monstre arrive : c'est un " + monstre.race + " nommé " + monstre.nom);

monstre.attaquer(joueur1);
joueur1.combattre(monstre);
joueur2.combattre(monstre);

console.log(joueur1.decrire());
console.log(joueur2.decrire());

monstre.attaquer(joueur2);
joueur1.combattre(monstre);
joueur2.combattre(monstre);

console.log(joueur1.decrire());
console.log(joueur2.decrire());

monstre.attaquer(joueur1);
joueur1.combattre(monstre);
joueur2.combattre(monstre);

console.log(joueur1.decrire());
console.log(joueur2.decrire());

monstre.attaquer(joueur2);
joueur1.combattre(monstre);
joueur2.combattre(monstre);

console.log(joueur1.decrire());
console.log(joueur2.decrire());