<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head>
    <title>Bienvenido <?=$dades["Nom"];?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px; /* Reducido el padding para hacerlo más pequeño */
            width: 320px;
            text-align: center;
        }

        .custom-input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .custom-btn {
            background-color: #ff385c;
            border: none;
            border-radius: 4px;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        .custom-btn:hover {
            background-color: #d83254;
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
  color: grey;
}

.signin a:hover {
  text-decoration: underline grey;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
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
  background-color: grey;
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

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:auto;
    margin-top: 5%;
}

button{
  background-color:  #767676;
}
    </style>
</head>
<body>
<?php require "loginButton.php"; ?>    
<container>
  <form action="index.php" method="post" class="form">
  <input type="hidden" name="r" value="dodades">
  <p class="title">Editar dades</p>
  <div class="flex">
        <label>
            <input required="" placeholder="" name="lastname" value="<?=$dades["Cognoms"];?>"  type="text" class="input">
            <span>Apellidos</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" name="email" type="email" value="<?=$dades["Email"];?>" class="input">
        <span>Email</span>
    </label> 
    <label>
        <input required="" placeholder="" name="phone" type="tel" value="<?=$dades["Telefon"];?>" class="input">
        <span>Teléfono</span>
    </label> 
    <label>
        <input required="" placeholder="" name="cardnumber" aria-label="cardnumber" type="cardnumber" value="<?=$dades["Tarjeta"];?>" class="input">
        <span>Tarjeta de crédito</span>
    </label> 
    <label>
        <input required="" placeholder="" name="pass" value="<?=$dades["pass"];?>" type="password" class="input">
        <span>Contraseña</span>
    </label>
    <button class="submit">Guardar cambios</button>
</form>
            </container>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</html>
