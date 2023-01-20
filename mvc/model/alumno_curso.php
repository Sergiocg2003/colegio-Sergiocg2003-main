<?php
class Alumno_curso{
    private $pdo

    public $id;
    public $Curso_id;
    public $Alumno_id;


    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();
        } 
        catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function Listar(){
        try{
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM alumno_curso,cursos,alumnos 
                                                WHERE alumno_curso.Alumno_id = alumnos.id 
                                                AND cursos.id = alumno_curso.Curso_id; ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } 
        catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function Obtener($id){
        try{
            $stm = $this->pdo
                ->prepare("SELECT * FROM alumno_curso WHERE id = ?");
            
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
            }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Eliminar($id){
        try{
            $stm = $this->pdo
                        ->prepare("DELETE FROM alumno_curso WHERE id = ?");

            $stm->execute(array($id));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Actualizar($data){
        try{
            $sql = "UPDATE alumno_curso SET 
						Curso_id = ?,
                        Alumno_id = ?
				    WHERE id = ?";
            
            $this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Curso_id,
                        $data->Alumno_id,
                        $data->id
					)
				);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Registrar(Alumno_curso $data){
        try{
            $sql = "INSERT INTO alumno_curso (Curso_id, Alumno_id) 
		            VALUES (?, ?)";

            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->Curso_id,
                    $data->Alumno_id
                )
            );
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>