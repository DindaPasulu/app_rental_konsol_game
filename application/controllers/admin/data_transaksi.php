<?php

    class data_transaksi extends CI_Controller{

        public function index()
        {
            $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, game_console gc, customer cs 
            WHERE tr.id_gc=gc.id_gc AND tr.id_customer=cs.id_customer")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_transaksi',$data);
            $this->load->view('templates_admin/footer');
        }
    }

?>