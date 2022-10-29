@extends('layouts.master')
@section('content')


<!-- conteudo carousel -->
<div class="row justify-content-center">
  <div class='col-auto border'>
    <!-- culuna central -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item ">
          <img width="900px" class="d-block " src="img/conteudo1.jpg" alt="Primeiro Slide">
        </div>
        <div class="carousel-item active">
          <img width="900px" class="d-block" src="img/conteudo2.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img width="900px" class="d-block" src="img/conteudo3.jpg" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</div>


@stop