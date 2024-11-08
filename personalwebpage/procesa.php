<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paincake</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página personal de Eli">
    <meta name="keywords" content="UNAM, FES, Aragón, ICO, Computación">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/master.css">
    <script src="./assets/js/cliente.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Azuara Ocotitla Arturo Ivan</h1>
        <h3>Mi página personal</h3>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio">FES Aragón</a></li>
                <li><a href="https://github.com/EliezxRTS">GitHub EliezxRTS</a></li>
                <li>
                    <ul>
                        <li><a href="code.html">Code</a></li>
                        <li><a href="listas.html">Listas</a></li>
                        <li><a href="links.html">Enlaces e imágenes</a></li>
                        <li><a href="tablas.html">Tablas</a></li>
                        <li><a href="formularios.html">Formularios</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $usuariodb="admin";
        $contraseniadb="12345";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $usr= $_POST['usuario'];
            $pass = $_POST['password'];
            if($pass ===$contraseniadb && $usuariodb ===$usr){
                echo "<h3> Bienvenido , $usr ! </h3>";
            }else{
                echo "<h3> Datos incorrectos</h3>";
            }
        }

        ?>



    </main>

    <footer>
        <p>Todos los derechos reservados 2024. FES Aragón UNAM.</p>
    </footer>
</body>

</html>