<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_administrator/header',);
        $this->load->view('administrator/login');
        $this->load->view('templates_administrator/footer');
    }

    public function arrayValidasi()
    {
        $this->form_validation->set_rules('username', 'username', 'required', [
            'required' => '<b><i>Username harus diisi!!</i></b>'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required' => '<b><i>Password harus diisi !!</i>'
        ]);
    }

    public function prosesLogin()
    {
        $this->arrayValidasi();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_administrator/header',);
            $this->load->view('administrator/login');
            $this->load->view('templates_administrator/footer');
        } else {
            $this->_inputLogin();
        }
    }

    private function _inputLogin()
    {

        $username = $this->input->post('username');
        $password = MD5($this->input->post('password'));
        $cek = $this->loginmodel->cekLogin($username, $password);

        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $ck) {
                $sess_data['username'] = $ck->username;
                $sess_data['email'] = $ck->email;
                $sess_data['level'] = $ck->level;

                $this->session->set_userdata($sess_data);
            }
            if ($sess_data['level'] == 'admin') {
                redirect('administrator/dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                Username atau Password Salah !!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect('administrator/auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Username atau Password Salah !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('administrator/auth');
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');
        redirect('administrator/auth');
    }
}
