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

    public function updateDataClient($data){
        $this->db->query("UPDATE client SET nama = :nama, email= :email, phone = :phone, 
        address = :address, id_kota = :id_kota , nik = :nik WHERE id_client = :id_client");

        $this->db->bind('nama',$data['name']);
        $this->db->bind('email',$data['email-address']);
        $this->db->bind('phone',$data['phone']);
        $this->db->bind('address',$data['address']);
        $this->db->bind('id_kota',$data['city']);
        $this->db->bind('nik',$data['nik']);
        $this->db->bind('id_client',$data['id']);


        $this->db->execute();
        return $this->db->rowCount();

    }

    public function getClientProfile($id){
        $this->db->query("select c.* , m.nama as 'nama_motor', m.harga, m.id_brand, m.id_kota, m.id_tipe, l.nama_kota, b.nama_brand, t.nama_tipe from client c join motor m on m.id_client = c.id_client join brand b on m.id_brand = b.id_brand join tipe t on m.id_tipe = t.id_tipe join lokasi l on m.id_kota = l.id_kota where m.id_client = :id");
        $this->db->bind('id',$id);
        return $this->db->single();

    }

    public function getClientProfileMotor($id){
        $this->db->query("select M.id_motor,M.nama,M.harga,M.id_client,L.nama_kota,T.nama_tipe,B.nama_brand from motor M join brand B on M.id_brand = B.id_brand JOIN lokasi L on M.id_kota = L.id_kota join tipe T on M.id_tipe = T.id_tipe where M.id_client = :id");
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

    public function deleteAccount($id){
        $this->db->query('delete from client where id_client = :id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }
}

?>