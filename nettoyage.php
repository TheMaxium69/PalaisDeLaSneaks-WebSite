<?php include "app/app.php";
$page = 3;
head($page); ?>

<body id="nettoyage">
    <header> <?php navbar($page); ?> </header>

    <main>
        <h1 class="mt-5">Service de Nettoyage</h1>
        <img src="assets/sneakers.jpg" alt="nettoyage">
        <div class="row d-flex justify-content-center">
            <div class="cartes-container">
                <div class="carte" data-title="Clean Premium" data-description="Description de la formule 1">
                    <h4 id="itemFormule">Clean Premium</h4>
                </div>

                <div class="carte" data-title="Clean Medium" data-description="Description de la formule 2">
                    <h4 id="itemFormule">Clean Medium</h4>
                </div>

                <div class="carte" data-title="Clean Standard" data-description="Description de la formule 3">
                    <h4 id="itemFormule">Clean Standard</h4>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="carte-d">
                <div class="carte-detail">
                    <p class="description"></p>
                    <button type="button" class="btn btn-primary">Je choisis celle-la !</button>
                </div>
            </div>

            <!-- CARROUSEL -->

            <!-- / CARROUSEL -->

            <?php socialLink($page); ?>

    </main>




    <script src="javascript/script.js"></script>

    <footer> <?php footer($page); ?> </footer>
</body>

</html>