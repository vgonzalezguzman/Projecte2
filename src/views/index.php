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
          <li><a class="dropdown-item" href="index.php?r=login">Inicia sessió</a></li>
          <li><a class="dropdown-item" href="index.php?r=register">Registra't</a></li>
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
      <input class="input" placeholder="Type your text" required="" type="text">
      <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
      </button>
  </form>
 
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
    

    <div id="mostraCases" class="ms-0 d-flex align-items-center row row-cols-xl-3 row-cols-1 row-cols-md-2 flex-lg-row justify-content-center col-12">
        <div class=" d-flex mt-5 flex-column col  rounded-4 p-0 align-items-center justify-content-center" >
            <div class="card  ms-0  col-11 min-height-400" >
                <div id="pis1_small" class="portadaCasa col-12 carousel slide">
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="../images/casa1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/casa2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/casa3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#pis1_small" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pis1_small" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body"  data-bs-toggle="modal" data-bs-target="#modalExample" >
                    <div class="d-flex row p-3">
                        <p id="localitzacio" class="col-12">
                            C/ Arquitecte Pelai Martínez
                        </p>
                        <p id="superficie" class="col-6">
                            40 m2
                        </p>
                        <p id="Ocupants" class="col-6">
                            2 Ocupants
                        </p>
                        <p id="preu" class="col-12">
                            60€ nit
                        </p>  
                    </div>
                </div>

            </div>
            <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable custom-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalExampleLabel">Apa1</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border: none; background-color: transparent;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <div id="pis1" class="portadaCasa col-12 carousel slide">
                            <div class="carousel-inner rounded-4">
                                <div class="carousel-item active">
                                    <img src="../images/casa1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/casa2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/casa3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#pis1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#pis1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="d-flex row p-3">
                                <p id="localitzacio" class="col-12">
                                    C/ Arquitecte Pelai Martínez
                                </p>
                                <p id="superficie" class="col-6">
                                    40 m2
                                </p>
                                <p id="Ocupants" class="col-6">
                                    2 Ocupants
                                </p>
                                <p id="preu" class="col-12">
                                    60€ nit
                                </p>  
                            </div>
                            <p>Qué ofereix aquest espai?</p>
                            <div class="container">
                                <div class="services-container">
                                    <div class="service-item">Aire Acondicionado</div>
                                    <div class="service-item">Terraza</div>
                                    <div class="service-item">Piscina</div>
                                    <div class="service-item">Cocina</div>
                                    <div class="service-item">Calefacción</div>
                                    <div class="service-item">Wifi</div>
                                    <div class="service-item">TV</div>
                                    <div class="service-item">Lavadora</div>
                                    <div class="service-item">Plancha</div>
                                    <div class="service-item">Secador de pelo</div>
                                    <div class="service-item">Champú</div>
                                    <div class="service-item">Aparcamiento</div>
                                </div>
                            </div>

                            <div class="calendar">
                                <label for="start">Desde:</label>
                                <input type="date" id="start">
                            </div>
                            <div class="calendar">
                                <label for="end">Hasta:</label>
                                <input type="date" id="end">
                            </div>

                            <button class="fechas">Buscar</button>

                            <label for="guests">Número de personas:</label>
                            <input type="number" id="guests" name="guests" min="1" max="6" placeholder="Número de personas">
                        </div>
                    </div>
                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <div data-tooltip="Preu:123€" class="button">
                            <div class="button-wrapper">
                                <div class="text">Reservar</div>
                                    <span class="icon">
                                    <a href="index.php?r=reserva" >
                                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                        </svg>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
             
            </div>
        </div>
    </div>

    <div class="bottomapartament">
      <form action="index.php" method="post">
          <input type="hidden" name="r" value="apartament">
          <button type="submit" class="btn btn-primary">Añadir apartamento</button>
      </form>
    </div>
    <div id="map"></div>


    <script src="../../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
  
</body>
</html>