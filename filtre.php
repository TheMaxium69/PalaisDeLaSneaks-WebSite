<?php include "app/app.php"; $page = 86; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>

<div class="container alert alert-light">
    <h2>FILTRE</h2>
    <br>
        <input id="search" type="text" class="form-control"  placeholder="Search for product and description......">
    <br>

<table class="table">
  <thead>
    <tr>
      <th>Product</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody id="table">

  </tbody>


</main>

<script src="javascript/filtre.js"></script>
</body> </html>