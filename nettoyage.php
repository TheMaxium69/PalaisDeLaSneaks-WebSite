<?php include "app/app.php";
$page = 3;
head($page); ?>

<body id="nettoyage">
    <header> <?php navbar($page); ?> </header>

    <main>
        <h1 class="text-center mt-5 bold">Service de Nettoyage</h1>

        <img id="imgPremium" class="hiddenNett" src="assets/cleanPremium.jpg" alt="nettoyage">
        <img id="imgMedium" class="hiddenNett" src="assets/cleanMedium.jpg" alt="nettoyage">
        <img id="imgStandard" class="" src="assets/cleanStandard.jpg" alt="nettoyage">

        <br><br>

        
        <div id="sectionNettoyage" class="card mb-3">
            <div class="topcoat-button-bar d-flex justify-content-center">
                <div class="topcoat-button-bar__item">
                    <button onclick="nettoyageChange('Standard')" class="custom-btn btn-2" id="Standard">Standard</button>
                </div>
                <div class="topcoat-button-bar__item">
                    <button onclick="nettoyageChange('Medium')" class="custom-btn btn-2" id="Medium">Medium</button>
                </div>
                <div class="topcoat-button-bar__item">
                    <button onclick="nettoyageChange('Premium')" class="custom-btn btn-2" id="Premium">Premium</button>
                </div>
            </div>
            <div id="textPremium" class="card-body hiddenNett">
                <h3>Clean Premium</h3>
                <p>Pour le choix de cette formule, nous vous proposons :</p>
                <div class="w-25 mx-auto">
                    <ul>
                        <li>Lacets</li>
                        <li>Insole (semelle intérieure)</li>
                        <li>Midsole</li>
                        <li>Semelle</li>
                        <li>Surface</li>
                    </ul>
                </div>
                <button class="custom-btn btn-2">Choisir cette formule</button>
            </div>
            <div id="textMedium" class="card-body hiddenNett">
                <h3>Clean Medium</h3>
                <p>Pour le choix de cette formule, nous vous proposons :</p>
                <div class="w-25 mx-auto">
                    <ul>
                        <li>Lacets</li>
                        <li>Midsole</li>
                        <li>Surface</li>
                    </ul>
                </div>
                <!-- <a name="" id="" class="btn btn-primary underline" href="https://calendly.com/d/4r6-2z4-dn6/reservation-nettoyage" role="button">je choisis cette formule !</a> -->
                <button class="custom-btn btn-2">Choisir cette formule</button>
            </div>
            <div id="textStandard" class="card-body">
                <h3>Clean Standard</h3>
                <p>Pour le choix de cette formule, nous vous proposons :</p>
                <div class="w-25 mx-auto">
                    <ul>
                        <li>Lacets</li>
                        <li>Surface</li>
                    </ul>
                </div>
                <!-- <a name="" id="" class="btn btn-primary underline" href="https://calendly.com/d/4r6-2z4-dn6/reservation-nettoyage" role="button">je choisis cette formule !</a> -->
                <button class="custom-btn btn-2">Choisir cette formule</button>

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