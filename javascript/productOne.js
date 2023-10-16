// HAMBURGER MENU ANIMATIONS
/* Variables to select the hamburger menu
	and the hidden navigation */
    
    /* Adding a click event listener to the hamburger
        menu icon, that recognizes if the navigation is open
        or closed, and triggers the animation.
        
        If the nav is closed the animation will play, 
        if it is open the animation will play in reverse */
    
    // IMAGE SLIDER
    
    /* Variables to select the previous and next 
        buttons and the image in the image slidder */
    
    const previousImg = document.getElementById("previousImg");
    const nextImg = document.getElementById("nextImg");
    const image = document.getElementById("image");
    
    /* An array with all the paths to the images
        needed for the image slider */

    var img1 = document.getElementById("hidd1").innerHTML;
    var img2 = document.getElementById("hidd2").innerHTML;
    var img3 = document.getElementById("hidd3").innerHTML;
    
    const images = [
        "api/more/uploads/"+img1,
        "api/more/uploads/"+img2,
        "api/more/uploads/"+img3,
    ];
    /* A variable to control the increments,
        so that the i does not exceed the total 
        images in the array */
    const max = images.length - 1;
    
    /* The variable which will increment/decrement */
    let i = 0;
    
    previousImg.addEventListener("click", () => {
        i--;
    
        if (i < 0) {
            i = max;
        }
    
        image.src = images[i];
    });
    
    nextImg.addEventListener("click", () => {
        i++;
    
        if (i > max) {
            i = 0;
        }
    
        image.src = images[i];
    });

    var quantiteAdd = document.getElementById("quantiteAdd").innerHTML;
    console.log(quantiteAdd);

    function addQuantite(){
        console.log(quantiteAdd);
        quantiteAdd = Number(quantiteAdd) + 1;
    }

let quantite = 0;
const panier = [];

function addQuantite() {
    quantite++;
    document.getElementById("quantiteAdd").innerText = quantite;
}

function removeQuantite() {
    if (quantite > 0) {
        quantite--;
        document.getElementById("quantiteAdd").innerText = quantite;
    }
}

// Fonction pour ajouter un article au panier
function addToCart(pid, productName, price) {
    for (let i = 0; i < quantite; i++) {
        const item = {
            pid: pid,
            name: productName,
            price: price
        };
        panier.push(item);
    }
    // Réinitialiser la quantité à zéro après l'ajout au panier
    quantite = 0;
    document.getElementById("quantiteAdd").innerText = quantite;
}
    