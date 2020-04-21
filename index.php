<!-- Este link traz o head -->
<?php require_once("inc/head.php"); ?>
<!-- Este link traz o header -->
<?php require_once("inc/header.php"); ?>
<!-- Este link chama o CSS -->
<link rel="stylesheet" href="estilo.css">

<!-- Código do Carrossel -->
<div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
    <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
    <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/3/36/Accadian_text.png">
    </div>
    <div class=" carousel-item">
      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTO_oldllPmXZsVr-Bq29R-7VEECb9laQqPspAoxh3Z2r_wWexr&usqp=CAU" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIY8Lw9hRiP-hZIZsqtaJ83M6je4gN31rz7O1w7iwjO7nAjawB&usqp=CAU">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próxima</span>
  </a>
</div>

<!-- Código dos cards -->
<!-- Cards X -->
<main class="container">
  <section id="catX" class="row">
    <h2 class="col-12 text-center text-info mt-6 mb-3">Categoria X</h2>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\cuneiform1.jpg">
        <div class="card-body">
          <h5 class="card-title">Curso de Hitita</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\Girl-writing-latin-on-bla-009.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Curso de Latim</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\grego.JPG">
        <div class="card-body">
          <h5 class="card-title">Curso de Grego</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Card Y -->
  <section id="catY" class="row">
    <h2 class="col-12 text-center text-info mt-6 mb-3">Categoria Y</h2>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\cursoHildegarda.png">
        <div class="card-body">
          <h5 class="card-title">Curso de Medieval</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\images.jpg">
        <div class="card-body">
          <h5 class="card-title">Curso de Patrologia</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets\imagensTemplate\leituras.jpg">
        <div class="card-body">
          <h5 class="card-title">Círculos de Leitura</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Este link traz o footer -->
<?php require_once("inc/footer.php"); ?>