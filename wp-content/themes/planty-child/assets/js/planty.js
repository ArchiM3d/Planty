// Sélectionnez le bouton de la nav
var navButton = document.querySelector('.nav-btn');
var siteNavigation = document.querySelector('#site-navigation');

// Click sur le bouton de la nav
navButton.addEventListener("click", function () {
  // Vérifie si la navigation est masqué
  if (getComputedStyle(siteNavigation).display === "none") {
    // Si oui l'affiche avec flex
    siteNavigation.style.display = "flex";
  } else {
    // Sinon la masque
    siteNavigation.style.display = "none";
  }
});

// Sélectionnez tous les boutons de quantité
var quantityButtons = document.querySelectorAll(".quantity-button");

// Bouclez sur tous les boutons de quantité et ajoutez un écouteur d'événement click à chacun
quantityButtons.forEach(function (button) {
  button.addEventListener("click", function () {
    // Obtenez le champ de nombre correspondant
    var numberField = this.parentNode.parentNode.querySelector(".quantity .number-style");

    // Obtenez la valeur actuelle du champ de nombre
    var currentValue = parseInt(numberField.value);

    // Vérifiez si le bouton cliqué est le bouton "plus" ou "moins"
    if (this.classList.contains("quantity-up")) {
      // Augmentez la valeur du champ de nombre de 1
      numberField.value = currentValue + 1;
    } else {
      // Vérifiez si la valeur actuelle est supérieure à 0 avant de la diminuer de 1
      if (currentValue > 0) {
        numberField.value = currentValue - 1;
      }
    }
  });
});