<?php

class data_game_console extends CI_Controller{
    public function index()
    {
        $data['game_console'] = $this->rental_model->get_data('game_console')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_game_console',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_game()
    {
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_game',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_game_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_game();
        }else{
            $kode_type     = $this->input->post('kode_type');
            $merk          = $this->input->post('merk');
            $warna         = $this->input->post('warna');
            $series        = $this->input->post('series');
            $status        = $this->input->post('status');
            $gambar        = $_FILES['gambar']['name'];
            if($gambar=''){
            }else{
                //$image_path = realpath(APPPATH . './assets/img_upload/');
                $config['upload_path']      = realpath(FCPATH.'img_upload');
                $config['allowed_types']    = 'jpg | png';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Di Upload!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type'       => $kode_type,
                'merk'            => $merk,
                'warna'           => $warna,
                'series'          => $series,
                'status'          => $status,
                'gambar'          => $gambar
            );

            $this->rental_model->insert_data($data,'game_console');
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Game Console Berhasil Ditambahkan! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_game_console');
        }
    }

    public function update_game($id){
        $where = array('id_gc' => $id);
        $data['game_console'] = $this->db->query("SELECT * FROM game_console gc, type tp WHERE gc.kode_type
            = tp.kode_type AND gc.id_gc ='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_game',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_game_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $id = $this->input->post('id_gc');
            $this->update_game($id);
        }else{
            $id            = $this->input->post('id_gc');
            $kode_type     = $this->input->post('kode_type');
            $merk          = $this->input->post('merk');
            $warna         = $this->input->post('warna');
            $series        = $this->input->post('series');
            $status        = $this->input->post('status');
            $gambar        = $_FILES['gambar']['name'];
            if($gambar){
                //$image_path = realpath(APPPATH . './assets/img_upload/');
                $config['upload_path']      = realpath(FCPATH.'img_upload');
                $config['allowed_types']    = 'jpg | png';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('gambar')){
                    $gambar=$this->upload->data('file_name');
                    $this->db->set('gambar',$gambar);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type'       => $kode_type,
                'merk'            => $merk,
                'warna'           => $warna,
                'series'          => $series,
                'status'          => $status
            );

            $where = array('id_gc' => $id);
            $this->rental_model->update_data('game_console', $data, $where);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Game Console Berhasil Di Update! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_game_console');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type','Kode Type','required');
        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('warna','Warna','required');
        $this->form_validation->set_rules('series','Series','required');
        $this->form_validation->set_rules('status','Status','required');
    }

    public function detail_game($id)
    {
        $data['detail'] = $this->rental_model->get_id_gc($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_game',$data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_game($id)
    {
        $where = array('id_gc' => $id);
        $this->rental_model->delete_data($where, 'game_console');
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Game Console Berhasil Dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_game_console');
    }
}

?>