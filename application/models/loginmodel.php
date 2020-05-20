<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function cekLogin($username, $password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user');
    }

    public function getLoginData($username, $password)
    {
        $query_cekLogin = $this->db->get_where('user', array(
            'username' => $username,
            'password' => $password
        ));

        if (count($query_cekLogin->result()) > 0) {
            foreach ($query_cekLogin->result() as $qck) {
                foreach ($query_cekLogin->result() as $ck) {
                    $sess_data['logged_in'] = TRUE;
                    $sess_data['username'] = $ck->username;
                    $sess_data['password'] = $ck->password;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                redirect('administrator/dashboard');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password Salah !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('administrator/auth');
        }
    }
}
