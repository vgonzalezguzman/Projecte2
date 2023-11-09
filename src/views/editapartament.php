<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../css/apartament.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Editar Apartamento</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../../js/app.js" defer > </script>
    <style>
        .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 650px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);

}

.title {
  font-size: 28px;
  color: green;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: green;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: green;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: green;
}

.signin a:hover {
  text-decoration: underline green;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
  width: 100%;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: green;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}

.precio{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  
}

.precio input{
    width: 100%;
    padding: 10px 10px 20px 10px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 10px;
}

.precio label{
    position: relative;
    width: 100px;
  margin: 8px;
}

container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:auto;
    margin-top: 5%;
}
button{
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border: none;
    outline: none;
    background-color: green;
    color: #fff;
    font-size: 16px;
    transform: .3s ease;
    margin-top: 10px;
}
button:hover {
  background-color: rgb(56, 90, 194);
}

a{
    text-decoration: none;
    color: #fff;
}
    </style>
</head>
<?php require "loginButton.php"; ?>    
<body>
<container>
<form action="index.php" method="post" enctype="multipart/form-data" class="form">
<input type="hidden" name="r" value="doeditapartament">
<input type="hidden" name="ID_Apartament" value="<?= $apartament["ID_Apartament"]; ?>">

    <p class="title">Edita el teu apartament</p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" name="title" class="input" value="<?= $apartament["Titol"]; ?>">
            <span>Título</span>
        </label>

        <label>
            <input required="" placeholder="" name="descripcion" type="text" class="input" value="<?= $apartament["Descripcio"]; ?>">
            <span>Descripción</span>
        </label>
    </div>  
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" name="Carrer" class="input" value="<?= $apartament["Carrer"]; ?>">
            <span>Dirección</span>
        </label>

        <label>
            <input required="" placeholder="" name="postal" type="text" class="input" value="<?= $apartament["Adr_Postal"]; ?>">
            <span>Código Postal</span>
        </label>
    </div> 
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text"  name="lat" class="input" value="<?= $apartament["Latitud"]; ?>">
            <span>Latitud</span>
        </label>

        <label>
            <input required="" placeholder="" name="lon" type="text" class="input"  value="<?= $apartament["Longitud"]; ?>">
            <span>Longitud</span>
        </label>
    </div>
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text"  name="habitaciones" class="input" value="<?= $apartament["N_Habitacions"]; ?>">
            <span>Número de habitaciones</span>
        </label>

        <label>
            <input required="" placeholder="" name="metros" type="text" class="input"  value="<?= $apartament["Metres_Cuadrats"]; ?>">
            <span>Metros Cuadrados</span>
        </label>
    </div>
    <div class="flex" id="preciodiv">
        <label id="precio">
            <input required="" placeholder=""  type="text" name="TALT" class="input"  value="<?= $apartament["Preu_TAlt"]; ?>">
            <span>Precio Temporada alta</span>
        </label>
        </div>
       
    <div class="flex" id="preciodiv">
        <label id="precio">
            <input required="" placeholder="" type="text" name="TBaja" class="input" value="<?= $apartament["Preu_TBaixa"]; ?>">
            <span>Precio Temporada baja</span>
        </label>
        </div>
      
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" name="cancelacion" class="input"  value="<?= $apartament["Dies_Cancelacio"]; ?>">
            <span>Dias de cancelación</span>
        </label>

        <label>
            <input required="" placeholder="" type="file" name="images[]" multiple class="input">
            <span>Añadir imagenes</span>
        </label>
    </div>
    <div class="mb-3">
                            <label for="pass" class="form-label">Servicios</label>
                            <div class="">
                        <?php
                        // Supongamos que $serv es el array multidimensional con los servicios
                        foreach ($serv as $service) {
                            echo '<div class="form-check form-check-inline col-md-3 flex-wrap align-items-center" >';
                            echo '<input class="form-check-input" type="checkbox"  name="servicesSelected[]" id="servicesSelected' . $service["ID_Servei"] . '" value="servicesSelected' . $service["ID_Servei"] . '">';
                            echo '<label class="form-check-label" for="servicesSelected' . $service["ID_Servei"] . '">';
                            echo $service["Nom_Servei"];
                            echo '</label>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="flex">
    <button class="submit">Aceptar</button>
    <button class="" ><a href="index.php?r=gestioapartament"> Cancelar</a></button>
    </div>
</form>
            </container>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
