document.addEventListener("DOMContentLoaded", function () {
    const cartes = document.querySelectorAll(".carte");
    const carteDetail = document.querySelector(".carte-detail");
    const carteDetailDescri = document.querySelector(".carte-detail .description");

    // Variable pour suivre la visibilité de la carte détaillée
    let isCarteDetailVisible = false;

    cartes.forEach((carte) => {
        console.log(carte);
        carte.addEventListener("click", () => {
            const titre = carte.getAttribute("data-title");
            const description = carte.getAttribute("data-description");

            // Vérifier si la carte détaillée est visible
            if (isCarteDetailVisible) {
                // Si elle est visible, masquer la carte détaillée
                carteDetail.classList.remove("carte-active");
                isCarteDetailVisible = false;
            } else {
                // Si elle n'est pas visible, afficher la carte détaillée et mettre à jour son contenu
                carteDetailDescri.innerHTML = `<h2>${titre}</h2><p>${description}</p>`;
                carteDetail.classList.add("carte-active");
                isCarteDetailVisible = true;
            }
        });
    });
});
