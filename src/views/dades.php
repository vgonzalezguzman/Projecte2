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

        .custom-heading {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php require "loginButton.php"; ?>    

    <div class="custom-form">
        <h1 class="custom-heading">Bienvenido <?=$dades["Nom"];?>!</h1>

        <form action="index.php" method="post">
        <input type="hidden" name="r" value="dodades">

            <input class="custom-input" type="text" name="name" value="<?=$dades["Nom"];?>" placeholder="Nombre" required>
            <input class="custom-input" type="text" name="lastname" value="<?=$dades["Cognoms"];?>" placeholder="Apellidos" required>
            <input class="custom-input" type="phone" name="phone" value="<?=$dades["Telefon"];?>" placeholder="Teléfono" required>
            <input class="custom-input" type="email" name="email" value="<?=$dades["Email"];?>" placeholder="Correo Electrónico" required>
            <input class="custom-input" type="password" name="password" value="<?=$dades["pass"];?>" placeholder="Contraseña" required>

            <button class="custom-btn" type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</html>
