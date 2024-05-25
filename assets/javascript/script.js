// Utilisation de l'événement DOM "DOMContentLoaded" qui s'exécute lorsque la page est entièrement chargée et prête.
document.addEventListener('DOMContentLoaded', () => {
    // Appel des fonctions à l'intérieur de la fonction gérant l'événement "DOMContentLoaded"
    modifierCommentairesDates();
    managerDevelopersCards();
});

/**
 * Cette fonction modifie la date des commentaires pour les afficher dans un format plus lisible.
 */
 function modifierCommentairesDates() {
    // Sélectionne tous les éléments ayant la classe "comment-timestamp".
    let commentTimestampElement = document.querySelectorAll("div.comment-timestamp");
    
    // Pour chaque élément sélectionné, modifie le contenu texte.
    commentTimestampElement.forEach((timestamp) => {
        // Convertit le texte de l'élément en objet Date.
        const date = new Date(timestamp.textContent);
        
        // Modifie le texte de l'élément pour afficher la date et l'heure dans un format lisible.
        timestamp.textContent = `Envoyé le ${nomDeJour(date.getDay())} ${date.toLocaleDateString("fr-FR")} à ${date.getHours() < 10 ? "0" + date.getHours() : date.getHours()}:${date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()}`;
    });
}

/**
 * Cette fonction gère l'affichage des cartes de développeurs.
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