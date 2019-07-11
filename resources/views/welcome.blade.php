@extends('template')

<!DOCTYPE html>
<html>
<head>
  <title>weichert Realtors</title>
  <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">

</head>
<body>
  <div id="agrupar">
  <header id="cabecera">


  <nav class= "navbar navbar-expand-sm bg-dark navbar-dark" >
    <button class="btn btn-warning" type="submit">Weichert|1-800-401</button>

    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Comprar</a>
      </li>
      <li class="navbar-nav">
        <a class="nav-link" href="#">Vende</a>
      </li>
      <li class="navbar-nav">
        <a class="nav-link" href="#">Alquilar</a>
      </li>
      <li class="navbar-nav">
       <a class="nav-link disabled" href="#">Hipoteca</a>
     </li>
      <li class="navbar-nav">
       <a class="nav-link " href="#">Unete a Weichert</a>
      </li>
    </ul>
  </nav>
    
  
 <article class="col-sm-12">
    
  <!-- Indicators -->
  <div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src={{asset('css/img/casa1.jpg') }} alt="nuestra cede"  class="rounded"width="100%" height="250px" >
    </div>
    <div class="carousel-item">
      <img src={{asset('css/img/imagen2.jpg')}} class="rounded" alt="Cortes"width="100%" height="250px" >
    </div>
    <div class="carousel-item">
      <img src={{('css/img/imagen3.jpg')}} alt="cortes de barba"  class="rounded" width="100%" height="250px">
    </div>
  </div> 
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

   </article>

    </h1>
  </header>

  <nav class= "navbar navbar-expand-sm bg-dark navbar-dark">
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-warning" type="submit">Search</button>
  </form>    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Compra</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Alquilar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">listado reciente</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">Precios reducidos</a>
    </li>
   </ul>
   </nav><br>

   <section class="row">
 
<article>
  <div class="row">
    <div id="parrafo1" class=" col-xs-12 col-sm-6 col-md-3">
      <figure>
        <img src={{('css/img/imagen4.jpg')}} width="250px" height="250px"><br>
      </figure>
      <figcaption> DOGWOOD</figcaption>
    </div>

    <div id="parrafo2" class=" col-xs-12 col-sm-6 col-md-3">
       <figure>
       <img src={{('css/img/imagen5.jpg')}} width="250px" height="250px"><br>
      </figure>
      <figcaption>LITTLETON RD</figcaption>
    
    </div>

    <div id="parrafo3" class=" col-xs-12 col-sm-6 col-md-3">
      <figure>
      <img src={{('css/img/images6.jpg')}} width="250px" height="250px"><br>
    </figure><figcaption>FOXWOOR DR</figcaption>
    </div>

    <div id="parrafo4" class=" col-xs-12 col-sm-6 col-md-3">
      <figure>
      <img src={{('css/img/images7.jpg')}} width="250px" height="250px"><br>
    </figure><figcaption>Avenida Grannis</figcaption>
    </div>


  </div>
</article>
<article>
  <div class="row">
    <div id="parrafo1" class=" col-xs-12 col-sm-6 col-md-3">
      <figure>
        <img src={{('css/img/images8.jpg')}} width="250px" height="250px"><br>
      </figure>
      <figcaption>Countrywood Drive</figcaption>
      
    </div>

    <div id="parrafo2" class=" col-xs-12 col-sm-6 col-md-3">
       <figure>
       <img src={{('css/img/images9.jpg')}}
       width="250px" height="250px"><br>
      </figure>
      <figcaption> ROSEDALE AVE</figcaption>
      
    
    </div>

    <div id="parrafo3" class=" col-xs-12 col-sm-6 col-md-3">
      
      <figure>
      <img src={{('css/img/images10.jpg')}} width="250px" height="250px"><br>
    </figure><figcaption>CAMINO DE MONTAÑA</figcaption>
      
    </div>

    <div id="parrafo4" class=" col-xs-12 col-sm-6 col-md-3">
      
      <figure>
      <img src={{('css/img/imagen11.jpg')}} width="250px" height="250px"><br>
    </figure><figcaption>GREENWOOR RD</figcaption>
      
    </div>


  </div>
</article>

</section><br>


<footer>
  <hr>
  <div class="row">
  <div id="contactos" class=" col-xs-12 col-sm-6 col-md-3">
  <h4>Avisos Legales</h4>
Tels: (571) 794-2334<br>
(57) 316-470 7727<br></div>
<div id="email" class=" col-xs-12 col-sm-6 col-md-3">
Email: serviciocliente@weichert.com<br></div>
<div id="redes" class=" col-xs-12 col-sm-6 col-md-3">
<h4>Siguenos</h4>
Facebook: @fabriweichert<br>
Instagram: @fabriweichert<br>
</div>
<h4>Sede</h4>
Calle 72N83-05
 </div>
</footer>
</body>
</html>