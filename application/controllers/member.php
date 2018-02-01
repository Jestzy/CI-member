<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
         $this->load->model('product_model');
    }
   
    public function login()
    {
        $this->load->view('login_view');
    }    
    public function login2()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_message('required', 'Please fill %s ');        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        }else {
            if($this->member_model->checklogin() == TRUE) {
                $newdata = array(
                    'sess_user'  => $this->input->post('user'),
                    'logged_in' => "OK"
                );
                $this->session->set_userdata($newdata);
                redirect('member/index');
            } else {
                $this->load->view('login_view');
            }
        }
    } 
    public function index() 
    {
        $this->member_model->checksession();
        $data['query']=$this->member_model->getmember(); 
         $data['query']=$this->product_model->all();
        $this->load->view('home_view',$data);
    }

    public function update()
    {
         $this->member_model->checksession();
        $data['query']=$this->member_model->getmember();  
        $this->load->view('update_view',$data);
    }

    public function update2()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'Namr', 'required');
        $this->form_validation->set_rules('lname', 'Lastname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');            

        $this->form_validation->set_message('required', 'ERROR : Please fill %s ');        
        $this->form_validation->set_message('valid_email', 'ERROR : Wrong format of email'); 
            
        if ($this->form_validation->run() == FALSE) {
            $this->update();
        } else {
            if($this->member_model->update()== TRUE) {
                $data['result']=" Data Edited ";
            } else {
                $data['result']=" Cannot Edit ";
            }
            $this->load->view('update_view2',$data);
        } 
    }
    public function changepassword() 
    {
        $this->member_model->checksession();
        $this->load->view('changepassword_view');
    } 
    
    public function changepassword2() 
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpass', 'Old Password', 'required');
        $this->form_validation->set_rules('newpass', 'New Password', 'required');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[newpass]');
       
        $this->form_validation->set_message('required', 'ERROR : Please fill %s ');
        $this->form_validation->set_message('matches', 'ERROR : Passwords do not match ');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('changepassword_view');
        } else {
            if($this->member_model->changepassword()== TRUE) {
                $data['result']=" Edit Password Successfully ";
            } else {
                $data['result']=" Cannot change password  ";
            }
            $this->load->view('changepassword_view2',$data);
        }
    } 
    
    public function logout() {
        $this->session->unset_userdata('sess_user');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy(); 

        redirect('member/index');
    }
    
    
    
   
    public function roomindex()
    {
        $data['query']=$this->product_model->all();
        $this->load->view('home_view',$data);
    }  
   
    
    


}