
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacto</title>


        <link rel="stylesheet" type="text/css" href="../php/estiloContacto.css">


        <header>
          <img src="../img/banner-header-paper-crumpled.jpg">
        </header>
        
     

        <nav>
          <ul>
            <li><a href="../html/Home.html">Home</a></li>
            <li><a href="../html/Comida.html">Comidas Tipicas</a></li>
            <li>
              <a href="#">Recetas</a>
              <ul class="submenu">
                <li><a href="../html/Acaraje.html">Acarajé</a></li>
                <li><a href="../html/acai.html">Acai</a></li>
                <li><a href="../html/brigadeiro.html">Brigadeiro</a></li>
                <li><a href="../html/pan.html">Pan de queso</a></li>
                <li><a href="../html/coxinha.html">Coxinha</a></li>
                <li><a href="../html/moqueca.html">Moqueca</a></li>
              </ul>
            </li>
            <li><a href="../html/Contacto.html">Contacto</a></li>
          </ul>
        </nav>

    </head>

    <body background="../img/fundo-amarelo-textura-aquarela.jpg">      


        <h1><center>Muchas Gracias</center></h1><br>
        <h3>Si tienes alguna pregunta sobre nuestra comida o servicios, o si simplemente quieres enviarnos un comentario o sugerencia, no dudes en llenar nuestro formulario de contacto.                     
            ¡Gracias por visitarnos y esperamos saber de ti pronto!</h3><br><br><br>

            <form id="formulario" method="post" action="registrar.php">
        <div class="form-grupo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div class="form-grupo">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        <div class="form-grupo">
            <label for="telefono">Teléfonos de Contacto:</label>
            <input type="text" id="telefono" name="telefono">
        </div>
        <div class="form-grupo">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion">
        </div>
        <div class="form-grupo">
            <label for="rut">Rut:</label>
            <input type="text" id="rut" name="rut">
        </div>
        <div class="form-grupo">
            <button type="submit" name="enviar">Enviar</button>
        </div>
    </form>
    
    <br><br><br>
    
    <form id="formularioConsulta" method="post" action="resultado.php">
        <input type="submit" value="Consultar" name="consultar">
    </form>


     
        

    </body>
    
</html>