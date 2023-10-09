document.addEventListener("DOMContentLoaded", function () {
    const cartes = document.querySelectorAll(".carte");
    const carteDetail = document.querySelector(".carte-detail .description");

    cartes.forEach((carte) => {
        const titre = carte.querySelector("h2");
        const description = carte.querySelector("p");

        carte.addEventListener("click", () => {
            const titreTexte = titre.textContent;
            const descriptionTexte = description.textContent;

            carteDetail.innerHTML = `<h2>${titreTexte}</h2><p>${descriptionTexte}</p>`;
            carteDetail.classList.remove("hidden");
        });
    });
});
