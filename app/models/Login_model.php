<?php 

class Login_model{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($email){
        $this->db->query('SELECT * FROM CLIENT WHERE email = :email');
        $this->db->bind(':email',$email);
        $result = $this->db->single();
        return $result;
    }
}

?>