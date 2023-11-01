<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/web.css" rel="stylesheet">

    <script src="../../js/app.js" defer></script>
    <title>Document</title>
</head>
<body>

    <div class="dropdown d-flex position-absolute position-xs- top-0 end-0  d-none d-xl-flex">
        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <ul class="dropdown-menu">
            <?php

use Emeset\Response;

                if (!$logged) {
                    // Mostrar botones si no has inicado sesion
                    echo '<li><a class="dropdown-item" href="index.php?r=login">Inicia sessió</a></li>';
                    echo '<li><a class="dropdown-item" href="index.php?r=register">Registra\'t</a></li>';
                } else {
                    // Mostrar botones si has iniciado sesion
                    echo '<li><a class="dropdown-item" href="index.php?r=apartament">Afegir departament</a></li>';
                    echo '<li><a class="dropdown-item" href="index.php?r=dologout">Tancar sessió</a></li>';
                }
            ?>
        </ul>
      </div>
    </div>

    <div class="d-flex d-none d-sm-flex justify-content-center">
        <div id="carouselMostrari" class="col-8 carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/casa3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/casa2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/casa1.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMostrari" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMostrari" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid p5 text-center d-flex justify-content-center">
        <div class="col-xl-4 col-8">
        <form class="form">
      <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
              <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
      </button>
      <input class="input" placeholder="Search" required="" type="text">
      <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
      </button>
  </form>
 
        </div>
        <div class="btn-group">
        <button type="button" id="dropdown_menu" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <div class="container_menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
</button>
  <div class="dropdown-menu">
    <!-- Contenido del menú -->
    <a class="dropdown-item" href="#">Opción 1</a>
    <a class="dropdown-item" href="#">Opción 2</a>
    <a class="dropdown-item" href="#">Opción 3</a>
  </div>
</div>
    </div>
    

        
    <?php require "divApartaments.php"; ?>
        
    </div>

    


    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
  
</body>
</html>