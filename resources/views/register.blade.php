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
    <script>
        function checkFunction() {
            if(document.getElementById('password').value == document.getElementById('confirmpassword').value){
                document.getElementById('button').disabled = false;
            } else{
                document.getElementById('button').disabled = true;
            }
        }
    </script>
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
            <form class="form" method="POST" action="/create">
                @csrf
                <p class="tittle">Crear cuenta nueva</p>
                <input name="name" type="text" class="input" placeholder="Nombre" required><br>
                <input name="surname1" type="text" class="input" placeholder="Primer Apellido" required><br>
                <input name="surname2" type="text" class="input" placeholder="Segundo Apellido" required><br>
                <input name="adress" type="text" class="input" placeholder="Dirección" required><br>
                <input name="pc" type="number" class="input" placeholder="Código Postal" required><br>
                <input name="city" type="text" class="input" placeholder="Ciudad" required><br>
                <input name="country" type="text" class="input" placeholder="País" required><br>
                <input name="email" type="email" class="input" placeholder="Email" required><br>
                <input name="password" id="password" type="password" class="input" placeholder="Contraseña" onchange="checkFunction()" required><br>
                <input name="confirmpassword" id="confirmpassword" type="password" class="input" placeholder="Confirmar contraseña" onchange="checkFunction()" required><br><br>
                <input name="button" id="button" type="submit" class="input" value="Registrarse" disabled>             
            </form>
        </div>
    </div>
</body>
</html>