@extends('layouts.master')
@section('content')


  <!-- conteudo carousel -->
  <div class="row justify-content-center ">
    <div class='col-auto d-none d-md-block mb-4 margin'>
      <!-- culuna central -->
      <div class="quadro p-2 ">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img width="900px" class="d-block " src="img/conteudo1.jpg" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <!-- texto da imagem 1-->
                <div class='quadro1'>
                  <h5>Castlevania: Nocturne | Netflix anuncia animação focada em Richter Belmont.</h5>
                </div>
              </div><!-- texto da imagem 1 fim-->
            </div>
            <div class="carousel-item">
              <img width="900px" class="d-block " src="img/conteudo2.jpg" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <!-- texto da imagem 2-->
                <div class='quadro1'>
                  <h5>Dracula Vlad Tepes.</h5>
                  <p>O verdadeiro nome é Adrian Farenheit Tepes.</p>
                </div>
              </div><!-- texto da imagem 2 fim-->
            </div>
            <div class="carousel-item">
              <img width="900px" class="d-block " src="img/conteudo3.jpg" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <!-- texto da imagem 3-->
                <div class='quadro1'>
                  <h5>Servos do dracula.</h5>
                  <p>Isaac e Hector.</p>
                </div>
              </div><!-- texto da imagem 3 fim -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- conteudo2 --}}

  <div class="row conteudo2 justify-content-center">
    <div class="col-md-4 mt-2 mb-2 imgc2">
      <img class="mt-2" width="100%" src="img/conteudo2.jpg">
      <br><br>
      <p>
        Originalmente um humano chamado Mathias Cronqvist, Drácula caiu na loucura após a morte de sua primeira esposa e
        se tornou um vampiro imortal graças aos poderes da Pedra Carmesim. Com seus poderes sombrios, ele construiu um
        exército de criaturas e sua fortaleza, Castlevania.
      </p>
      <a href="">leia mais ...</a>
    </div>

    <div class="col-md-4 mt-2 mb-2  ml-2 mr-2 imgc2">
      <img class="mt-2" width="100%" src="img/conteudo3.jpg">
      <br><br>
      <p>
        Hector teve uma infância difícil. Ele nasceu filho de um alquimista. Desde cedo, ele descobriu que os animais
        gravitavam em sua direção, tanto animais de dia como animais de noite.
      </p>
      <p>
        Isaac e Hector eram dois dos maiores generais do Conde Drácula, pois eram os únicos dois humanos capazes de fazer
        a forja demoníaca que criava demônios inocentes.
      </p>
      <a href="https://castlevania.fandom.com/pt-br/wiki/Isaac">Lei mais sobre o Isaac</a>

      <a href="https://castlevania.fandom.com/pt-br/wiki/Hector">Lei mais sobre o Hector</a>
    </div>
    <div class="col-md-2 mt-2 mb-2 d-none d-md-block bg-light">

      <div class="row justify-content-center ">
        <div class='col-auto  margin'>
          <!-- culuna central -->
          <div id="carousel2" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="https://unisanta.br/Graduacao/Odontologia"><img width="200px" height="300px" class="d-block "
                    src="img/anuncio1.jpeg" alt="Primeiro Slide"></a>
              </div>
              <div class="carousel-item">
                <a href="https://unisanta.br/Graduacao/Odontologia"> <img width="200px" height="300px" class="d-block "
                    src="img/anuncio2.jpeg" alt="Segundo Slide"></a>
              </div>
              <div class="carousel-item">
                <a href="https://unisanta.br/Graduacao/Odontologia"><img width="200px" height="300px" class="d-block "
                    src="img/anuncia3.jpg" alt="Terceiro Slide"></a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- mais um conteudo3  https://getcssscan.com/css-box-shadow-examples --}}


@stop
