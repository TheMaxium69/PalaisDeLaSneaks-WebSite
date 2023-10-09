<?php include "app/app.php"; $page = 3; head($page); ?>

<body id="nettoyage"> <header> <?php navbar($page); ?> </header>

<main>
        <h1>Nettoyage</h1>
        <br>
        <br>
        <img src="https://static.nike.com/a/images/f_auto,cs_srgb/w_1920,c_limit/337f57b2-0272-4410-93c5-82c2c0f007a2/nettoyer-ses-chaussures-en-6%C2%A0%C3%A9tapes-faciles.jpg" alt="nettoyage">
        <div class="row d-flex justify-content-center">
            <div class="cartes-container">
                <div class="carte" data-title="Formule 1" data-description="Description de la formule 1">
                    <h2>Formule 1</h2>
                    <p>Description de la formule 1</p>
                </div>
            
                <div class="carte" data-title="Formule 2" data-description="Description de la formule 2">
                    <h2>Formule 2</h2>
                    <p>Description de la formule 2</p>
                </div>
            
                <div class="carte" data-title="Formule 3" data-description="Description de la formule 3">
                    <h2>Formule 3</h2>
                    <p>Description de la formule 3</p>
                </div>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
        <div class="carte-d"> <div class="carte-detail">
            <h2>Formule détaillée</h2>
            <p class="description"></p>
            <button type="button" class="btn btn-primary">je choisis celle-la !</button>
        </div>
        </div>
       

        </div>
        
    </main>



   
<script src="javascript/script.js"></script>

<footer> <?php footer($page); ?> </footer>
</body> </html>