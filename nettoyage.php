<?php include "app/app.php"; $page = 3; head($page); ?>

<body> <header> <?php navbar($page); ?> </header>

<main>

    <h1>Nettoyage</h1>
    <br>
    <br>
    <img src="https://static.nike.com/a/images/f_auto,cs_srgb/w_1920,c_limit/337f57b2-0272-4410-93c5-82c2c0f007a2/nettoyer-ses-chaussures-en-6%C2%A0%C3%A9tapes-faciles.jpg" alt="nettoyage">
<div class= "row d-flex justify-content-center">
    <div class="cartes-container">
    <div class="cartes-container">
            <div class="carte">
                <h2>Formule 1</h2>
                <p>Description de la formule 1</p>
            </div>
            
            <div class="carte">
                <h2>Formule 2</h2>
                <p>Description de la formule 2</p>
            </div>
            
            <div class="carte">
                <h2>Formule 3</h2>
                <p>Description de la formule 3</p>
            </div>
        </div>
        </div>
    </div>
    
</div>
<div class="carte-container">
    <div class="carte-detail hidden">
            <h2>Formule détaillée</h2>
            <p class="description"></p>
        </div>
</main>


   

<footer> <?php footer($page); ?> </footer>


<script src="javascript/script.js"></script>
</body> </html>