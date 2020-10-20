<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_crud');
    }

    public function user()
    {
        $output['data'] = $this->M_crud->left_join('tbl_user', 'tbl_level', 'tbl_user.user_level=tbl_level.level_id');
        $output['level'] = $this->M_crud->read('tbl_level');
        $output['html'] = $this->load->view('v_user', $output, TRUE);
        echo json_encode($output);
    }

    public function simpan_user()
    {
        $id = $this->input->post('user_id');
        $data = [
            'user_nama' => $this->input->post('user_nama'),
            'user_jk' => $this->input->post('user_jk'),
            'user_email' => $this->input->post('user_email'),
            'user_phone' => $this->input->post('user_phone'),
            'user_level' => $this->input->post('user_level'),
            'user_username' => $this->input->post('user_username'),
            'user_nama' => $this->input->post('user_nama'),
        ];
    }
}
