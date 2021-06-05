<?php

class transaksi extends CI_Controller{
    public function index()
    {
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, game_console gc, customer cs 
            WHERE tr.id_gc=gc.id_gc AND tr.id_customer=cs.id_customer AND cs.id_customer='$customer' ORDER BY id_rental ASC")->result();
            $this->load->view('templates_customer/header');
            $this->load->view('customer/transaksi',$data);
            $this->load->view('templates_customer/footer');
    }
}

?>