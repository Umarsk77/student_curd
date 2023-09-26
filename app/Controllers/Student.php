<?php
namespace App\Controllers;
use App\Models\StudentModel;
class Student extends BaseController{

   public function index(){
    $model = new StudentModel();
    $studentArray=$model->getRecords();
    $data['students'] = $studentArray;
   // print_r($studentArray);
    return view("students/list",$data);
    }

    public function create(){
        //$session = \Config\Services::session();
        helper('form');
        $data=[];
        if($this->request->getPost())
        {
            $input = $this->validate([
                'name' => 'required|min_length[5]',
                'phone' => 'required|min_length[10]',
                'email' => 'required|valid_email|is_unique[student.email]',
                
            ]);

            if($input == true){
                $model = new StudentModel();
                $model->save([
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'course' => $this->request->getPost('course'),
                ]);

              //  $session->setFlashdata('succes','inserted sucssefully');
                return redirect()->to('student');

            }
            else{
                $data['validation'] = $this->validator;
            }

        }
        return view("students/create",$data);
    }
    public function edit($id){
        helper('form');
        $model = new StudentModel();
        $student = $model->getRow($id);
        if(empty($student)){
            return redirect()->to('/student');
        }
        //print_r($student);
        $data=[];
        $data['student']=$student;
        if($this->request->getPost())
        {
            $input = $this->validate([
                'name' => 'required|min_length[5]',
                'phone' => 'required|min_length[10]',
                'email' => 'required|valid_email',
                
            ]);

            if($input == true){
                $model = new StudentModel();
                $model->update($id,[
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'course' => $this->request->getPost('course'),
                ]);

              //  $session->setFlashdata('succes','inserted sucssefully');
                return redirect()->to('student');

            }
            else{
                $data['validation'] = $this->validator;
            }

        }
        return view("students/edit",$data);
    }
    public function delete($id){
        helper('form');
        $model = new StudentModel();
        $student = $model->getRow($id);
        if(empty($student)){
            return redirect()->to('/student');
        }
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/student');
    }

    public function read($id){
        helper('form');
        $model = new StudentModel();
        $student = $model->getRow($id);
        if(empty($student)){
            return redirect()->to('/student');
        }
        //print_r($student);
        $data=[];
        $data['student']=$student;
        return view("students/read",$data);
    }
}


?>