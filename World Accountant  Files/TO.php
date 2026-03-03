<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "Regist";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);





if (isset($_POST['Registro'])) {
    $Nombre = $_POST['Nombre'];
     $Apellido = $_POST['Apellido'];
      $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
     $Edad = $_POST['Edad'];
    $Nacimiento = $_POST['Nacimiento'];

    $insertar = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Correo, Edad, Nacimiento) VALUES ('$Nombre', '$Apellido', '$Telefono', '$Correo', '$Edad', '$Nacimiento')";

    if (mysqli_query($enlace, $insertar)) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . mysqli_error($enlace);
    }
}

mysqli_close($enlace);
?>

 <!DOCTYPE html>
<!-- saved from url=(0061)file:///C:/Users/mareli%20g/Downloads/jadoo/public/index.html -->
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cecy Store | Tienda online</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.3333333333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-both,.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-both,:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2.5em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1.25em}.svg-inline--fa.fa-stack-2x{height:2em;width:2.5em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.svg-inline--fa .fa-primary{fill:var(--fa-primary-color,currentColor);opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa .fa-secondary{fill:var(--fa-secondary-color,currentColor);opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-primary{opacity:.4;opacity:var(--fa-secondary-opacity,.4)}.svg-inline--fa.fa-swap-opacity .fa-secondary{opacity:1;opacity:var(--fa-primary-opacity,1)}.svg-inline--fa mask .fa-primary,.svg-inline--fa mask .fa-secondary{fill:#000}.fad.fa-inverse{color:#fff}

   
        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 100%;
            perspective: 1000px;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .card-back {
            transform: rotateY(180deg);
        }
    



  </style>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="./Cecy Store _ Tienda online_files/theme.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="background-image: none;">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="C:\Users\mareli g\Downloads\jadoo\Captura_de_pantalla_2024-10-19_202922-removebg-preview.png" height="100" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Categorias</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#destination">Productos</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">¿Quienes somos?</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">Nuestro equipo</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#login">Login</a></li>
                       <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" href="file:///E:/Cecytienda/proyeto/nuevo.html">Tienda</a></li>
                        
                            <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#!" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!"></a></li>
                                <li><a class="dropdown-item" href="#!"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
      <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="./Cecy Store _ Tienda online_files/cecytoooo-removebg-preview (1).png" alt="hero-header"></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <font color="Green"><h4 class="fw-bold text-danger mb-3">Descubre articulos para tu hogar</h4></font>
        <marquee direction="up" direction="down"> <h1 class="hero-title">Bienvenidos</h1></marquee>
              <p class="mb-4 fw-medium"><sub>🐧</sup>Gracias por <u>visitar</u> nuestra <mark>página web</mark>, aquí podrás conocer más sobre lo que hacemos y los productos que fabricamos.<br class="d-none d-xl-block">Estamos para acompañarte y asegurarnos de que no tengas ningún inconveniente con el uso de nuestros productos. Nuestro objetivo es brindarte una experiencia excepcional desde el primer momento en que nos eliges<sup>🐧</sup>.<br class="d-none d-xl-block"></p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="file:///C:/Users/mareli%20g/Downloads/jadoo/public/index.html#!" role="button">Saber mas</a>
                <div class="w-100 d-block d-md-none"></div><a href="file:///C:/Users/mareli%20g/Downloads/jadoo/public/index.html#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img src="./Cecy Store _ Tienda online_files/play.svg" width="15" alt="paly"></span></a><span class="fw-medium">Play Demo</span>
                <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="./Cecy Store _ Tienda online_files/_lhdhL4UDIo.html" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<style>
      
       

      
        .efecto-neon-Moises {
            font-family: Arial, sans-serif;
            font-size: 4em;
            color: #000000; 
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #fff, 
                0 0 15px #fff, 
                0 0 20px #ec3200, 
                0 0 30px #ec3200, 
                0 0 40px #ec3200;
        }


        .rotar {
    /* Rotar la imagen 45 grados */
    transform: rotate(90deg);
    /* Opcional: ajustar el origen de la rotación */
    transform-origin: center;
    /* Opcional: añadir transición suave */
    transition: transform 0.5s;
}

/* Efecto al pasar el ratón sobre la imagen */
.rotar:hover {
    transform: rotate(40deg);
}
.rotar1 {
    /* Rotar la imagen 45 grados */
    transform: rotate(180deg);
    /* Opcional: ajustar el origen de la rotación */
    transform-origin: center;
    /* Opcional: añadir transición suave */
    transition: transform 0.5s;
}

/* Efecto al pasar el ratón sobre la imagen */
.rotar1:hover {
    transform: rotate(90deg);
}
.rotar2 {
    /* Rotar la imagen 45 grados */
    transform: rotate(270deg);
    /* Opcional: ajustar el origen de la rotación */
    transform-origin: center;
    /* Opcional: añadir transición suave */
    transition: transform 0.5s;
}

/* Efecto al pasar el ratón sobre la imagen */
.rotar2:hover {
    transform: rotate(90deg);
}
.rotar3 {
    /* Rotar la imagen 45 grados */
    transform: rotate(360deg);
    /* Opcional: ajustar el origen de la rotación */
    transform-origin: center;
    /* Opcional: añadir transición suave */
    transition: transform 0.5s;
}

/* Efecto al pasar el ratón sobre la imagen */
.rotar3:hover {
    transform: rotate(90deg);
}
    </style>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">CATEGORIAS </h5>

            <h3  class="efecto-neon-Moises">Ofrecemos los mejores productos</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="C:\Users\mareli g\Downloads\jadoo\Captura_de_pantalla_2024-10-19_210216-removebg-preview.png" width="75" alt="Service" class="rotar"/>
                  <h4 class="mb-3">Decoracion de regalo navideño</h4>
                  <p class="mb-0 fw-medium">De las mejores decoraciones para decorar tu casa en temporada de navidad</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="C:\Users\mareli g\Downloads\jadoo\Captura_de_pantalla_2024-10-19_211434-removebg-preview.png" width="75" alt="Service" class="rotar1" />
                  <h4 class="mb-3">Potavelas navideñas </h4>
                  <p class="mb-0 fw-medium">Decora con un bonito portavela cualquier espacio</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="C:\Users\mareli g\Downloads\jadoo\pngtree-gold-star-design-with-light-in-the-center-png-image_5652451-removebg-preview.png" width="75" alt="Service" class="rotar2"/>
                  <h4 class="mb-3">Estrellas con luces para decoracion</h4>
                  <p class="mb-0 fw-medium">Decora la entrada de tu hogar con una gran estrella navideña</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="C:\Users\mareli g\Downloads\jadoo\Captura_de_pantalla_2024-10-19_212420-removebg-preview.png" width="75" alt="Service" class="rotar3" />
                  <h4 class="mb-3">Decoracion navideña</h4>
                  <p class="mb-0 fw-medium">Decora cualquier espacio con el espiritu navideño</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <section class="pt-5" id="destination">
    <div class="container">
        <div class="mb-7 text-center">
            <h3 class="text-secondary">Nuestros productos</h3>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="img1.jpeg" alt="Centro de mesa de Nochebuena">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Centro de mesa de Nochebuena</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Una hermosa decoración para tu mesa en Nochebuena.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="img2.jpeg" alt="Nochebuena con luces">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Nochebuena con luces</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Una espectacular decoración iluminada para tus celebraciones.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="img3.jpeg" alt="Nochebuena de luces">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Nochebuena de luces</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Luces que dan vida a tu decoración navideña.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="C:\Users\mareli g\Downloads\jadoo\img8.jpeg" alt="Centro de mesa de reno">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Portavelas</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un encantador centro de mesa para tu hogar.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="img5.jpeg" alt="Portavelas">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Centro de mesa de reno</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un práctico adorno para cualquier parte de tu hogar.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=" card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="C:\Users\mareli g\Downloads\jadoo\img14.jpeg" alt="Adorno de árbol">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Adorno de regalo</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un hermoso adorno de regalo para tu hogar de Navidad.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                 <tr>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="C:\Users\mareli g\Downloads\jadoo\img11.jpeg" alt="Centro de mesa de Nochebuena">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Estrella gigante con luces</h3>
                                        <span class="fs-1 fw-medium"></span>
                                       
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un bonito adorno para decorar el exterior de tu hogar.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="C:\Users\mareli g\Downloads\jadoo\img10.jpeg" alt="Nochebuena con luces">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Estrella doble gigante con luces</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un bonito adorno para decorar el exterior de tu hogar.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="card-img-top" src="C:\Users\mareli g\Downloads\jadoo\img7.jpeg" alt="Nochebuena de luces">
                                    <div class="card-body">
                                        <h3 class="text-secondary fw-medium">Centro de mesa con campana</h3>
                                        <span class="fs-1 fw-medium"></span>
                                        
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <h4>Descripción</h4>
                                    <p>Un práctico adornon de centro de mesa en tu hogar.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- CSS -->
<style>
  


/* Estilos para la tabla */
.table {
    width: 100%; /* Ancho completo */
    height: 350%;
    border-collapse: collapse; /* Colapsar bordes */
    margin: none;
}

.table td {
    width: 33.33%; /* Ancho igual para cada celda */
    padding: 10px; /* Espacio entre celdas */
    border: none; /* Borde para cada celda */
}

/* Estilos para las tarjetas */
.card {
    width: 100%; /* Ancho completo */
    height: 250px; /* Alto fijo */
    margin: 0 auto; /* Centrar las tarjetas */
    border: none; /* Quitar borde */
    border-radius: 10px; /* Curvar esquinas */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
}

.flip-card {
    background-color: transparent; /* Fondo transparente */
    perspective: 1000px; /* Perspectiva para el efecto de flip */
}

.flip-card-inner {
    position: relative; /* Posición relativa para el flip */
    width: 100%; /* Ancho completo */
    height: 150%; /* Alto completo */
    transition: transform 0.6s; /* Transición para el flip */
    transform-style: preserve-3d; /* Estilo 3D para el flip */
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg); /* Rotar al pasar el mouse */
}

.flip-card-front,
.flip-card-back {
    position: absolute; /* Posición absoluta para el front y back */
    width: 100%; /* Ancho completo */
    height: 100%; /* Alto completo */
    backface-visibility: hidden; /* Ocultar la parte posterior */
}

.flip-card-front {
    transform: rotateY(0deg); /* Inicializar la rotación en 0 grados */
}

.flip-card-back {
    transform: rotateY(180deg); /* Rotar 180 grados para el back */
}

/* Estilos para la imagen */
.card-img-top {
    width: 100%; /* Ancho completo */
    height: 150px; /* Alto fijo */
    object-fit: cover; /* Ajustar imagen */
    border-radius: 10px 10px 0 0; /* Curvar esquinas */
}
</style>

<!-- JavaScript -->
<script>
    // Agregar evento de clic a los botones de agregar al carrito
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Aquí puedes agregar la logica para agregar el producto al carrito
            console.log('Agregar al carrito');
        });
    });
