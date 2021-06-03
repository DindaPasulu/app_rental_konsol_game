<?php

class data_customer extends CI_Controller
{
    public function index()
    {
        $data['customer'] = $this->rental_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer()
    {
        $data['customer'] = $this->rental_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer_aksi()
    {
        $this->_rules();

            $nama         = $this->input->post('nama');
            $email        = $this->input->post('email');
            $username     = $this->input->post('username');
            $alamat       = $this->input->post('alamat');
            $gender       = $this->input->post('gender');
            $notelp       = $this->input->post('no_telp');
            $password     = md5($this->input->post('password'));

            $data = array(
                'nama'      => $nama,
                'email'     => $email,
                'username'  => $username,
                'alamat'    => $alamat,
                'gender'    => $gender,
                'no_telp'   => $notelp,
                'password'  => $password
            );

            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Customer Berhasil Ditambahkan! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_customer');
    }

    public function update_customer($id)
    {
        $where = array('id_customer' => $id);
        $data['customer'] = $this->db->query("SELECT * FROM customer cs WHERE id_customer ='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_customer',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_customer_aksi()
    {
        $this->_rules();

            $id           = $this->input->post('id_customer');
            $nama         = $this->input->post('nama');
            $email        = $this->input->post('email');
            $username     = $this->input->post('username');
            $alamat       = $this->input->post('alamat');
            $gender       = $this->input->post('gender');
            $notelp       = $this->input->post('no_telp');
            $password     = md5($this->input->post('password'));

            $data = array(
                'nama'      => $nama,
                'email'     => $email,
                'username'  => $username,
                'alamat'    => $alamat,
                'gender'    => $gender,
                'no_telp'   => $notelp,
                'password'  => $password
            );
            $where = array('id_customer' => $id);

            $this->rental_model->update_data('customer', $data, $where);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Customer Berhasil Di Update! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_customer');
    }

    public function delete_customer($id)
    {
        $where = array('id_customer' => $id);
        $this->rental_model->delete_data($where, 'customer');
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Customer Berhasil Dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_customer');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('Gender','Gender','required');
        $this->form_validation->set_rules('notelp','No. Telp','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}

?>