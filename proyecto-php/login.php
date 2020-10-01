<?php
// Iniciar la sesión y la conexión a BBDD
require_once 'includes/conexion.php';
// Recojer los datos del formulario
if(isset($_POST)){

    // Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

    // Recojer datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta  para comprobar las credenciales del usuario

    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $login = mysqli_query($db, $sql);

    // Comprobar la contraseña / cifrar

    if($login && mysqli_num_rows($login) == 1){

        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($password, $usuario['password']);

        if($verify){
            // Utilizar una sesión para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
                
            if(isset($_SESSION['error_login'])){
                    session_unset($_SESSION['error_login']);
                }
        }else{
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login Incorrecto";
        }
    }else{
        // mensaje error
        $_SESSION['error_login'] = "Login Incorrecto";
    }



    

}

// Redirigir al index.php 

header('Location: index.php');