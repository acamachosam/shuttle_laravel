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
        <a href="/profile" class="profile"><img src="profile.png" alt="Perfil"></img></a>
    </div>
    
    <!--Imagen Parallax información-->
    <div class="bkimgdash" id="info">
        <div class="dashcont">
            <div class="displayinfo" id="reserve">
                <h1 style="color: white;">RESERVAR</h1>
                <div class="reservations">   
                    <form class="reservations_columns" method="POST" action="">
                        @csrf
                        <p class="tittle">Aeropuerto a hotel</p>
                        <label style="color: white;" for="arrivalday">Día de llegada</label><br>
                        <input name="arrivalday" type="date" class="input" placeholder="Día de llegada"><br>
                        <label style="color: white;" for="arrivaltime">Hora de llegada</label><br>
                        <input name="arrivaltime" type="time" class="input" placeholder="Hora de llegada"><br>
                        <input name="flightnumber" type="number" class="input" placeholder="Número de vuelo"><br>
                        <input name="destinationhotel" type="text" class="input" placeholder="Hotel de destino"><br>
                        <input name="departureairport" type="text" class="input" placeholder="Aeropuerto de origen"><br><br>
                        <br><br><input name="button" type="submit" class="input" value="Reservar"><br>
                    </form>
                    <form class="reservations_columns" method="POST" action="">
                        @csrf
                        <p class="tittle">Hotel a aeropuerto</p>
                        <label style="color: white;" for="flightday">Día del vuelo</label><br>
                        <input name="flightday" type="date" class="input" placeholder="Día del vuelo"><br>
                        <label style="color: white;" for="flighttime">Hora del vuelo</label><br>
                        <input name="flighttime" type="time" class="input" placeholder="Hora del vuelo"><br>
                        <label style="color: white;" for="pickuptime">Hora de recogida</label><br>
                        <input name="pickuptime" type="time" class="input" placeholder="Hora de recogida"><br>
                        <input name="flightnumber" type="number" class="input" placeholder="Número de vuelo"><br>
                        <input name="pickuphotel" type="text" class="input" placeholder="Hotel de recogida"><br><br>
                        <br><input name="button" type="submit" class="input" value="Reservar"><br>
                    </form>
                    <div>
                        <p class="tittle">Ida y vuelta</p>
                        <form class="reservations_columns" method="POST" action="">
                            @csrf
                            <div class="reservations">
                                <div class="reservations_columns">
                                    <label style="color: white;" for="flightday">Día del vuelo</label><br>
                                    <input name="flightday" type="date" class="input" placeholder="Día del vuelo"><br>
                                    <label style="color: white;" for="flighttime">Hora del vuelo</label><br>
                                    <input name="flighttime" type="time" class="input" placeholder="Hora del vuelo"><br>
                                    <label style="color: white;" for="pickuptime">Hora de recogida</label><br>
                                    <input name="pickuptime" type="time" class="input" placeholder="Hora de recogida"><br>
                                    <input name="flightnumber" type="number" class="input" placeholder="Número de vuelo"><br>
                                    <input name="pickuphotel" type="text" class="input" placeholder="Hotel de recogida"><br><br>
                                </div>
                                <div class="reservations_columns">
                                    <label style="color: white;" for="arrivalday">Día de llegada</label><br>
                                    <input name="arrivalday" type="date" class="input" placeholder="Día de llegada"><br>
                                    <label style="color: white;" for="arrivaltime">Hora de llegada</label><br>
                                    <input name="arrivaltime" type="time" class="input" placeholder="Hora de llegada"><br>
                                    <input name="flightnumber" type="number" class="input" placeholder="Número de vuelo"><br>
                                    <input name="destinationhotel" type="text" class="input" placeholder="Hotel de destino"><br>
                                    <input name="departureairport" type="text" class="input" placeholder="Aeropuerto de origen"><br><br>
                                </div>
                            </div>
                            <div>
                                <br><input name="button" type="submit" class="input" value="Reservar"><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>        
            <div class="displayinfo" id="modify">
                <h1>Modificar</h1>
            </div>
            <div class="displayinfo" id="cancel">
                <h1>Cancelar</h1>
            </div>
            <div class="displayinfo" id="driver">
                <h1>Seleccionar conductor</h1>
            </div>      
        </div>
    </div>    
</body>
</html>