</script>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
<section id="booking">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4 text-start">
                    <h5 class="text-secondary">"¿Somos el futuro de México?"</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">¿Quienes somos?</h3>
                </div>
                <div class="d-flex align-items-start mb-5">
                    <div class="cube-container">
                        <div class="cube bg-primary">
                            <div class="face front">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Siempre aprendiendo" alt="Estudiantes" /height="100" width="100">
                            </div>
                            <div class="face back">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Siempre aprendiendo" height="100" width="100">
                            </div>
                            <div class="face left">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Comprometidos" /height="100" width="100">
                            </div>
                            <div class="face right">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Unidos" /height="100" width="100">
                            </div>
                            <div class="face top">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Juntos" /height="100" width="100">
                            </div>
                            <div class="face bottom">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="Creciendo" /height="100" width="100">
                            </div>
                            <div class="face">
                                <img src="C:\Users\mareli g\Downloads\jadoo\cecyy.jpeg" alt="mmm" /height="100" width="100">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h5 class="text-secondary fw-bold fs-0">Estudiantes del CECYTEM Plantel La Paz</h5>
                        <p>Los cuales nos esforzamos todos los días por ser mejores.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-5">
                    <div class="cube-container">
                        <div class="cube bg-danger">
                            <div class="face front">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Programadores" /height="100" width="100">
                            </div>
                            <div class="face back">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Innovando" /height="100" width="100">
                            </div>
                            <div class="face left">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Desarrollando" /height="100" width="100">
                            </div>
                            <div class="face right">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Aprendiendo" /height="100" width="100">
                            </div>
                            <div class="face top">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Creciendo" /height="100" width="100">
                            </div>
                            <div class="face bottom">
                                <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="Comprometidos" /height="100" width="100">
                            </div>
                            <div class="face">
                            <img src="C:\Users\mareli g\Downloads\jadoo\progranadores.png" alt="amm" /height="100" width="100">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h5 class="text-secondary fw-bold fs-0">Programadores</h5>
                        <p>Nuestro propósito en mentem es poder demostrar nuestras habilidades en programación a través del trabajo en equipo.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-5">
                    <div class="cube-container">
                        <div class="cube bg-info">
                            <div class="face front">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Creadores" height="100" width="100"/>
                            </div>
                            <div class="face back">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Diseñando"height="100" width="100" />
                            </div>
                            <div class="face left">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Mostrando"height="100" width="100" />
                            </div>
                            <div class="face right">
                                <img src ="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Listos"height="100" width="100" />
                            </div>
                            <div class="face top">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Comprometidos"height="100" width="100" />
                            </div>
                            <div class="face bottom">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="Creciendo"height="100" width="100" />
                            </div>
                            <div class="face ">
                                <img src="C:\Users\mareli g\Downloads\jadoo\pagina.jpeg" alt="sss"height="100" width="100" />
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h5 class="text-secondary fw-bold fs-0">Creadores de una página web</h5>
                        <p>Hemos creado esta página web sobre una tienda, en la que cualquier persona puede acceder gratuitamente y ver nuestro trabajo.</p>
                    </div>
                </div>
            </div>
           <div class="col-lg-6 d-flex justify-content-center align-items-start">
              <div class="card position-relative shadow" style="max-width: 370px;">
                <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="./Cecy Store _ Tienda online_files/bg.png" style="max-width:550px;" alt="shape"></div>
                <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="C:\Users\mareli g\Downloads\jadoo\cecytem-logo.png" alt="booking">
                  <div>
                    <h5 class="fw-medium">Colegio de Estudios Cientificos y Tecnologicos del Estado de Mexico</h5>
                    <p class="fs--1 mb-3 fw-medium">|Plantel La Paz </p>
                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img src="./Cecy Store _ Tienda online_files/leaf.svg" alt=""></span><span class="btn icon-item"> <img src="./Cecy Store _ Tienda online_files/map.svg" alt=""></span><span class="btn icon-item"> <img src="./Cecy Store _ Tienda online_files/send.svg" alt=""></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center mt-n1"><img class="me-3" src="./Cecy Store _ Tienda online_files/building.svg" width="18" alt="building"><span class="fs--1 fw-medium">5 integrantes</span></div>
                      <div class="show-onhover position-relative">
                        <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px;border-radius:18px;">
                          <div class="card-body py-3">
                            <div class="d-flex">
                              <div style="margin-right: 10px"> <img class="rounded-circle" src="./Cecy Store _ Tienda online_files/favorite-placeholder.png" width="50" alt="favorite"></div>
                              <div>
                                <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                <h5 class="fw-medium mb-3">Trip to rome</h5>
                                <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                                <div class="progress" style="height: 6px;">
                                  <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn"> <img src="./Cecy Store _ Tienda online_files/heart.svg" width="20" alt="step"></button>
                      </div>
                    </div>
                  </div>
        </div>
    </div>

