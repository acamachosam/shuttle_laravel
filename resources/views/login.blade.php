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

    <!--Imagen Parallax con Logo-->
    <div class="login">
        <div class="login_form">
            <form>
                <label for="user">Email:</label>
                <input type="text" id="user"><br>
                <label for="password">Contraseña:</label>
                <input type="text" id="password"><br>
                <input type="submit" value="Acceder">
            </form>
            <button type="button"> <a href="/register">Registrarse</a></button>
        </div>
    </div>
</body>
</html>