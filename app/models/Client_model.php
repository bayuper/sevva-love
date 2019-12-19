<?php 

class Client_model{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllClient(){
        $this->db->query('SELECT * FROM CLIENT');
        return $this->db->resultSet();
    }

    public function getLokasi(){
        $this->db->query('SELECT * from lokasi');
        return $this->db->resultSet();
    }

    public function getNewIdClient(){
        $data = $this->db->query('SELECT max(id_client) as max FROM client');
        return $this->db->resultSet();


    }

   
    public function tambahDataClient($data)
    {
        // $query = "INSERT INTO CLIENT VALUES 
        //         ('C005', :email, md5(:password), :nama, :phone ,:address,:foto_ktp,:nik,:id_kota)";

        $this->db->query("INSERT INTO CLIENT (id_client, email, password, nama, phone, address, foto_ktp, nik, id_kota) VALUES 
        (:id_client, :email, :password, :nama, :phone ,:address,:foto_ktp,:nik,:id_kota)");
        
        $this->db->bind('id_client', $data['id']);
        $this->db->bind('email', $data['email-address']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('nama', $data['full-name']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('foto_ktp', $data['foto_ktp']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('id_kota', $data['city']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>