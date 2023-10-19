<?php include "app/app.php";
$page = 6;
head($page); ?>

<body class>
    <header> <?php navbar($page); ?> </header>


  <main id="rachat">
    <h1>Nous achetons vos paires au meilleur prix</h1>

    <div class="picture">
    </div>

    <div class="text">
      <h2>Vous souhaitez revendre votre paire ?</h2>
        <p>Contactez-nous directement sur notre messagerie Instagram, notre équipe se chargera d'estimer et vous proposer le meilleur prix pour vous.</p>
        <button class="custom-btn btn-2 uppercase btnVendre" onclick="window.location.href = 'nettoyage.php'">Je veux revendre ma paire</button>
      </div>
  <?php socialLink($page); ?>

  </main>









</body>






<footer> <?php footer($page); ?> </footer>

</html>