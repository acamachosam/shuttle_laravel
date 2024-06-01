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
    <title>Acceso - Laravel Shuttles</title>
</head>
<body>
    <!--Barra de navegación superior-->
    <div class="topnav">
        <a href="/#home" class="navbuttons">HOME</a>
        <a href="/#info" class="navbuttons">INFORMACION</a>
        <a href="/#about" class="navbuttons">SOBRE NOSOTROS</a>
        <a href="/login" class="profile"><img src="profile.png" alt="Perfil"></img></a>
    </div>

    <!--Form de log in-->
    <div class="regin">
        <div class="form_container">
            <form class="form" method="POST" action="/validate">
                @csrf
                <p class="tittle">Bienvenid@</p>
                <input name="email" type="text" class="input" placeholder="Email"><br>
                <input name="password" type="password" class="input" placeholder="Contraseña"><br><br>
                <input name="button" type="submit" class="input" value="Acceder"><br>
                <a class="link" href="/register">Registrarse</a><br>
                <!--Futura funcionalidad de recuperar email-->
                <!--<a class="link" href="pdte">¿No recuerdas tu contraseña?</a>-->
            </form>
        </div>
    </div>
</body>
</html>