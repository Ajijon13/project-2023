<?php 
class M_login extends CI_Model {

    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where(array(
                        'username' =>$username,
                        'password' =>md5($password)
        ));
        return $this->db->get()->row();
    } 
}
?>