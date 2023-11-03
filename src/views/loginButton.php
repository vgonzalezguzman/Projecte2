<div class="dropdown d-flex position-absolute position-xs- top-0 end-0  d-none d-xl-flex">
        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <ul class="dropdown-menu">
            <?php

                if (!$logged) {
                    // Mostrar botones si no has inicado sesion
                    echo '<li><a class="dropdown-item" href="index.php?r=login">Inicia sessió</a></li>';
                    echo '<li><a class="dropdown-item" href="index.php?r=register">Registra\'t</a></li>';
                } else {
                    // Mostrar botones si has iniciado sesion
                    echo '<li><a class="dropdown-item" href="index.php?r=apartament">Afegir departament</a></li>';
                    echo '<li><a class="dropdown-item" href="index.php?r=llistaReservaUsuari">Les teves reserves</a></li>';
                    echo '<li><a class="dropdown-item" href="index.php?r=dades">Dades</a></li>'; 
                    echo '<li><a class="dropdown-item" href="index.php?r=dologout">Tancar sessió</a></li>';
                }
            ?>
        </ul>
      </div>
    </div>