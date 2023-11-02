<?php
class Register extends CI_Controller{
    public function index(){
        $this->load->view('login');

    }

    public function update(){
        extract($_POST);
        $id=$id;
        $data=[
            'student_name' =>$stname,
            'student_email' =>$stmail,
            'student_mobile' =>$stmobile

        ];
        $this->load->model('RegModel');
       $result = $this->RegModel->updatedata($data, $id);
       if($result){
        $this->fetchdata();

       }

    }

    public function student(){
        $mes['msg']=' Registration Form';
        $this->load->view('registration_form',$mes);
    }

    public function saveData(){
       
        extract($_POST);
        $data = [
            'student_name' => $stname,
            'student_email' => $stmail,
            'student_mobile' => $stmobile
        ];

        $this->load->model('RegModel');
        $result = $this->RegModel->insertdata($data);

        if($result){
            $res['status'] = 'Successfully inserted';
            $res['test'] = 200;
            $this->load->view('registration_form',$res);
            //redirect(base_url().'register/student/');
           
        }else{
            $res['status'] = 'Error while inserting data';
            $this->load->view('registration_form',$res);
        }

     }

     public function fetchdata(){
        $this->load->model('RegModel');
        $result['table'] = $this->RegModel->getRecord();
        $this->load->view('display_record',$result);


     }

     public function edit($id){
        $this->load->model('RegModel');
        $result['data'] = $this->RegModel->editdata($id);
        $this->load->view('display_record',$result);
        
     }
}
?>