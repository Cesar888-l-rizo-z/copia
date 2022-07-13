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

}