</section>

<style type="text/css">
    .cube-container {
        margin-right: 20px;
    }

    .cube {
        position: relative;
        width: 100px;
        height: 100px;
        transform-style: preserve-3d;
        transition: transform 0.5s;
    }

    .face {
        position: absolute;
        width: 100px;
        height: 100px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        background-color: #333;
        border-radius: 10px;
    }

    .front {
        transform: translateZ(50px);
    }

    .back {
        transform: rotateY(180deg) translateZ(-50px);
    }

    .left {
        transform: rotateY(-90deg) translateZ(50px);
    }

    .right {
        transform: rotateY(90deg) translateZ(50px);
    }

    .top {
        transform: rotateX(90deg) translateZ(50px);
    }

    .bottom {
        transform: rotateX(-90deg) translateZ(50px);
    }
</style>

<script>
    const cubes = document.querySelectorAll('.cube');

    function getRandomRotation() {
        return `rotateX(${Math.random() * 360}deg) rotateY(${Math.random() * 360}deg)`;
    }

    function rotateCubes() {
        cubes.forEach((cube) => {
            cube.style.transform = getRandomRotation();
        });
    }

    setInterval(rotateCubes, 1000);
</script>
      <!-- <section> close ============================-->
      <!-- ============================================-->



<br><br><br><br>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <section id="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="mb-8 text-start">
          <h5 class="text-secondary">Creadores</h5>
          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Contáctanos</h3>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="pe-7 ps-5 ps-lg-0">
          <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-label="Testimonial 0" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-label="Testimonial 1"></button>
              <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-label="Testimonial 2"></button>
              <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="3" aria-label="Testimonial 3"></button>
              <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="4" aria-label="Testimonial 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img class="rounded-circle fit-cover" src="D:\jadoo\orlando.jpeg" height="65" width="65" alt="">
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4"></p>
                    <h5 class="text-secondary">Orlando Setien Galindo</h5>
                    <p class="fw-medium fs--1 mb-0">Tel: 5614720694</p>
                    <p class="fw-medium fs--1 mb-0">Correo: osetiengalindo367@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img class="rounded-circle fit-cover" src="D:\jadoo\erick.jpeg" height="65" width="65" alt="">
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4"></p>
                    <h5 class="text-secondary">Camberos Lopez Erick</h5>
                    <p class="fw-medium fs--1 mb-0">Tel: 5525593089</p>
                    <p class="fw-medium fs--1 mb-0">Correo: erickcamberos02@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img class="rounded-circle fit-cover" src="D:\jadoo\mare.jpeg" height="65" width="65" alt="">
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb -4"></p>
                    <h5 class="text-secondary">Rosa Mareli Mora Guevara</h5>
                    <p class="fw-medium fs--1 mb-0">Tel: 5529986595</p>
                    <p class="fw-medium fs--1 mb-0">Correo: guevaramareli4@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img class="rounded-circle fit-cover" src="D:\jadoo\moy.jpeg" height="65" width="65" alt="">
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4"></p>
                    <h5 class="text-secondary">Santiago Moises Salazar Varela</h5>
                    <p class="fw-medium fs--1 mb-0">Tel: 5638951965</p>
                    <p class="fw-medium fs--1 mb-0">Correo: Santiagomoises2402@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img class="rounded-circle fit-cover" src="D:\jadoo\pp.jpeg" height="65" width="65" alt="">
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4"></p>
                    <h5 class="text-secondary">Alejandro lopez Gomez</h5>
                    <p class="fw-medium fs--1 mb-0">Tel: 5510972271</p>
                    <p class="fw-medium fs--1 mb-0">Correo: alejandrolopezgom84@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
           
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================-->
<!-- <section> begin ============================-->

