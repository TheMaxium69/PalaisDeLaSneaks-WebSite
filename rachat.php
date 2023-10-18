<?php include "app/app.php";
$page = 6;
head($page); ?>

<body class>
    <header> <?php navbar($page); ?> </header>


  <main id="rachat">
  <h1 style="background-color:#dc3545; color: #ffffff; text-transform: uppercase; font-weight: bold; text-align: center;padding:10px;font-size:24px;margin: 0">Nous achetons vos paires au meilleur prix</h1>
    <div class="cardRevente">
    </div>
    <br>

      <div>
        <div class="text" style="margin: auto;width: 50%;text-align: center" >
          <h2>Vous souhaitez revendre votre paire ?</h2>
           <p>Contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimer et vous proposer le meilleur prix pour vous.</p>
           <a href="https://www.instagram.com/palais.de.la.sneaks/" class="btn btn-lg" title="Conditions générales de rachat" style="postion:relative;background-color:#b6050f; text-transform:uppercase; color:#fff;border-radius: 5px; font-size: 14px; font-weight:bold">Je veux revendre ma paire</a>        </div>
    </div>
  <?php socialLink($page); ?>

  </main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>