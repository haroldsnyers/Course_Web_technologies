var CompteBancaire = {
    // initialisation compte bancaire
    initCB: function (nom, montant){
        this.nom = nom;
        this.montant = montant;
    },
    decrire: function (){
        var description = "titulaire : " + this.nom + ", solde : " + this.montant;
        return description;
    },
    crediter: function (montant){
        this.montant += montant; 
    }, 
    debiter: function (montant){
        this.montant -= montant; 
    }
}

//var CompteEpargne = {
//    // initialisation compte d'épargne
//    initCE: function (nom, montant, interet){
//        this.nom = nom;
//        this.montant = montant;
//        this.interet = interet;
//    },
//    decrire: function (){
//        var description = "titulaire : " + this.nom + ", solde : " + this.montant;
//        return description;
//    },
//    crediter: function (montant){
//        this.montant += montant; 
//    }, 
//    ajouterInterets: function(){
//        this.montant += this.montant*this.interet;
//    }
//}

var CompteEpargne = Object.create(CompteBancaire);
// Initialise le compte épargne
CompteEpargne.initCE = function (titulaire, solde, Interet) {
    this.initCB(titulaire, solde);
    this.Interet = Interet;
};
// Calcule et ajoute les intérêts au solde cu compte
CompteBancaire.ajouterInterets = function(){
        this.montant += this.montant*this.Interet;
};

var compte1 = Object.create(CompteBancaire);
compte1.initCB("Alex", 100);
var compte2 = Object.create(CompteEpargne);
compte2.initCE("Marco", 50, 0.05);

console.log("Voici l'état initial des comptes :");
console.log(compte1.decrire());
console.log(compte2.decrire());

var montant = Number(prompt("Entrez le montant à transférer entre les comptes :"));
compte1.debiter(montant);
compte2.crediter(montant);

// Calcule et ajoute les intérêts au solde du compte
compte2.ajouterInterets();

console.log("Voici l'état final des comptes après transfert et calcul des intérêts :");
console.log(compte1.decrire());
console.log(compte2.decrire());