<!-- <section> close ============================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    
        <script src="./Cecy Store _ Tienda online_files/popper.min.js.descarga"></script>
        <script src="./Cecy Store _ Tienda online_files/bootstrap.min.js.descarga"></script>
        <script src="./Cecy Store _ Tienda online_files/is.min.js.descarga"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="./Cecy Store _ Tienda online_files/all.min.js.descarga"></script>
        <script src="./Cecy Store _ Tienda online_files/theme.js.descarga"></script>

        <link href="./Cecy Store _ Tienda online_files/css2" rel="stylesheet">
  
<section id="login" style="padding: 5rem 0;">
    


<style>
       

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #00d9ff;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        form table {
            width: 100%;
            border-collapse: collapse;
        }

        form table tr {
            line-height: 2;
        }

        form table td {
            padding: 8px;
        }

        form table input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #000000;
            outline: none;
        }

        form table input[type="submit"], form table input[type="reset"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #00d9ff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form table input[type="submit"]:hover, form table input[type="reset"]:hover {
            background-color: #007f9f;
        }

        hr {
            border: none;
            height: 2px;
            background-color: green;
            margin: 20px 0;
        }
    </style>
     

    <h1>REGISTRO</h1>

    <form action="#" name="Regist" method="post">

        <h3>Datos</h3>
        <hr>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" placeholder="Nombre"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="Apellido" placeholder="Apellido"></td>
            </tr>
            <tr>
                <td>Número de teléfono:</td>
                <td><input type="number" name="Telefono" placeholder="Telefono"></td>
            </tr>
            <tr>
                <td>Correo electrónico:</td>
                <td><input type="email" name="Correo" placeholder="Correo"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="number" name="Edad" placeholder="Edad"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:</td>
                <td><input type="text" name="Nacimiento" placeholder="Nacimiento"></td>
            </tr>
        </table>
        <br>
        <center>
            <input type="submit" name="Registro" value="Enviar">
            <input type="reset" name="Limpiar" value="Limpiar">
        </center>
    </form></section>
</body></html>
