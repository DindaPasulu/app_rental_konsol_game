<?php

    class Dashboard extends CI_Controller{

        public function index()
        {
            $data['game'] = $this->rental_model->get_data('game_console')->result();
            $this->load->view('templates_customer/header');
            $this->load->view('customer/dashboard', $data);
            $this->load->view('templates_customer/footer');
        }

        public function about()
        {
            $this->load->view('templates_customer/header');
            $this->load->view('customer/about');
            $this->load->view('templates_customer/footer');
        }

        public function detail_game($id)
        {
            $data['detail'] = $this->rental_model->get_id_gc($id);
            $this->load->view('templates_customer/header');
            $this->load->view('customer/detail_game', $data);
            $this->load->view('templates_customer/footer');
        }
    }

?>