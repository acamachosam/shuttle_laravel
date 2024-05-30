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
        <title>Laravel Transfers</title>
    </head>

    <body>
        <!--Barra de navegación superior-->
        <div class="topnav">
            <a href="#home" class="navbuttons">HOME</a>
            <a href="#info" class="navbuttons">INFORMACION</a>
            <a href="#about" class="navbuttons">SOBRE NOSOTROS</a>
            <a href="/login" class="profile"><img src="profile.png" alt="Perfil"></img></a>
        </div>

        <!--Imagen Parallax con Logo-->
        <div class="bkimg" id="home">
            <img src="logo.png" alt="Logo Laravel Transfers" class="logo">
        </div>

        <!--Imagen Parallax información-->
        <div class="bkimg" id="info" style="opacity: 0.75;">
            <div class="pointer">
                <h1 style="font-size: 80px;">INFORMACION</h1>
            </div>
        </div>
        <!--Contenido información-->
        <div class="container">
            <div><img src="shuttle.jpg" alt="Servicio Shuttle" style="width: 100%;height: 100%;"></div>
            <div class="textright">
                <h1>Laravel Transfers</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat suscipit
                eros at tempus. Etiam sodales orci id feugiat commodo. Ut dapibus augue et est iaculis
                vehicula.<br>
                <br>Donec purus lacus, facilisis id elit vel, aliquam volutpat mi. Pellentesque
                eleifend pulvinar est, non venenatis lacus mollis vel. Suspendisse euismod molestie
                ipsum, nec posuere lorem malesuada eget. Curabitur rutrum facilisis erat vel fringilla.
                Sed volutpat orci et turpis placerat sollicitudin.<br>
                <br>Sed nec est porta, pellentesque velit eget, ultricies justo. Mauris ut
                scelerisque felis, eget luctus diam. Suspendisse commodo tellus non nuncrutrum,
                non maximus neque auctor. Donec nec tincidunt velit. Aenean aliquet diam et
                suscipit euismod. In sed lacinia arcu, at convallis velit.
                Etiam volutpat tempor dui, id ultricies felis blandit vel. Vestibulum
                ornare purus massa, a accumsan mi euismod vehicula. Donec tincidunt auctor
                velit, at commodo velit elementum ac.<br>
                <br>Mauris id dictum sapien. Aliquam vel ipsum sagittis, pretium turpis vel,
                efficitur tortor. Mauris varius ultrices placerat. Pellentesque eget ipsum justo.
                Donec non efficitur lacus. Pellentesque vel magna in augue consectetur efficitur.<br><br></p>
            </div>
        </div>

        <!--Imagen Parallax sobre nosotros-->
        <div class="bkimg" id="about" style="opacity: 0.75;">
            <div class="pointer">
                <h1 style="font-size: 80px;">SOBRE NOSOTROS</h1>
            </div>
        </div>
        <!--Contenido sobre nosotros-->
        <div class="container">
            <div class="textleft">
                <h1>Más de 10 años de experiencia a nuestras espaldas.</h1>
                <p> Nulla a velit rutrum, dignissim lacus sit amet, ornare mi. Praesent et
                    bibendum neque.
                    Nam lectus magna, auctor ut porttitor eu, fringilla eu neque.
                    Vivamus molestie, ex vitae interdum lacinia, augue ipsum imperdiet
                    massa, quis molestie ipsum enim ac nibh.<br>
                    <br>Duis et orci ac diam rhoncus interdum vel ut nisl. Aenean accumsan blandit
                    felis ut pulvinar. Ut tincidunt nisl eget urna consectetur, id consequat mi
                    pellentesque. Proin vulputate in ante sit amet pellentesque.<br>
                    Duis commodo tempus malesuada. Curabitur non congue elit, egestas elementum odio.<br>
                    <br>Sed aliquet mattis mi eget eleifend. Vestibulum accumsan ac augue id interdum.<br>
                    <br>Sed auctor eu elit eu ultricies. Aliquam tellus augue, tincidunt cursus neque et,
                    tempor malesuada arcu.<br>
                    <ul>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit:
                        <li>Nulla et metus pellentesque, placerat ligula quis, vehicula nisi.</li>
                        <li>Curabitur consequat lacus sit amet dapibus semper.</li>
                        <li>Quisque sit amet quam et justo accumsan commodo ut sit amet justo.</li>
                    </ul>
                    <ul>
                        Nunc at odio commodo lorem sodales rhoncus:
                        <li>Curabitur vel nisl porta, consequat felis ultricies, aliquet nisi.</li>
                    </ul>
                    <ul>
                        Integer vel quam at nisl tincidunt mollis:
                        <li>Curabitur et lorem sit amet libero malesuada commodo feugiat ornare est.</li>
                        <li>Suspendisse faucibus orci eget nibh congue, et ornare enim aliquam.</li>
                    </ul>
                </p>
            </div>
            <div><img src="flota.jpg" alt="Nuestra flota" style="width: 100%;height: 100%;"></div>
        </div>

        <!--Pie de página-->
        <footer>
            <h5 style="padding-top: 32px;">¡Síguenos en nuestras redes!</h6>
            <p>
                <a href="https://twitter.com/LaravelTransfers">
                    <img alt="Twitter" src="twitter-32.png" style="padding-left: 32px;">
                </a>
                <a href="https://www.instagram.com/LaravelTransfers/">
                    <img alt="Instagram" src="instagram-32.png" style="padding-right: 32px;">
                </a>
            </p>
            <h5 style="padding-bottom: 32px;">
                Laravel Transfers ©
            </h5>
        </footer>
    </body>
</html>