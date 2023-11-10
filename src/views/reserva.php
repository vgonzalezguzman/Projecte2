<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>
<style>
   
*{
    font-family: 'Roboto', sans-serif;
}
main{grid-area: main;
width: auto;
margin-right: 50px;
height: 100%;
border-right: 2px solid grey;
border-radius: 1px; 
}
menu{grid-area: menu;
width: auto;}

container {
            display: grid;
            grid-template-areas:
                'main menu';
            grid-gap: 10px;
            background-color: #fff;
            padding: 10px;
            margin: 50px auto;
            width: 90%; /* Ajusta el ancho del contenedor */
            grid-template-columns: 1fr 1fr; 
        }

img {
    width: 50%;
    height: 50%;
} 

.info_apa{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 10px;
}

.info_reserva{
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    
    
    border-bottom: 1px solid black;
    padding: 10px;
}

.info_price{
    display: flex;
    flex-direction: column;

    padding: 10px;
}

.dates,.guests,.price,.service,.total{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
}


.pay{
    width: 20%;
    margin: 10px auto;
    padding: 10px;
    border-radius: 5px;
    background-color: #FF5A5F;
    color: white;
    border: none;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    align-self: center;
}

h3{
    text-align: center;
    margin: 20px;
}


.return{
    position: absolute;
    top: 10px;
    left: 10px;
    border: none;
    background-color: transparent;
    cursor: pointer;
    outline: none;
    
}

.return:hover{
    transform: scale(1.2);
    transition: 0.5s;

}
@media (max-width: 768px) {
    container {
        grid-template-areas:
            'main'
            'menu';
            display: grid;
            grid-template-columns: 1fr;

    }

    main{
        border-right: none;
        margin-right: 0;

    }

    menu{
        border-top: 2px solid grey;
        padding-top: 10px;
        margin: 0;
        padding-left: 0;
    }

   
}

</style>
<body>
    <button type="button" class="return">      
        <a href="index.php">
            <img src="../images/flecha.png" alt="Return">
        </a>
    </button>
    <h3>Solicitud de reserva</h3>
    <container>
        <main> 
            <div class="info_apa">
                <img src="<?= $apartament["URL"]; ?>" alt="foto">
                <p><?= $apartament["Titol"]; ?></p>
                <p><?= $apartament["Descripcio"]; ?></p>
            </div>
        </main>
        <menu>
            <div class="info_reserva">
                <h4>Información de la reserva</h4>
                <div class="dates">
                    <p>Desde el</p> <p><?php echo $inicio; ?></p>
                    <p>a</p> <p><?php echo $final; ?></p>
                </div>
                <div class="guests">
                    <p>Número de personas</p>
                    <p><?php echo $numP; ?></p>
                </div>
            </div>
            <div class="info_price">
                <h4>Información de pago</h4>
                <div class="price">
                    <p>Precio por noche</p> <p><?php echo $noche; ?></p>
                </div>
                <div class="service">
                    <p>Comisión de la plataforma</p> <p>10€</p>
                </div>
                <div class="total">
                    <p>Precio Total</p> <p><?php echo $price; ?></p>
                </div>
                
                <!-- Formulario de reserva -->
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="doreserva">
                    <input type="hidden" name="ID_Apartament" value="<?= $apartament["ID_Apartament"]; ?>">
                    <input type="hidden" name="cancelacion" value="<?= $apartament["Dies_Cancelacio"]; ?>">
                    <input type="hidden" name="check_in" value="<?= $inicio; ?>">
                    <input type="hidden" name="check_out" value="<?= $final; ?>">
                    <input type="hidden" name="precio_total" value="<?= $price; ?>">
                    
                    <!-- Agrega aquí más campos del formulario si es necesario -->

                    <button class="pay" type="submit">Confirmar Reserva</button>
                </form>
            </div>
        </menu>
    </container>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>