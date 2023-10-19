<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../public/css/web.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="dropdown d-flex position-absolute top-0 end-0  d-none d-xl-flex">
        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="index.php?r=login">Inicia sessió</a></li>
        </ul>
      </div>
    </div>

    <div class="d-flex d-none d-sm-flex justify-content-center">
        <div id="carouselMostrari" class="col-8 carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/alley-1690053_1280.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/greece-2824694_1280.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/palma-596178_1280.jpg" class="d-block w-100" alt="...">
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
            <form id="searchBar">
                <div class="input-group">
                    <input type="text" class="form-control rounded-4" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
              </form>
        </div>
    </div>
    
    <div id="mostraCases" class="ms-0 d-flex align-items-center row row-cols-xl-3 row-cols-1 row-cols-md-2 flex-lg-row justify-content-center col-12">
        <div class="outlined d-flex mt-5 col-11 flex-column col border border-1 rounded-4 p-0 bg-secondary bg-opacity-25">
            <div id="pis1" class="portadaCasa col-12 carousel slide">
                <div class="carousel-inner rounded-4">
                  <div class="carousel-item active">
                    <img src="./images/greece-2824694_1280.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/palma-596178_1280.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/alley-1690053_1280.jpg" class="d-block w-100" alt="...">
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

    <div id="footer" class="fixed-bottom container d-flex align-items-center justify-content-center col-12">
        <div class="outlined col-xs-12 col-md-8 d-xl-none d-flex align-items-center justify-content-center">
            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Inicia sessió</a></li>
            </ul>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>