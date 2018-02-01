<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class start extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('product_model');
        
    }
	public function roominsert()
	{
		$this->load->view('roominsert_view');
	}
     public function roominsert2()
    {
         
        $this->form_validation->set_rules('roomtype', 'Room type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required'); 
         $this->form_validation->set_rules('roomleft', 'Room left', 'required');
         $this->form_validation->set_rules('detail', 'Detail', 'required');
        $this->form_validation->set_message('required', 'ERROR : Please fill %s '); 
    
         
         if ($this->form_validation->run() == FALSE) {
            $this->load->view('roominsert_view');
        } else {
            if($this->product_model->roominsert()==TRUE) {
                $data['result']=" Data added already ";
            } else {
                $data['result']=" Cannot insert data";
            }
            $this->load->view('roominsert_view2',$data);
        }
    }
         
    
  
    public function index()
    {
        $data['query']=$this->product_model->all();
        $this->load->view('home_view',$data);
        
    }  
    public function roomupdate()
    {  
        
        
        $data['query']=$this->product_model->getproduct();
        $this->load->view('roomupdate_view',$data);
    }
     public function roomupdate2()
    {
         $this->load->library('form_validation');
         
        $this->form_validation->set_rules('roomtype', 'Product Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
         $this->form_validation->set_rules('roomleft', 'Room left', 'required');
        $this->form_validation->set_message('required', 'ERROR : Please fill %s '); 

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('roomupdate_view');
        } else {            
            if($this->product_model->roomupdate()== TRUE) {
                $data['result']=" Edit successfully ";
            } else {
                $data['result']=" Cannot Edit ";
            }
            $this->load->view('roomupdate_view2',$data);
        }
    }  
    public function roomdelete()
    {
        if($this->product_model->roomdelete()== TRUE) {
            $data['result']=" Deleted ";
        } else {
            $data['result']=" Cannot delete";
        }
        $this->load->view('roomdelete_view',$data);
    }
     public function view()
    {
        $data['query']=$this->product_model->all();
        $this->load->view('room_view',$data);
        
    }  
    public function contact()
    {
        $this->load->view('contact');
    }
     
}