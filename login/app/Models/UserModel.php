<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    // model setup
    protected $table = 'users'; //table UserModel will be handling
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data){
        //before insert into db, to see if have any instruction to manipulate the db
        
        //create password hashing
        // if (isset($data['data']['password'])) 
        //     $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT); //php func to hash the password
        
        return $data;
    }

    protected function beforeUpdate(array $data){
        //before update data in db
        
        return $data;
    }


}