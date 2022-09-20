<?php


require_once 'models/users.php';


class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($data)
    {
        $item = new Users();

        try {
            $query = $this->db->connect()->prepare('
            SELECT
                login.user_iduser,
                login.password,
                user.name,
                user.profile
            FROM
                login
            INNER JOIN user ON login.user_iduser = user.idusers
            WHERE
                login.user_iduser = :user
            ');
            $query->execute([
                'user' => $data['user']
            ]);

            while ($row = $query->fetch()) {
                $item->idusers              = $row['user_iduser'];
                $item->profile              = $row['profile'];
                $item->name                 = $row['name'];
                $item->password             = $row['password'];
            }

            return $item;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return null;
        }
    }

    public function create($data)
    {

        try {
            $query = $this->db->connect()->prepare('INSERT INTO users (IDUSERS, NAME, EMAIL, PASSWORD, CONFIRM_PASS, PROFILE_IDPROFILE, STATUS) VALUES (:idusers, :name, :idusers, :name, :email, :password, :confirm_pass, :profile, :status)');
            $query->execute([
                'user'           => $data['idusers'],
                'nombre'              => $data['name'],
                'correo'             => $data['email'],
                'pass'             => $data['password'],
                'passr'              => $data['confirm_pass'],
                'profile' => $data['profile'],
                'status'            => $data['status']
            ]);
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
            $query = $this->db->connect()->prepare('INSERT INTO login (IDUSERSLG, PASSWORD) VALUES (:iduserslg, :password)');
            $query->execute([

                'iduserslg'     => $data['iduserslg'],
                'password'          => $data['password'],
            ]);
            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function register()
    {

        try {
            $query = $this->db->connect()->prepare('SELECT * FROM login');
            $query->execute([]);

            $row = $query->fetchAll();

            return $row;
        } catch (PDOException $e) {
            echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return [];
        }
    }
}
