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

    //    print_r($data);
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

    function agregar_context()
    {
        $this->view->render('peti/agregar_context');
    }

    public function createcontexto($data)
    {

    //    print_r($data);
        try {
            $query = $this->db->connect()->prepare(
                'INSERT INTO strategic_context(
                    nombre_context,
                    descripcion,
                    No1,
                    No2,
                    No3,
                    No4,
                    No5,
                    No6,
                    No7,
                    No8,
                    No9,
                    No10,
                    No11,
                    No12,
                    No13,
                    No14,
                    No15
                )
                VALUES(
                    :nombre_context,
                    :descripcion,
                    :No1,
                    :No2,
                    :No3,
                    :No4,
                    :No5,
                    :No6,
                    :No7,
                    :No8,
                    :No9,
                    :No10,
                    :No11,
                    :No12,
                    :No13,
                    :No14,
                    :No15
                );'
            );

        
            $query->bindParam(':nombre_context', $data['nombre_context']);
            $query->bindParam(':descripcion', $data['descripcion']);
            $query->bindParam(':No1', $data['No1']);
            $query->bindParam(':No2', $data['No2']);
            $query->bindParam(':No3', $data['No3']);
            $query->bindParam(':No4', $data['No4']);
            $query->bindParam(':No5', $data['No5']);
            $query->bindParam(':No6', $data['No6']);
            $query->bindParam(':No7', $data['No7']);
            $query->bindParam(':No8', $data['No8']);
            $query->bindParam(':No9', $data['No9']);
            $query->bindParam(':No10', $data['No10']);
            $query->bindParam(':No11', $data['No11']);
            $query->bindParam(':No12', $data['No12']);
            $query->bindParam(':No13', $data['No13']);
            $query->bindParam(':No14', $data['No14']);
            $query->bindParam(':No15', $data['No15']);
            $query->execute();


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function vistlist_context()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM strategic_context');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function select_context($idstrategic_context)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM strategic_context WHERE idstrategic_context=:idstrategic_context');
            $query->execute([':idstrategic_context' => $idstrategic_context]);

            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function modificar_context($data)
    {

        try {
            $query = $this->db->connect()->prepare(
                'UPDATE
                    strategic_context
                SET
                    nombre_context = :nombre_context,
                    descripcion = :descripcion,
                    No1 = :No1,
                    No2 = :No2,
                    No3 = :No3,
                    No4 = :No4,
                    No5 = :No5,
                    No6 = :No6,
                    No7 = :No7,
                    No8 = :No8,
                    No9 = :No9,
                    No10 = :No10,
                    No11 = :No11,
                    No12 = :No12,
                    No13 = :No13,
                    No14 = :No14,
                    No15 = :No15
            
                WHERE
                idstrategic_context = :idstrategic_context'
            );

            $query->bindParam(':nombre_context', $data['nombre_context']);
            $query->bindParam(':descripcion', $data['descripcion']);
            $query->bindParam(':No1', $data['No1']);
            $query->bindParam(':No2', $data['No2']);
            $query->bindParam(':No3', $data['No3']);
            $query->bindParam(':No4', $data['No4']);
            $query->bindParam(':No5', $data['No5']);
            $query->bindParam(':No6', $data['No6']);
            $query->bindParam(':No7', $data['No7']);
            $query->bindParam(':No8', $data['No8']);
            $query->bindParam(':No9', $data['No9']);
            $query->bindParam(':No10', $data['No10']);
            $query->bindParam(':No11', $data['No11']);
            $query->bindParam(':No12', $data['No12']);
            $query->bindParam(':No13', $data['No13']);
            $query->bindParam(':No14', $data['No14']);
            $query->bindParam(':No15', $data['No15']);
            $query->execute();

            

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function delete_context($idstrategic_context)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM strategic_context WHERE idstrategic_context=:idstrategic_context');
            $query->execute([':idstrategic_context' => $idstrategic_context]);


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    function agregar_marco()
    {
        $this->view->render('marco/agregar_marco');
    }

    public function createmarco($data)
    {

    //    print_r($data);
        try {
            $query = $this->db->connect()->prepare(
                'INSERT INTO regulatory_framework(
                    norma_ley,
                    resumen,
                    link,
                    observacion
                )
                VALUES(
                    :norma_ley,
                    :resumen,
                    :link,
                    :observacion
                );'
            );

        
            $query->bindParam(':norma_ley', $data['norma_ley']);
            $query->bindParam(':resumen', $data['resumen']);
            $query->bindParam(':link', $data['link']);
            $query->bindParam(':observacion', $data['observacion']);
            $query->execute();


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function vistmarco()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM regulatory_framework');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function select_marco($idframework)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM regulatory_framework WHERE idframework=:idframework');
            $query->execute([':idframework' => $idframework]);

            $row = $query->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    public function modificar_marco($data)
    {

        try {
            $query = $this->db->connect()->prepare(
                'UPDATE
                    regulatory_framework
                SET
                    norma_ley = :norma_ley,
                    resumen = :resumen,
                    link = :link,
                    observacion = :observacion
            
                WHERE
                idframework = :idframework'
            );

            $query->bindParam(':norma_ley', $data['norma_ley']);
            $query->bindParam(':resumen', $data['resumen']);
            $query->bindParam(':link', $data['link']);
            $query->bindParam(':observacion', $data['observacion']);
            $query->execute();

            

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function delete_marco($idframework)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM regulatory_framework WHERE idframework=:idframework');
            $query->execute([':idframework' => $idframework]);


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

}
