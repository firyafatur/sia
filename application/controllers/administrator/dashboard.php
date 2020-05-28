<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Anda Belum Login!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('administrator/auth');
        }
    }

    public function index()
    {
        $data = $this->usermodel->getData($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level' => $data->username
        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dashboard', $data);
        $this->load->view('templates_administrator/footer');
    }
}
