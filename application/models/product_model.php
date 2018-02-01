<?php
class product_model extends CI_Model {
    
    public function roominsert()
    {
        $data=array(
             'roompic'  =>$this->input->post('roompic'),
                'roomtype' => $this->input->post('roomtype'),
                'price' => $this->input->post('price'),
                'roomleft' => $this->input->post('roomleft'),
                'detail' => $this->input->post('detail')
                );
        $query=$this->db->insert('tb_room', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function all() {
        return $this->db->get('tb_room');
    }
    public function getproduct() {
        $this->db->where('roomID',$this->uri->segment(3));
       
         
        return $this->db->get('tb_room');
    }
    public function roomupdate()
    {
        $data=array(
                'roomtype' => $this->input->post('roomtype'),
                'price' => $this->input->post('price'),
                'roomleft' => $this->input->post('roomleft'),
                'detail' => $this->input->post('detail')
                );
       $this->db->where('roomID', $this->input->post('roomID'));
       
         if($this->db->update('tb_room', $data)) {
            return TRUE;
         } else{
            return FALSE;
    }    }
     public function roomdelete()
    {
        $this->db->where('roomID', $this->uri->segment(3
                                                      ));
        if($this->db->delete('tb_room'))
            return TRUE;
        else
            return FALSE;
    } 
    
}