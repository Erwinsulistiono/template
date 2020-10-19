<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_crud');
    }

    public function index()
    {
        if (!$this->session->userdata('masuk')) {
            redirect('login');
        }
        $data['landing_page'] = "v_dashboard";
        $this->load->view('layouts/v_main', $data);
    }
}
