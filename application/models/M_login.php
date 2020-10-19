<?php
class M_login extends CI_Model
{

    public function cekadmin($u, $p)
    {
        $query = $this->db->get_where('tbl_user', ['user_username' => $u, 'user_pass' => $p]);
        return $query->row_array();
    }
}
