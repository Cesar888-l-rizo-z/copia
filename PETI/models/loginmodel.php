<?php


require_once 'models/users.php';


class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validar()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM loginpeti');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }

    // public function ldap_connect()
    // {

    //     try {
    //         $query = $this->db->connect()->prepare('SELECT * FROM loginpeti');
    //         $query->execute([]);

    //         $row = $query->fetchAll();

    //         return $row;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         // echo "Este documento ya esta registrado";
    //         return [];
    //     }
    // }
    
}
