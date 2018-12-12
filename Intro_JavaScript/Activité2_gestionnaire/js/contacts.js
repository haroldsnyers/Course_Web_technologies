/* 
Activité : gestion des contacts
*/

var Contact = {
    // initialisation contact
    initContact: function (nom, prenom){
        this.nom = nom;
        this.prenom = prenom;
    },
    // affichage du contact
    decrire: function(){
        var description = "Nom : " + this.nom + ", prénom : " + this.prenom;
        return description;
    }
};

var Choix = {
    // initialisation des choix
    initChoix: function (commande, descriptif){
        this.commande = commande;
        this.descriptif = descriptif;
    },
    // affichage du choix
    decrire: function (){
        var description = this.commande + " : " + this.descriptif;
        return description;
    }
};

// création des différents choix possibles
var choix1 = Object.create(Choix);
choix1.initChoix(1, "Lister les contacts")
var choix2 = Object.create(Choix);
choix2.initChoix(2, "Ajouter un contact")
var choix0 = Object.create(Choix);
choix0.initChoix(0, "Quitter")

// tableau des choix possibles
var choixTotal = [choix1, choix2, choix0];

// création des différents contacts initialement dans le gestionnaire
var contact1 = Object.create(Contact);
contact1.initContact("Lincoln", "Abraham")
var contact2 = Object.create(Contact);
contact2.initContact("Kennedy", "John F.")

// tableau de tout les contacts
var contactTotal = [contact1, contact2];

console.log("Bienvenue dans le gestionnaire de contacts !");

function menu(){
    choixTotal.forEach(function (choix) {
        console.log(choix.decrire());
    });
}

function affichageContact(){
    contactTotal.forEach(function (contact) {
        console.log(contact.decrire());
    }); 
}

// affichage de tous les choix possibles
menu();

// Entrée pour choisir l'option pour la première fois
var commande = Number(prompt("Choisissez une option :"));

// Tant que l'ulisateur ne demande pas de quitter, programme tourne en boucle
while (commande !== 0){
    // Pour lister les contacts
    if (commande === 1){
        console.log("");
        console.log("Voici la liste de tous les contacts :");
        
        // affichage des différents contacts
        affichageContact();
        console.log("");
        menu();
        commande = Number(prompt("Choisissez une option :"));
        
    // pour ajouter des contacts
    } else if (commande === 2){
        var numeroContact = contactTotal.length + 1;
        // Afin de donner un nom au contact, si la taille de la liste avant l'ajout
        // du contact est de 2, le contact qu'on ajoute sera contact3
        // création du nouveau contact à partir du prototype
        this["contact"+numeroContact] = Object.create(Contact);
        
        var nom = prompt("Entrée le nom du contact");
        var prenom = prompt("Entréé le prénom du contact");
        this["contact"+numeroContact].initContact(nom, prenom);
        
        console.log("\nLe nouveau contact a été ajouter");
        console.log("");
        menu();
        
        // ajout du contact dans le tableau de contacts
        contactTotal[numeroContact] = this["contact"+numeroContact];
        commande = Number(prompt("Choisissez une option :"));
        
        // Afin d'afficher seulement un contact, mais je n'arrive pas à avoir le nom
        // de l'objet (un .getName())
//    } else if (commande === 3){
//        var con = prompt("contactnumber");
//        contactTotal.forEach(function (contact){
//            var strClassname = contact.constructor.name;
//            if (con === String(strClassname)){
//                console.log(contact.decrire());
//            } else {
//                console.log(strClassname);
//                console.log("marche pas")
//            }  
//        });
    } else { // autres chiffres ou caractères ne se trouvant pas dans la liste des choix
        commande = Number(prompt("Choisissez une option parmi celle donnée : "));
        console.log("Erreur de saissie");
        menu();
    }
}

console.log("Vous avez quitté le programme !");





