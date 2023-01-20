<?php
require_once 'model/alumno_curso.php';

class Alumno_cursoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Alumno_curso();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumno_curso/alumno_curso.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Alumno_curso();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumno_curso/alumno_curso-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Alumno_curso();

        $alm->id = $_REQUEST['id'];
        
        $alm->Curso_id = $_REQUEST['Curso_id'];
        $alm->Alumno_id = $_REQUEST['Alumno_id'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}