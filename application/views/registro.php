<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/librerias/css/style_registro.css">
	<title>Registro</title>

</head>


    <body>

    
        <form action="" method="POST">
            <h1><b>REGISTRARSE</b></h1>
            <br>
            <input type="text" name="nombre" placeholder="&#128100; Nombre" require>

            <input type="email" name="email" placeholder="&#128231; Correo Electronico" require>

            <input type="password" name="pass1" placeholder="&#128273; Contraseña" require>

            <input type="password" name="pass2" placeholder="&#128272; Confirmar contraseña" require>

            <button type="submit" name="" id="btn1" class="btn btn-lg btn-block">CREAR CUENTA</button>
            

            <h2>________________________</h2>
            <div class="pieregistro">
                <a href="<?php echo base_url() . 'login' ?>" class="link-light text-center">Iniciar Sesión</a>
            </div>        
            <br>    

        </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>