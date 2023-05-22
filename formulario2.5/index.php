<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estiloss.css">
    <title>Formulario</title>
</head>
<body>
    <header>
        <img src="img/light-blue-wallpaper-a-1440-x-300.jpg" alt="">
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Registro</a></li>
            <li><a href="#">Resultados</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <div class="formulario">
            <form class="alumnos" action="guardar.php" method="POST" id="contact_form" runat="server">
                <ul>
                    <li>
                        <h2>Registro</h2>
                        <span class="required_notification"> *Datos requeridos</span>
                    </li>
                    <li><label for="Nombre">Nombre:</label>
                        <input type="text" name="nombre" placeholder="nombre" value="" maxlength="30" required />
                        <span class="form_hint">Formato correcto: "Yolanda"</span>
                    </li>
                    <li><label for="Apellido">Apellido:</label>
                        <input type="text" name="apellido" placeholder="apellido" value="" maxlength="30" required />
                        <span class="form_hint">Formato correcto: "Hernandez"</span>
                    </li>
                    <li><label for="email">email:</label>
                        <input type="text" name="email" placeholder="email" value="" maxlength="30" required />
                        <span class="form_hint">al217220@alumnos.uacj.mx</span>
                    </li>
                    <li>
                        <button class="submit" type="submit"> Enviar Registro</button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
    

</body>
</html>