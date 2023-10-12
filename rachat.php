<?php include "app/app.php";
$page = 6;
head($page); ?>

<body id="rachat">
    <header> <?php navbar($page); ?> </header>


    <main>

    <h1 class="text-center underline">Revendez votre paire !</h1>
    <br>
    <br>
    <br>
    <p class="text-center">vous souhaitez revendre votre paire ? contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimé et vous proposez le meilleur prix pour vous<p>
    <div class="container text-center">
    <a name="" id="" class="btn btn-primary underline" href="#" role="button">je revends ma paire !</a>
  </div>

<?php socialLink($page); ?>

</main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>