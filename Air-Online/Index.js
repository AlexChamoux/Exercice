let deadline = new Date("2023-04-16T11:00:00");
console.log(deadline);
const countdownEl = document.getElementById("demo");

function countDown() {
let now = new Date().getTime();
let t = deadline.getTime() - now;
let days = Math.floor(t / (1000 * 60 * 60 * 24));
let hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
let minutes = Math.floor((t%(1000 * 60 * 60)) / (1000 * 60));
let seconds = Math.floor((t%(1000 * 60)) / 1000);

if (hours < 10) {
    hours = "0" + hours;
}

if (minutes < 10) {
    minutes = "0" + minutes;
}

if (seconds < 10) {
    seconds = "0" + seconds;
}

countdownEl.innerHTML = `
<div class="countdown-container">
    <div class="countdown-item">
        <div class="count">${days}</div>
        <div class="under-count">JOURS</div>
    </div>
    <div class="countdown-item">
        <div class="count">${hours}</div>
        <div class="under-count">HEURES</div>
    </div>
    <div class="countdown-item">
        <div class="count">${minutes}</div>
        <div class="under-count">MINUTES</div>
    </div>
    <div class="countdown-item">
        <div class="count">${seconds}</div>
        <div class="under-count">SECONDES</div>
    </div>
</div>`;
};

setInterval(countDown, 1000);

 /* Bouton Inscription */
// Récupération du bouton et des éléments à afficher
let popUpBtn = document.querySelector('.pop-up-btn');
let inscription = document.querySelector('.inscription');
let inscripContent = document.querySelector('.inscrip-content');

// Ajout d'un écouteur d'événement sur le bouton
popUpBtn.addEventListener('click', () => {
    // Affichage des éléments
    inscription.style.visibility = 'visible';
    inscripContent.style.visibility = 'visible';
});

/* Bouton retour */
let btnReturn = document.querySelector('.return');
let popUpRetour = document.getElementById('retour');
let popUpRetourContent = document.querySelector('.retour-content');

btnReturn.addEventListener('click', () => {
    popUpRetour.style.visibility = 'visible';
    popUpRetourContent.style.visibility = 'visible';
    inscription.style.visibility = 'hidden';
    inscripContent.style.visibility = 'hidden';
});

/* Bouton validation */
let btnValid = document.querySelector('.valid');
let popUpValidation = document.getElementById('validation');
let popUpValidationContent = document.querySelector('.validation-content');

/*btnValid.addEventListener('click', () => {
        event.preventDefault;
        popUpValidation.style.visibility = 'visible';
        inscription.style.visibility = 'hidden';
        inscripContent.style.visibility = 'hidden';
        popUpValidation.innerHTML= 
        `<div class="validation-content">
            <buton class="supp-3">X</buton>
            <p>Merci pour votre inscription,</p> 
            <p>Rendez-vous le 26 avril à l’aéroport</p>
            <img class="white-plane-3" src="./Images/Avions&icones/avion3.svg" alt="avion en papier">
        </div>`;
});*/
/*function valid (){
     if(document.getElementById('nom').value !== "" && document.getElementById('prenom').value !== "" && document.getElementById('age').value !== "" && document.getElementById('email').value !== "" && document.getElementById('conditions').checked) {
         event.preventDefault();
         popUpValidation.style.visibility = 'visible';
         popUpValidationContent.style.visibility = 'visible';
         inscription.style.visibility = 'hidden';
         inscripContent.style.visibility = 'hidden';
     } else {
     alert("Veuillez remplir tous les champs obligatoires et accepter les conditions d'utilisation.");
     }
};*/
/* Button Supp, supp-1, supp-2, supp-3 */
let supp1 = document.querySelector('.supp-1');

supp1.addEventListener('click', () => {
    inscription.style.visibility = 'hidden';
    inscripContent.style.visibility = 'hidden';
});

let supp2 = document.querySelector('.supp-2');

supp2.addEventListener ('click', () => {
    popUpRetour.style.visibility = 'hidden';
    popUpRetourContent.style.visibility = 'hidden';
});

let supp3 = document.querySelector('.supp-3');

supp3.addEventListener('click', () => {
    popUpValidation.style.visibility = 'hidden';
    popUpValidationContent.style.visibility = 'hidden';
});