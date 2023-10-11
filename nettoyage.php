<?php include "app/app.php";
$page = 3;
head($page); ?>

<body id="nettoyage">
    <header> <?php navbar($page); ?> </header>

    <main>
        <h1 class="mt-5">Service de Nettoyage</h1>

        <img id="imgPremium" class="" src="assets\sneakers.png" alt="nettoyage">
        <img id="imgMedium" class="hiddenNett" src="assets\sneakers.png" alt="nettoyage">
        <img id="imgStandard" class="hiddenNett" src="assets\sneakers.png" alt="nettoyage">

        <br><br>

        <div class="topcoat-button-bar d-flex justify-content-center">
            <div class="topcoat-button-bar__item">
                <button onclick="nettoyageChange('Premium')" class="topcoat-button-bar__button" id="Premium">Clean Premium</button>
            </div>
            <div class="topcoat-button-bar__item">
                <button onclick="nettoyageChange('Medium')" class="topcoat-button-bar__button" id="Medium">Clean Medium</button>
            </div>
            <div class="topcoat-button-bar__item">
                <button onclick="nettoyageChange('Standard')" class="topcoat-button-bar__button" id="Standard">Clean Standard</button>
            </div>
        </div>

        <br><br>

        <div class="card">
            <div id="textPremium" class="card-body">
                <h5 class="card-title">Clean Premium</h5>
                <p class="card-text">PremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremium</p>
                <p class="card-text">PremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremium</p>
                <p class="card-text">PremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremiumPremium</p>
            </div>
            <div id="textMedium" class="card-body hiddenNett">
                <h5 class="card-title">Clean Medium</h5>
                <p class="card-text">MediumMediumMediumMediumMediumMediumMediumMediumMediumMediumMedium</p>
                <p class="card-text">MediumMediumMediumMediumMediumMediumMediumMediumMediumMediumMedium</p>
                <p class="card-text">MediumMediumMediumMediumMediumMediumMediumMediumMediumMediumMedium</p>
            </div>
            <div id="textStandard" class="card-body hiddenNett">
                <h5 class="card-title">Clean Standard</h5>
                <p class="card-text">StandardStandardStandardStandardStandardStandardStandardStandardStandard</p>
                <p class="card-text">StandardStandardStandardStandardStandardStandardStandardStandardStandard</p>
                <p class="card-text">StandardStandardStandardStandardStandardStandardStandardStandardStandard</p>
            </div>
        </div>

        <style>
            .hiddenNett {
                display: none;
            }
        </style>

        <script>
            var imgPremium = document.querySelector("#imgPremium");
            var imgMedium = document.querySelector("#imgMedium");
            var imgStandard = document.querySelector("#imgStandard");

            var textPremium = document.querySelector("#textPremium");
            var textMedium = document.querySelector("#textMedium");
            var textStandard = document.querySelector("#textStandard");

            function nettoyageChange($name) {
                switch ($name) {
                    case 'Premium':
                        imgPremium.classList.remove("hiddenNett");
                        imgMedium.classList.add("hiddenNett");
                        imgStandard.classList.add("hiddenNett");

                        textPremium.classList.remove("hiddenNett");
                        textMedium.classList.add("hiddenNett");
                        textStandard.classList.add("hiddenNett");
                        break;
                    case 'Medium':
                        imgMedium.classList.remove("hiddenNett");
                        imgPremium.classList.add("hiddenNett");
                        imgStandard.classList.add("hiddenNett");

                        textMedium.classList.remove("hiddenNett");
                        textPremium.classList.add("hiddenNett");
                        textStandard.classList.add("hiddenNett");
                        break;
                    case 'Standard':
                        imgStandard.classList.remove("hiddenNett");
                        imgPremium.classList.add("hiddenNett");
                        imgMedium.classList.add("hiddenNett");

                        textStandard.classList.remove("hiddenNett");
                        textPremium.classList.add("hiddenNett");
                        textMedium.classList.add("hiddenNett");
                        break;
                    default:
                        break;
                }
            }
        </script>


        <?php socialLink($page); ?>

    </main>




    <script src="javascript/script.js"></script>

    <footer> <?php footer($page); ?> </footer>
</body>

</html>