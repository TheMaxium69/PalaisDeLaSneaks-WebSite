<?php include "app/app.php"; $page = 86; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>

<div class="container alert alert-light">
    <h2>FILTRE</h2>
    <br>
        <input id="search" type="text" class="form-control"  placeholder="Search for name and email......">
    <br>

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody id="table">
    <tr>
      <td>Erik</td>
      <td>erik@example.com</td>
    </tr>
    <tr>
      <td>Maik</td>
      <td>maik@example.com</td>
    </tr>
    <tr>
      <td>Mahmudul</td>
      <td>mahmudul@example.com</td>
    </tr>
    <tr>
      <td>Hossain</td>
      <td>hossain@example.com</td>
    </tr>
    <tr>
      <td>Rabby</td>
      <td>rabby@example.com</td>
    </tr>
    <tr>
      <td>Thomas</td>
      <td>thomas@example.com</td>
    </tr>
    <tr>
      <td>Malik</td>
      <td>malik@example.com</td>
    </tr>
  </tbody>
</table>

<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</main>

<script src="javascript/filtre.js"></script>
</body> </html>