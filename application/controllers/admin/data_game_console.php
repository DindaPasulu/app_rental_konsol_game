<?php

class data_game_console extends CI_Controller{
    public function index()
    {
        $data['game_console'] = $this->rental_model->get_data('game_console')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_game_console');
        $this->load->view('templates_admin/footer');
    }
}

?>