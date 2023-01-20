<?php
class Usuario{
    private $pdo;

    public $id;
    public $Nombre;
    public $Contraseña;


    public function __CONSTRUCT(){
        try {
            $this->pdo = Database::StartUp();
        } 
        catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function obtenerContraseña($Nombre){
        try{
            $stm = $this->pdo->prepare("SELECT Contraseña 
                                        FROM usuarios 
                                        WHERE $Nombre = ?")
            $stm->execute(array($usuario));
            return $stm->fetch(PDO::FETCH_OBJ)->Contraseña;
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function Listar(){
        try{
            $result = array()
            $stm = $this->pdo->prepare("SELECT * FROM usuarios");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Obtener($id){
        try{
            $stm = $this->pdo
                        ->prepare("SELECT * FROM usuarios WHERE id = ?");
            
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
                        ->prepare("DELETE FROM usuarios WHERE id = ?");

            $stm->execute(array($id));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Actualizar($data){
        try{
            $sql = "UPDATE usuarios SET 
						Nombre = ?,
                        Contraseña = ?
				    WHERE id = ?";
            
            $this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre,
                        $data->Contraseña,
                        $data->id
					)
				);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function Registrar(Usuario $data){
        try{
            $sql = "INSERT INTO usuarios (Nombre, Contraseña) 
		            VALUES (?, ?)";

            $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->Nombre,
                    $data->Contraseña
                )
            );
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>