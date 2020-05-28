<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
  public function getData($id)
  {
    $this->db->where('username', $id);
    return $this->db->get('user')->row();
  }
}
