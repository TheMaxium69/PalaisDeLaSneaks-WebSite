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
  <div class="container text-center">
    <div class="mx-auto border p-3" style="max-width: 50%;">
      <p class="text-center">Vous souhaitez revendre votre paire ? Contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimer et vous proposer le meilleur prix pour vous.</p>
      <a name="" id="" class="btn btn-primary underline" href="https://www.instagram.com/palais.de.la.sneaks/" role="button">Je revends ma paire !</a>
    </div>
  </div>

  <?php socialLink($page); ?>

</main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>