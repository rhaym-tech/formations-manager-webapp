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
    // Sélectionne tous les éléments contenant le texte "commentaire" et les renvoie dans un tableau.
    let commentaires = document.querySelectorAll('div.comment-timestamp');

    // Pour chaque élément de commentaires, récupère la date de l'événement.
    commentaires.forEach((element) => {
        // Récupère la date de le commentaire.
        let dateString = element.textContent;

        // Crée une date à partir de la date de le commentaire.
        const date = new Date(dateString);

        // Définit les options de formatage de la date.
        let options = { weekday: 'long', year: 'numeric', month: 'long', day: '2-digit', hour: '2-digit', minute: '2-digit' };
    
        // Formate la date en utilisant les options définis.
        let dateFormatee = date.toLocaleDateString('fr-FR', options);

        // Modifie la date de le commentaire en utilisant le formatage de la date.
        element.textContent = "Envoyé le " + dateFormatee;
    })   
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