<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function register()
    {
        $this->load->view('register_view');
    }
        
    public function register2()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('fname', 'First name', 'required');
        $this->form_validation->set_rules('lname', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');        
            
        if ($this->form_validation->run() == FALSE)
        {
    		$this->load->view('register_view');
        }
        else
        {
            $this->load->model('member_model');
                if ($this->member_model->checkusername()== FALSE) {
                    $data['result']=" Duplicate Username ";            
                } else {
                    if($this->member_model->register()== TRUE) {
                        $data['result']=" Registration Completed ";
                    } else {
                        $data['result']=" Cannot register ";
                    }
                }
                $this->load->view('register_view2',$data);
            }
        }

    public function index()
    {
            $this->load->view('login_view');
    }
        
        public function check()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
        $this->load->view('login_view');
            }else {
                $this->load->model('member_model');
                if($this->member_model->checklogin()== TRUE) {
                    $newdata = array(
                        'username'  => $this->input->post('username'),
                        'logged_in' => "OK"
                    );
                    $this->session->set_userdata($newdata);
                    redirect('member/index');
                } else {
                    $this->load->view('login_view');
                }
            }
        }        
}