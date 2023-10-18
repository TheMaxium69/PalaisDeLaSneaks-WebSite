<?php include "app/app.php";
$page = 6;
head($page); ?>

<body class>
    <header> <?php navbar($page); ?> </header>


  <main id="rachat">
  <h1 style="background-color:#dc3545; color: #ffffff; text-transform: uppercase; font-weight: bold; text-align: center;padding:10px;font-size:24px;margin: 0">Nous achetons vos paires au meilleur prix</h1>
    <div class="cardRevente">
    </div>

      <div>
        <div class="text">
          <h2>Vous souhaitez revendre votre paire ?</h2>
           <p>Contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimer et vous proposer le meilleur prix pour vous.</p>
          <button class="custom-btn btn-2">Revendre ma paire</button>
        </div>
    </div>
  <?php socialLink($page); ?>

  </main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>