<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model{
    protected $table = "student";
    protected $allowedFields =['name','phone','email','course'];
    public function getRecords(){
       return $this->orderBy('id','DESC')->findAll();
    }
    public function getRow($id){
        return $this->where('id',$id)->first();
    }
}

?>