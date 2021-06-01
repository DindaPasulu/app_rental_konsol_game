<?php

class rental extends CI_Controller
{
    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->get_id_gc($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_rental',$data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi()
    {
        $id_customer            = $this->input->post('id_customer');
        $id_gc                  = $this->input->post('id_gc');
        $tanggal_rental         = $this->input->post('tanggal_rental');
        $tanggal_kembali        = $this->input->post('tanggal_kembali');
        $harga                  = $this->input->post('harga');
        $denda                  = $this->input->post('denda');

        $data = array(
            'id_customer'          => $id_customer,
            'id_gc'                => $id_gc,
            'tanggal_rental'       => $tanggal_rental,
            'tanggal_kembali'      => $tanggal_kembali,
            'harga'                => $harga,
            'denda'                => $denda,
            'tanggal_pengembalian' => '-',
            'status_rental'        => 'Belum Selesai' ,
            'status_pengembalian'  => 'Belum Kembali' 
        );

        $this->rental_model->insert_data($data,'transaksi');

        $status = array('status' => '0');
        $id = array(
            'id_gc' => $id_gc,
            'id_customer' => $id_customer
        );

        $this->rental_model->update_data('game_console', $status, $id);
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Transaksi Berhasil! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('customer/dashboard');
    }
}

?>