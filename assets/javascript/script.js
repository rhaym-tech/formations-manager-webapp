// Utilisation de l'événement DOM "DOMContentLoaded" qui s'exécute lorsque la page est entièrement chargée et prête.
document.addEventListener('DOMContentLoaded', () => {
    // Appel des fonctions à l'intérieur de la fonction gérant l'événement "DOMContentLoaded"
    modifierCommentairesDates();
    managerDevelopersCards();
});

/*
Akram, since you wasn't able to proove yourself in HTML/CSS, I give you your last chance in making a one single JavaScript function

TODO: Make a JavaScript/DOM function to format the date comments
? The comments sent date is displayed with it's basic form from the SQL database (YYYY-MM-DD HH:MM), I want you to make a JavaScript DOM function to format the date comments in french like this:
* Envoyé le Dimanche 26/05/2024 à 09:05
* I'll help you by giving you things that you can use in making this function
* 1) Date Class:
    it's a class that can be used to get the day of the week, the month, the year, the hour, the minute, the second, and the timezone.
    you can use it like this:
    const date = new Date(...); // pass your arguments to it depends on what do you need

    const minutes = date.getMinutes();
    const hours = date.getHours();
    const day = date.getDay();
    const date = date.toLocaleDateString("la format de la date que vous voulez"); // exemple: "fr-FR" ou "en-US"

* 2) The fonction nomDeJour(nombreDeJour) that I declared below which returns you the name of the day based on it's number, more details are explained in the function comments
See line 78 for more details
*/

/**
 *? Cette fonction gère l'affichage des cartes de développeurs.
 */
function managerDevelopersCards() {
    // Sélectionne le bouton qui montre ou cache les cartes des développeurs.
    let showDevelopersCard = document.getElementById('show-developers-card');
    
    // Sélectionne l'élément contenant les cartes des développeurs.
    let developerCards = document.getElementById('developer-cards');

    // Ajoute un gestionnaire d'événement au bouton pour gérer les clics.
    showDevelopersCard.addEventListener('click', () => {
        // Sélectionne toutes les cartes des développeurs à l'intérieur de l'élément principal.
        let cards = developerCards.querySelectorAll('.dev-card');
        
        // Pour chaque carte, alterne l'affichage entre "block" et "none".
        cards.forEach(function(card) {
            if (card.style.display === 'none' || card.style.display === '') {
                // Si la carte est cachée, l'affiche et change le texte du bouton.
                card.style.display = 'block';
                showDevelopersCard.textContent = "Cacher Miniprojet developers";
            } else {
                // Si la carte est visible, la cache et change le texte du bouton.
                card.style.display = 'none';
                showDevelopersCard.textContent = "Voir Miniprojet developers";
            }
        });
    });
}

/**
 * Une fonction qui retourner le nom de jour d'apres le numero de jour
 * @param {number} numDeJour Numero de jour: Dimanche - Samedi ( 0 - 6 )
 * @returns Le nom de jour
 * @throws Un erreur si le numero de jour n'est pas valide
 */
function nomDeJour(numDeJour) {
    switch(numDeJour) {
        case 0:
            return "Dimanche";
        case 1:
            return "Lundi";
        case 2:
            return "Mardi";
        case 3:
            return "Mercredi";
        case 4:
            return "Jeudi";
        case 5:
            return "Vendredi";
        case 6:
            return "Samedi";
        default:
            throw new Error("Ce jour n'existe pas");
    }
}