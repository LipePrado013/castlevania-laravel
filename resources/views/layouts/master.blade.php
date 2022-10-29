<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Castlevania</title>
</head>

<body>

  <div class="container-fluid">
    <!-- inicio container -->
    <!-- nav -->
    <nav class='navbar navbar-expand-md navbar-dark bg-dark ifundo'>

      <div class=" ">
        <img width='300vw' src="img/logo.png">
      </div>

      <!-- menu Hamburguer -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--  -->
      <div class="collapse navbar-collapse border" id="nav-target">
        <ul class='nav border esquerda'>
          <li class='nav-item'>
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

    @yield('content')

  </div> <!-- fim container -->




  <!-- js bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>