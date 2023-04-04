<?php
    require("view/templates/header.php");
?>
<br>

<div class="container-sm border-bottom">
    <h1 class="text-center "> + PRODUCTOS</h1>
</div>

<!-- Promociones -->

<div id="carouselId" class="carousel slide bg-dark" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active  ">
            <img src="public/img/base-cara-grasosas.png" class="w-50 d-block centrar " alt="First slide">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h3>PROMOS</h3>
                <a name="" id="" class="btn btn-primary" href="public/promociones/index.php" role="button">Ver promociones</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/img/cosmeticos-base-para-cara-reseca.png" class="w-50 d-block centrar" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="holder.js/900x500/auto/#666:#444/text:Third slide" class="w-100 d-block centrar" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h3>Title</h3>
                <p>Description</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!--Productos Màs vendidos-->
<div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Title</h3>
        <p class="card-text">Text</p>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Title</h3>
        <p class="card-text">Text</p>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Title</h3>
        <p class="card-text">Text</p>
      </div>
    </div>
  </div>
  
</div>


<?php 
require("view/templates/footer.php");
?>