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

        public function transaksi_selesai($id)
        {
            $where = array('id_rental' => $id);
            $data['transaksi'] = $this->db->query("SELECT * FROM transaksi 
                WHERE id_rental='$id'")->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/transaksi_selesai',$data);
            $this->load->view('templates_admin/footer');
        }

        public function transaksi_selesai_aksi()
        {
            $id_gc                    = $this->input->post('id_gc');
            $id_rental                = $this->input->post('id_rental');
            $tanggal_pengembalian     = $this->input->post('tanggal_pengembalian');
            $status_rental            = $this->input->post('status_rental');
            $status_pengembalian      = $this->input->post('status_pengembalian');

            $data = array(
                'status'                   => '1',
                'tanggal_pengembalian'     => $tanggal_pengembalian,
                'status_rental'            => $status_rental,
                'status_pengembalian'      => $status_pengembalian
            );
            $where = array(
                'id_rental' => $id_rental,
                'id_gc'     => $id_gc
            );

            $this->rental_model->update_data('transaksi', $data, $where);
            $this->rental_model->update_data('game_console', $data, $where);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Transaksi Berhasil! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_transaksi');
        }
    }

?>