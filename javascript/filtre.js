var nameSneakers = document.querySelectorAll(".nameSneakers");
var cardSneakers = document.querySelectorAll(".card.card__one");
var noCard = document.querySelector("#noProduct");

$("#searchInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    var count = 0;
    $("#tableTEST .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    $("#tableTEST .card").each(function(key) {
      if ( this.style.display == "" ) {
        count++;
      }
      if ( count == 0 ){
        noCard.style.display = "block";
      }else{
        noCard.style.display = "none";
      }
    })
  });


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



// FILTRE MARQUE
(function($) {
  var CheckboxDropdown = function(el) {
    var _this = this;
    this.isOpen = false;
    this.areAllChecked = false;
    this.$el = $(el);
    this.$label = this.$el.find('.dropdown-label');
    this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
    this.$inputs = this.$el.find('[type="checkbox"]');
    
    this.onCheckBox();
    
    this.$label.on('click', function(e) {
      e.preventDefault();
      _this.toggleOpen();
    });
    
    this.$checkAll.on('click', function(e) {
      e.preventDefault();
      _this.onCheckAll();
    });
    
    this.$inputs.on('change', function(e) {
      _this.onCheckBox();
    });
  };
  
  CheckboxDropdown.prototype.onCheckBox = function() {
    this.updateStatus();
  };
  
  CheckboxDropdown.prototype.updateStatus = function() {
    console.log('OK');
    var checked = this.$el.find(':checked');
    
    this.areAllChecked = false;
    this.$checkAll.html('Tout cocher');
    
    if(checked.length <= 0) {
      this.$label.html('Choix des marques');
    }
    else if(checked.length === 1) {
      this.$label.html(checked.parent('label').text());
    }
    else if(checked.length === this.$inputs.length) {
      this.$label.html('All Selected');
      this.areAllChecked = true;
      this.$checkAll.html('Tout décocher');
    }
    else {
      this.$label.html(checked.length + ' Selected');
    }
  };
  
  CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
    if(!this.areAllChecked || checkAll) {
      this.areAllChecked = true;
      this.$checkAll.html('Uncheck All');
      this.$inputs.prop('checked', true);
    }
    else {
      this.areAllChecked = false;
      this.$checkAll.html('Check All');
      this.$inputs.prop('checked', false);
    }
    
    this.updateStatus();
  };
  
  CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
    var _this = this;
    
    if(!this.isOpen || forceOpen) {
       this.isOpen = true;
       this.$el.addClass('on');
      $(document).on('click', function(e) {
        if(!$(e.target).closest('[data-control]').length) {
         _this.toggleOpen();
        }
      });
    }
    else {
      this.isOpen = false;
      this.$el.removeClass('on');
      $(document).off('click');
    }
  };
  
  var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
  for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
    new CheckboxDropdown(checkboxesDropdowns[i]);
  }
})(jQuery);


function activeFilter() {

    var divFilter = document.getElementById("filter");

    isDisplay = divFilter.getAttribute("data-display");

    if (isDisplay == 0) {
        //on l'affiche

        divFilter.style.display = "unset";
        divFilter.setAttribute("data-display","1")

    } else {
        //on l'elenleve

        divFilter.style.display = "none";
        divFilter.setAttribute("data-display","0")
    }


}

const rangeInput = document.querySelectorAll(".range-inputPrice input"),
                priceInput = document.querySelectorAll(".price-inputPrice input"),
                range = document.querySelector(".sliderPrice .progress");
            let priceGap = 10;

            priceInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minPrice = parseInt(priceInput[0].value),
                        maxPrice = parseInt(priceInput[1].value);

                    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                        if (e.target.className === "input-min") {
                            rangeInput[0].value = minPrice;
                            range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                        } else {
                            rangeInput[1].value = maxPrice;
                            range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                        }
                    }
                });
            });

            rangeInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minVal = parseInt(rangeInput[0].value),
                        maxVal = parseInt(rangeInput[1].value);

                    if (maxVal - minVal < priceGap) {
                        if (e.target.className === "range-min") {
                            rangeInput[0].value = maxVal - priceGap;
                        } else {
                            rangeInput[1].value = minVal + priceGap;
                        }
                    } else {
                        priceInput[0].value = minVal;
                        priceInput[1].value = maxVal;
                        range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                        range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                    }
                });
            });