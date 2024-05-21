document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('comment-form');

    commentForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;

        if (!validateEmail(email)) {
            alert('Adresse e-mail non valide.');       
        }
    });
});

/**
 * Fonction pour valider un email (Avec regex)
 * @param {string} email l'email pour valider
 * @returns true si l'email est valide
 */
function validateEmail(email) {
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}