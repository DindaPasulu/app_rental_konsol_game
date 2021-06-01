<?php

class auth extends CI_Controller{

    public function login()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){

            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        }else{
            $username   = $this->input->post('username');
            $password   = md5($this->input->post('password'));

            $check = $this->rental_model->check_login($username, $password);

            if($check == FALSE)
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong Username/Password! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            }else{
                $this->session->set_userdata('username',$check->username);
                $this->session->set_userdata('role_id',$check->role_id);
                $this->session->set_userdata('nama',$check->nama);
                $this->session->set_userdata('id_customer',$check->id_customer);

                switch ($check->role_id) {
                    case 1 : redirect('admin/dashboard');
                        break;
                    case 2 : redirect('customer/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    
    public function _rules()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('ganti_password');
        //$this->load->view('templates_admin/footer');
    }

    public function ganti_password_aksi()
    {
        $new_pass       = $this->input->post('new_pass');
        $confirm_pass   = $this->input->post('confirm_pass');

        $this->form_validation->set_rules('new_pass','New Password','required|matches[confirm_pass]');
        $this->form_validation->set_rules('confirm_pass','Confirm Password','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates_admin/header');
            $this->load->view('ganti_password');
        }else{
            $data = array('password' => md5($new_pass));
            $id = array('id_customer' => $this->session->userdata('id_customer'));

            $this->rental_model->update_password($id,$data,'customer');
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Your Password Has Changed! Please Log In </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
        }
    }
}

?>