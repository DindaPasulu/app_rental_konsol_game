<?php

class register extends CI_Controller{
    
    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){

            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        }else{
            $nama         = $this->input->post('nama');
            $email        = $this->input->post('email');
            $username     = $this->input->post('username');
            $alamat       = $this->input->post('alamat');
            $gender       = $this->input->post('gender');
            $no_telp      = $this->input->post('no_telp');
            $password     = md5($this->input->post('password'));
            $role_id      = '2';

            $data = array(
                'nama'      => $nama,
                'email'     => $email,
                'username'  => $username,
                'alamat'    => $alamat,
                'gender'    => $gender,
                'no_telp'   => $no_telp,
                'password'  => $password,
                'role_id'   => $role_id
            );
            $this->rental_model->insert_data($data, 'customer');
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registered Successfully! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('Gender','Gender','required');
        $this->form_validation->set_rules('no_telp','No. Telp','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}

?>