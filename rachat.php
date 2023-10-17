<?php include "app/app.php";
$page = 6;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


  <main id="rachat">
    <h1 class="text-center m-5">Revendez votre paire !</h1>

    <div class="cardRevente">
      <div class="w-50 picture">
      </div>
      <div class="w-50 cardRight">
        <div class="text">
          <p>Vous souhaitez revendre votre paire ?</p>
           <p>Contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimer et vous proposer le meilleur prix pour vous.</p>
          <!-- <a name="" id="" class="btn btn-primary underline" href="https://www.instagram.com/palais.de.la.sneaks/" role="button">Je revends ma paire !</a> -->
          <button class="custom-btn btn-2">Revendre ma paire</button>
        </div>
    </div>
  </div>

  <?php socialLink($page); ?>

  </main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>