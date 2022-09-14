<?php

require_once 'models/disease.php';

class RegisterModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create($data)
    {

        try {
            $query = $this->db->connect()->prepare('
                INSERT INTO user (
                    IDUSERS, 
                    NAME, 
                    SURNAME, 
                    PHONE,
                    EMAIL, 
                    PASSWORD, 
                    PROFILE,
                    STATUS
                ) VALUES (
                    :idusers, 
                    :name, 
                    :surname,
                    :phone,
                    :email, 
                    :password,
                    :profile, 
                    :status
                    )');
            $query->execute([
                'idusers'           => $data['idusers'],
                'name'              => $data['name'],
                'surname'           => $data['surname'],
                'email'             => $data['email'],
                'phone'             => $data['phone'],
                'password'          => $data['password'],
                'profile'           => $data['profile'],
                'status'            => $data['status']
            ]);
            //print_r($query);


            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function createLogin($data)
    {

        try {
            $query = $this->db->connect()->prepare('INSERT INTO login (USER_IDUSER, PASSWORD) VALUES (:user_iduser, :password)');
            $query->execute([

                'user_iduser'     => $data['user_iduser'],
                'password'          => $data['password']
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function validateUser($id)
    {

        try {
            $query = $this->db->connect()->prepare('SELECT idusers FROM user WHERE idusers = :idusers');
            $query->execute([
                'idusers'     => $id
            ]);
            $validate = $query->rowCount();
            return $validate;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return null;
        }
    }



}