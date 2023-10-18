var messageNoProduct = document.querySelector("#noProduct");
messageNoProduct.style.display = "none";

var cardProduct = document.querySelectorAll("#tableTEST div.card.card__one");

var searchInput = document.querySelector("#searchInput");

searchInput.addEventListener("input", updateValue);

function updateValue() {
    var nbrProd = 0;
    cardProduct.forEach((card) => {
        if(card.getAttribute("style") !== "display: none;"){
            nbrProd++;
        }
    });
    console.log(nbrProd);
    if(nbrProd == 0){
        messageNoProduct.style.display = "block";
    }else{
        messageNoProduct.style.display = "none";
    }
}

