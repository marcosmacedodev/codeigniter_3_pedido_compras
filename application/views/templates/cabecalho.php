<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo site_url("categorias"); ?>">Categorias</a>
        <a class="nav-link" href="<?php echo site_url("produtos"); ?>">Produtos</a>
        <a class="nav-link" href="<?php echo site_url("pedidos"); ?>">Pedidos</a>
        <a class="nav-link" href="<?php echo site_url("enderecos"); ?>">Endere&ccedil;os</a>
        <a class="nav-link" href="<?php echo site_url("estados"); ?>">Estados</a>
        <a class="nav-link" href="<?php echo site_url("cidades"); ?>">Cidades</a>
        <a class="nav-link" href="<?php echo site_url("clientes"); ?>">Clientes</a>
        <a class="nav-link" href="<?php echo site_url("pagamentos"); ?>">Pagamentos</a>
      </div>
    </div>
  </div>
</nav>