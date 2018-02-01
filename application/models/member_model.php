<?php
class Member_model extends CI_Model {
    
    public function checkusername() {
        $this->db->where('user',$this->input->post('user'));
        $query=$this->db->get('tb_member');
        if($query->num_rows==1) {
            return FALSE;
        }else {
            return TRUE;
        }
    }    

    public function register()
    {
        $data=array(
                'user' => $this->input->post('user'),
                'pass' => $this->input->post('pass'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                );
        $query=$this->db->insert('tb_member', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function checklogin() 
    {
        $this->db->where('user',$this->input->post('user'));
        $this->db->where('pass',$this->input->post('pass'));
        $query=$this->db->get('tb_member');

        if($query->num_rows==1) {
            return TRUE;
        }else { 
            return FALSE;
        }
    }

    public function checksession() 
    {
        if($this->session->userdata('logged_in')!="OK") {
            redirect('member/login');
        } 
    }

    public function getmember() {
        $this->db->where('user',$this->session->userdata('sess_user'));
        $query=$this->db->get('tb_member');
        return $query;
    }

    
    
    public function changepassword()
    {
        $this->db->where('user', $this->session->userdata('sess_user'));
        $this->db->where('pass',$this->input->post('oldpass'));
        $query=$this->db->get('tb_member');
        if($query->num_rows==1) {
            $data=array('pass' => $this->input->post('newpass'));
            $this->db->where('user', $this->session->userdata('sess_user'));
            $query=$this->db->update('tb_member', $data); 
            if($query) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }   
    }
  
     public function update()
    {
        $data=array(
               
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                );
        $this->db->where('user', $this->session->userdata('sess_user'));
        //$this->db->where('user', $data['user']);
        $query=$this->db->update('tb_member', $data); 
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
   
   
    public function getproduct() {
        $this->db->where('roomID',$this->uri->segment(3));
        return $this->db->get('tb_room');
    }
   
    
}
?>
