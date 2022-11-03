<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Castlevania</title>
</head>

<body>

  <!-- inicio container -->
  <!-- nav -->

  <nav class='navbar navbar-expand-lg navbar-dark bg-dark ifundo'>

    <div class="logo">
      <a href="/">
        <img width='300vw' src="img/logo.png">
      </a>
    </div>

    <!-- menu Hamburguer -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
    <div class="collapse navbar-collapse " id="nav-target">
      <ul class='nav  esquerda nave ml-auto'>
        <li class='nav-item '>
          <a class='nav-link' href="/">Inicio</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href="/jogo">Jogos</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href="">Descrição</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">

    @yield('content')

  </div> <!-- fim container -->
  <br>

  {{-- rodape --}}

  <footer class="rodape">
    <div class="col  meurodape">
      <a href="https://www.instagram.com/fprado2020/">Instagram</a>

      <p>02/11/<?php
      $hoje = date('Y');
      echo $hoje;
      ?>
      </p>

      <i>Dedicatoria ao professor Renam</i>
    </div>
  </footer>

  <!-- js bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>
