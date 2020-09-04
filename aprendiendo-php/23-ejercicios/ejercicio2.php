<?php


function validacion($email){
    $status = "No validado";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Validado correctamente";
    }
    return $status;
};

if(isset($_GET['email'])){
    echo validacion($_GET['email']);
}else{  
    echo "Está erroneo";
}
