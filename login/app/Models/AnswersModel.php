<?php namespace App\Models;

use CodeIgniter\Model;

class AnswersModel extends Model{
    // model setup
    protected $table = 'answers'; //table AnswersModel will be handling
    protected $allowedFields = ['firstquestion', 'secondquestion', 'thirdquestion', 'fourtquestion'];
    
}