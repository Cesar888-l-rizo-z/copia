<?php


require_once 'models/users.php';


class IndexModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function list()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM webpeti');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function create($data)
    {

        $img = $data['img']['name'];
        $docs = $data['docs']['name'];
//print_r($data);
        try {
            $query = $this->db->connect()->prepare(
                'INSERT INTO webpeti(
                    Nombre_Projects,
                    Objetivo,
                    Proceso,
                    Fecha_Creacion,
                    Fecha_Limite,
                    Estado,
                    Archivo,
                    Imagen
                )
                VALUES(
                    :Nombre_Projects,
                    :Objetivo,
                    :Proceso,
                    :Fecha_Creacion,
                    :Fecha_Limite,
                    :Estado,
                    :Archivo,
                    :Imagen
                );'
            );

            $query->bindParam(':Nombre_Projects', $data['nombre_projects']);
            $query->bindParam(':Objetivo', $data['objetivo']);
            $query->bindParam(':Proceso', $data['proceso']);
            $query->bindParam(':Fecha_Creacion', $data['creacion']);
            $query->bindParam(':Fecha_Limite', $data['limite']);
            $query->bindParam(':Estado', $data['estado']);
            $query->bindParam(':Archivo', $docs);
            $query->bindParam(':Imagen', $img);
            $query->execute();

            

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function listStatus()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM estado');
            $query->execute([]);

            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function listproce()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM proceso');
            $query->execute([]);

            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function select($id)
    
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM webpeti WHERE id=:id');
            $query->execute([':id' => $id]);
            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }
    
    public function modificar($data)
    {

        $img = $data['img']['name'];
        $docs = $data['docs']['name'];
//print_r($data);
        try {
            $query = $this->db->connect()->prepare(
                'UPDATE
                    webpeti
                SET
                    Nombre_Projects = :Nombre_Projects,
                    Objetivo = :Objetivo,
                    Proceso = :Proceso,
                    Fecha_Creacion = :Fecha_Creacion,
                    Fecha_Limite = :Fecha_Limite,
                    Estado = :Estado,
                    Archivo = :Archivo,
                    Imagen = :Imagen
                WHERE
                    id = :id'
            );

            $query->bindParam(':Nombre_Projects', $data['nombre_projects']);
            $query->bindParam(':Objetivo', $data['objetivo']);
            $query->bindParam(':Proceso', $data['proceso']);
            $query->bindParam(':Fecha_Creacion', $data['creacion']);
            $query->bindParam(':Fecha_Limite', $data['limite']);
            $query->bindParam(':Estado', $data['estado']);
            $query->bindParam(':Archivo', $docs);
            $query->bindParam(':Imagen', $img);
            $query->bindParam(':id', $data['ID']);
            $query->execute();

            

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM webpeti WHERE id=:id');
            $query->execute([':id' => $id]);


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    function agregar_brecha()
    {
        $this->view->render('peti/agregar_brecha');
    }

    public function createbrecha($data)
    {

       print_r($data);
        try {
            $query = $this->db->connect()->prepare(
                'INSERT INTO brechast_i(
                    nombre_rupturas,
                    ruptura,
                    estrategia1,
                    estrategia2,
                    estrategia3,
                    estrategia4,
                    estrategia5
                )
                VALUES(
                    :nombre_rupturas,
                    :ruptura,
                    :estrategia1,
                    :estrategia2,
                    :estrategia3,
                    :estrategia4,
                    :estrategia5
                );'
            );

        
            $query->bindParam(':nombre_rupturas', $data['nombre_rupt']);
            $query->bindParam(':ruptura', $data['rupturas']);
            $query->bindParam(':estrategia1', $data['estrategia1']);
            $query->bindParam(':estrategia2', $data['estrategia2']);
            $query->bindParam(':estrategia3', $data['estrategia3']);
            $query->bindParam(':estrategia4', $data['estrategia4']);
            $query->bindParam(':estrategia5', $data['estrategia5']);
            $query->execute();


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    

    public function vist()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM brechast_i');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function select_brechas($idbrechasTI)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM brechast_i WHERE idbrechasTI=:idbrechasTI');
            $query->execute([':idbrechasTI' => $idbrechasTI]);

            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function modificar_brecha($data)
    {

        try {
            $query = $this->db->connect()->prepare(
                'UPDATE
                    brechast_i
                SET
                    nombre_rupturas = :nombre_rupturas,
                    ruptura = :ruptura,
                    estrategia1 = :estrategia1,
                    estrategia2 = :estrategia2,
                    estrategia3 = :estrategia3,
                    estrategia4 = :estrategia4,
                    estrategia5 = :estrategia5,
            
                WHERE
                idbrechasTI = :idbrechasTI'
            );

            $query->bindParam(':nombre_rupturas', $data['nombre_rupt']);
            $query->bindParam(':ruptura', $data['rupturas']);
            $query->bindParam(':estrategia1', $data['estrategia1']);
            $query->bindParam(':estrategia2', $data['estrategia2']);
            $query->bindParam(':estrategia3', $data['estrategia3']);
            $query->bindParam(':estrategia4', $data['estrategia4']);
            $query->bindParam(':estrategia5', $data['estrategia5']);
            $query->execute();

            

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function delete_brechas($idbrechasTI)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM brechast_i WHERE idbrechasTI=:idbrechasTI');
            $query->execute([':idbrechasTI' => $idbrechasTI]);


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

}
