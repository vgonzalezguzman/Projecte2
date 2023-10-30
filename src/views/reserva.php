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
    <a href="index.php" >
        <img src="../images/flecha.png" alt="Return" >
    </a>
</button>
<h3>Solicitud de reserva</h3>
<container>

<main> 
    <div class="info_apa">
        <img src="../images/casa1.jpg" alt="foto">
        <p>Nombre del apartamento</p>
        <p>Descripción del apartamento</p>
    </div>
</main>
<menu>
    <div class="info_reserva">
        <h4>Información de la reserva</h4>
        <div class="dates">
        <p>Fechas</p> <p>Modificar</p>
        </div>
        <div class="guests">
        <p>Número de personas</p> <p>Modificar</p>
        </div>
    </div>
    <div class="info_price">
        <h4>Información de pago</h4>
        <div class="price">
        <p>Precio por noche</p> <p>26€/noche</p>
        </div>
        <div class="service">
        <p>Comisión de la plataforma</p> <p>10€</p>
        </div>
        <div class="total">
        <p>Total</p> <p>51€</p>
        </div>
        <button class="pay">Pagar</button>
</menu>
</container>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>