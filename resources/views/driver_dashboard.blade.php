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
    <title>Dashboard - Laravel Transfers</title>
</head>
<body>
    <!--Barra de navegación superior-->
    <div class="topnav">
        <a href="/#home" class="navbuttons">HOME</a>
        <a href="/#info" class="navbuttons">INFORMACION</a>
        <a href="/#about" class="navbuttons">SOBRE NOSOTROS</a>
        <a href="/login" class="profile"><img src="logout.png" alt="Log out"></img></a>
    </div>
    
    <!--Imagen Parallax información-->
    <div class="bkimgdash" id="info">
        <div class="dashcont">


            <div class="displayinfo" id="profile">
                <h1 style="color: white;">PERFIL</h1>
                <div class="reservations">
                    <div class="reservations_columns">
                        <p class="input">CONDUCTOR:<br> <?php echo $driverdata[0]->Descripción;?></p>
                    </div>
                    <div class="reservations_columns">
                        <p class="input">EMAIL:<br> <?php echo $driverdata[0]->email_conductor;?></p>
                    </div>
                </div>
            </div>


            <div class="displayinfo" id="reserve">
                <h1>Calendario trayectos</h1>
            </div>        


        </div>
    </div>    
</body>
</html>