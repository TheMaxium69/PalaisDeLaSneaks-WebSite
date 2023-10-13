$("#searchInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableTEST .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

// FILTRE PRICE 

var lowerSlider = document.querySelector('#lower');
var  upperSlider = document.querySelector('#upper');

document.querySelector('#two').value=upperSlider.value;
document.querySelector('#one').value=lowerSlider.value;

var  lowerVal = parseInt(lowerSlider.value);
var upperVal = parseInt(upperSlider.value);

upperSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    if (upperVal < lowerVal + 4) {
        lowerSlider.value = upperVal - 4;
        if (lowerVal == lowerSlider.min) {
        upperSlider.value = 4;
        }
    }
    document.querySelector('#two').value=this.value
};

lowerSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);
    if (lowerVal > upperVal - 4) {
        upperSlider.value = lowerVal + 4;
        if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
        }
    }
    document.querySelector('#one').value=this.value
};

var cardProduct = document.querySelectorAll('div[name="cardProdcut"]');
var priceProduct = document.querySelectorAll('p[name="priceProduct"]');

function showValMin(newVal){
    for (let i = 0; i < cardProduct.length; i++) {
        var split = priceProduct[i].innerHTML.split(' ');
        var price = Number(split[0]);
        if(price < newVal){
            cardProduct[i].style.display = "none";
        }else{
            cardProduct[i].style.display = "block";
        }
    }
}

function showValMax(newVal){
    for (let i = 0; i < cardProduct.length; i++) {
        var split = priceProduct[i].innerHTML.split(' ');
        var price = Number(split[0]);
        if(price > newVal){
            cardProduct[i].style.display = "none";
        }else{
            cardProduct[i].style.display = "block";
        }
    }
}


var marqueP  = document.querySelectorAll('p[name="marqueProduct"]');

function selectGroup(groupValue){
    for (let i = 0; i < cardProduct.length; i++) {
        if('marque'+groupValue == 'marque0'){
            cardProduct[i].style.display = "block";
        }else if('marque'+groupValue == marqueP[i].classList[3]){
            cardProduct[i].style.display = "block";
        }else{
            cardProduct[i].style.display = "none";
        }
    }
}