<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Alberto Camacho Sampedro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Hoja de estilo-->
    <link rel="stylesheet" href="{{ url('/homepage_style/app.css') }}">
    <!--Importar tipografía-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <title>Registro - Laravel Transfers</title>
</head>
<body>
    <!--Barra de navegación superior-->
    <div class="topnav">
        <a href="/#home" class="navbuttons">HOME</a>
        <a href="/#info" class="navbuttons">INFORMACION</a>
        <a href="/#about" class="navbuttons">SOBRE NOSOTROS</a>
        <a href="/login" class="profile"><img src="profile.png" alt="Perfil"></img></a>
    </div>

    <!--Form de registro-->
    <div class="regin">
        <div class="form_container">
            <form class="form" action="pdte">
                <p class="tittle">Crear cuenta nueva</p>
                <input type="name" class="input" placeholder="Nombre"><br>
                <input type="surname1" class="input" placeholder="Primer Apellido"><br>
                <input type="surname2" class="input" placeholder="Segundo Apellido"><br>
                <input type="adress" class="input" placeholder="Dirección"><br>
                <input type="pc" class="input" placeholder="Código Postal"><br>
                <input type="city" class="input" placeholder="Ciudad"><br>
                <input type="country" class="input" placeholder="País"><br>
                <input type="email" class="input" placeholder="Email"><br>
                <input type="password" class="input" placeholder="Contraseña"><br><br>
                <input type="button" class="input" value="Registrarse">             
            </form>
        </div>
    </div>
</body>
</html>