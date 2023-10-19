<!DOCTYPE html>
<!-- Coding By Danish Laeeq - patreon.com/danishlaeeq -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Price Range Slider | Danish Laeeq</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Import Google Font - Poppins */

        /* * {
            box-sizing: border-box;
        } */


        .wrapperPrice {
            width: 400px;
            background: #fff;
            border-radius: 10px;
            padding: 20px 25px 40px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        }

        .price-inputPrice {
            width: 100%;
            display: flex;
            margin: 30px 0 35px;
        }

        .price-inputPrice .fieldPrice {
            display: flex;
            width: 100%;
            height: 45px;
            align-items: center;
        }

        .fieldPrice input {
            width: 100%;
            height: 100%;
            outline: none;
            font-size: 19px;
            margin-left: 12px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #999;
            -moz-appearance: textfield;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .sliderPrice {
            height: 5px;
            position: relative;
            background: #ddd;
            border-radius: 5px;
        }

        .sliderPrice .progress {
            height: 100%;
            left: 0%;
            right: 0%;
            position: absolute;
            border-radius: 5px;
            background: #17a2b8;
        }

        .range-inputPrice {
            position: relative;
        }

        .range-inputPrice input {
            position: absolute;
            width: 100%;
            height: 5px;
            top: -5px;
            background: none;
            pointer-events: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            height: 17px;
            width: 17px;
            border-radius: 50%;
            background: #17a2b8;
            pointer-events: auto;
            -webkit-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }

        input[type="range"]::-moz-range-thumb {
            height: 17px;
            width: 17px;
            border: none;
            border-radius: 50%;
            background: #17a2b8;
            pointer-events: auto;
            -moz-appearance: none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <div class="filtrePrix">
        <div class="wrapperPrice">
            <div class="price-inputPrice">
                <div class="fieldPrice">
                    <input type="number" class="input-min" value="0">
                </div>
                <div class="fieldPrice">
                    <input type="number" class="input-max" value="100">
                </div>
            </div>
            <div class="sliderPrice">
                <div class="progress"></div>
            </div>
            <div class="range-inputPrice">
                <input type="range" class="range-min" min="0" max="100" value="0" step="10">
                <input type="range" class="range-max" min="0" max="100" value="100" step="10">
            </div>
        </div>
    </div>

    <script>
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
    </script>
</body>

</html>