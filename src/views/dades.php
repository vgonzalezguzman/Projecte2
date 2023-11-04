<!DOCTYPE html>
<html>
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
            padding: 100px;
            width: 320px;
            text-align: center;
        }

        .custom-input {
            width: 100%;
            padding: 8px; /* Reducido el padding para hacerlo más pequeño */
            margin: 10px 0; /* Margen de 10px arriba y abajo */
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
            font-size: 24px; /* Aumentada la fuente del título */
            margin-bottom: 20px; /* Mayor margen inferior para separarlo del formulario */
        }
    </style>
</head>
<body>
    <div class="custom-form">
        <h1 class="custom-heading">Bienvenido <?=$dades["Nom"];?>!</h1>

        <form action="index.php" method="post">
        <input type="hidden" name="r" value="dodades">

            <input class="custom-input" type="text" name="name" value="<?=$dades["Nom"];?>" placeholder="Nombre" required>
            <input class="custom-input" type="text" name="lastname" value="<?=$dades["Cognoms"];?>" placeholder="Apellidos" required>
            <input class="custom-input" type="phone" name="phone" value="<?=$dades["Telefon"];?>" placeholder="Apellidos" required>
            <input class="custom-input" type="email" name="email" value="<?=$dades["Email"];?>" placeholder="Apellidos" required>
            <input class="custom-input" type="password" name="password" value="<?=$dades["pass"];?>" placeholder="Apellidos" required>

            <button class="custom-btn" type="submit">Guardar Cambios</button>
        </form>
            <a href="index.php?r=">
                <button class="custom-btn" type="submit">Home</button>
            </a>
    </div>
</body>
</html>
