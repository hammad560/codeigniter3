<?php 

class Loginmodel extends CI_Model{
    public function isvalidate($username, $password){
       $temp= $this->db->where(['username'=>$username, 'password'=> $password])
                            ->get('user');
        //echo "<pre>";
        //print_r($temp->row()->id);

        if($temp->num_rows()){
            return ($temp->row()->id);
        }
        else{
            echo "value not matched";
        }
    }

    public function articallist(){
        $id= $this->session->userdata('id');
        $q = $this->db->select('artical_title')
                ->from('artical')
                ->where(['user_id' => $id])
                ->get();
                return $q->result();
                }
}


?>