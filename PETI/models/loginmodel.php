<?php


require_once 'models/users.php';


class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($data){
        $item = new Users();

        try{
            $query = $this->db->connect()->prepare('
            SELECT
                login.users_idusers,
                login.password,
                users.name,
                users.profile,
                users.last_report,
                users.godfather_code,
                users.conditions,
                users.company,
                users.weight,
                users.height,
                users.status,
                users.updateInfo,
                users.surveyApplication,
                vaccination.apply_date,
                MAX(vaccination.dose)
            FROM
                login
            INNER JOIN users ON login.users_idusers = users.idusers
            LEFT JOIN vaccination ON vaccination.users_idusers = users.idusers
            WHERE
                login.users_idusers = :user
            ');
            $query->execute([
                'user' => $data['user']
            ]);

            while ($row = $query->fetch()) {
                $item->user                 = $row['users_idusers'];
                $item->profile              = $row['profile'];
                $item->name                 = $row['name'];
                $item->last_report          = $row['last_report'];
                $item->password             = $row['password'];
                $item->code                 = $row['godfather_code'];
                $item->company              = $row['company'];
                $item->conditions           = $row['conditions'];
                $item->weight               = $row['weight'];
                $item->height               = $row['height'];
                $item->status               = $row['status'];
                $item->updateInfo           = $row['updateInfo'];
                $item->surveyApplication    = $row['surveyApplication'];
                $item->applyDate            = $row['apply_date'];
                $item->vaccinationStatus    = $row['MAX(vaccination.dose)'];
            }

            return $item;
        }catch(PDOException $e){
            // echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return null;
        }
    }

    public function create($data){

        try{
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
        }catch(PDOException $e){
             echo $e->getMessage();
            // echo "Este documento ya esta registrado";
            return false;
        }
    }

    public function createLogin($data){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO login (IDUSERSLG, PASSWORD) VALUES (:iduserslg, :password)');
            $query->execute([

                'iduserslg'     => $data['iduserslg'], 
                'password'          => $data['password'], 
            ]);
            return true;
        }catch(PDOException $e){
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
