// jours suivant
var allmonth = new Array("JAN", "FEB", "MARS", "AVRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEP", "OCT", "NOV", "DEC");

var alldays = new Array("monday", "tuesday", "wednesday", "thursday", "friday", "saterday", "sunday");

var jour = prompt("Entrée un jour de la semaine:");
var nbrdays = alldays.length;

//for (i = 0; i < nbrdays; i++){
//     if (!(jour = alldays[i])){
//         jour = prompt("Entrée un vrai jour de la semaine sans majuscule:");
//     }
//}

var date = prompt("Entrée la date de ce jours de la semaine et séparer le par un / and don't put 0 in front:");

var dateArray = date.split("/");
var day = Number(dateArray[0]);
var month = Number(dateArray[1]);
var jourj;
var nextday;
var nextmonth;

for (i = 0; i < nbrdays; i++){
     if ((jour == alldays[i]) && (i != 6)){
         jourj = alldays[i+1];
         alert("le jour suivant est le " + jourj);
     } else {
         jourj = alldays[0];
         alert("le jour suivant est le " + jourj);
     }
}

if (month%2 == 1) {
    if (day == 31) {
        nextday = 1;
        nextmonth = month + 1;
    } else {
        nextday = day + 1;
        nextmonth = month;
    }
} else if ((month%2 == 1) && (month != 2)) {
     if (day == 30) {
        nextday = 1;
        nextmonth = month + 1;

    } else {
        nextday = day + 1;
        nextmonth = month;
    }
} else {
    if (day == 28) {
        nextday = 1;
        nextmonth = month + 1;

    } else {
        nextday = day + 1;
        nextmonth = month;
    }
}

alert("la date du jours prochain est le " + nextday + "/" + nextmonth);



