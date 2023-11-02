<?php
class RegModel extends CI_Model{  

     public function updatedata($data,$id){
      $this->load->database();
      $this->db->where('id',$id);
      return $this->db->update('studreg',$data,);

     }

     public function insertdata($data){
      
       $this->load->database();
       return $this->db->insert('studreg', $data);
       
     }

     public function receiveSegment($data){
      foreach($data as $p){
        echo $p.'<br>';

     }
    }

     public function getRecord(){
      $this->load->database();

      return $this->db->get('studreg')->result();
      
      
     }

     public function editdata($id){
      $this->load->database();
      $this->db->where('id',$id);
      return $this->db->get('studreg')->result();

     }

    }
?>