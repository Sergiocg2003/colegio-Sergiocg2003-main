<?php
require_once 'model/usuario.php';
require_once 'model/alumno.php';
require_once 'model/matricula.php';

class LoginController{

    private $model;


    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }


    public function LogOut(){
        session_start();
        $_SESSION["logged"] = false;
        session_write_close();
    }


    public function Index(){
        session_start();
        if($_SESSION["logged"] = true){
            require_once 'view/header.php';
            require_once 'view/menu/menu.php';
            require_once 'view/footer.php'; 
        }
        else{
            require_once 'view/header.php';
            require_once 'view/login/login.php';
            require_once 'view/footer.php';
        }
        session_write_close();
    }


    public function Verificar(){
        $usr = new Usuario();

        if(password_verify($_REQUEST['Contraseña'], $this->model->obtenerContraseña($_REQUEST['Nombre']))){

            session_start();
            $_SESSION["usuario"] = $usr->Nombre;
            $_SESSION["logged"] = true;
            session_write_close();

            require_once 'view/header.php';
            require_once 'view/menu/menu.php';
            require_once 'view/footer.php';
        }
        else{
            require_once 'view/header.php';
            require_once 'view/login/login-fallido.php';
            require_once 'view/footer.php';
        }
    }
}
?>