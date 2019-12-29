<?php 

class Motor_model{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBrand(){
        $this->db->query('Select * from brand');
        return $this->db->resultSet();
    }

    public function getTipe()
    {
        $this->db->query('Select * from tipe');
        return $this->db->resultSet();
    }

    public function getAllMotor(){
        $this->db->query('select M.id_motor,M.nama,M.harga,L.nama_kota,T.nama_tipe,B.nama_brand from motor M join brand B on M.id_brand = B.id_brand JOIN lokasi L on M.id_kota = L.id_kota join tipe T on M.id_tipe = T.id_tipe where status = 0');
        return $this->db->resultSet();
    }

    public function getFindMotor($data){

        $this->db->query("select M.id_motor,M.nama,M.harga,L.nama_kota,T.nama_tipe,B.nama_brand from motor M join brand B on M.id_brand = B.id_brand JOIN lokasi L on M.id_kota = L.id_kota join tipe T on M.id_tipe = T.id_tipe 
                          where L.id_kota = :id_kota and T.id_tipe = :id_tipe and B.id_brand = :id_brand and status = 0");

        // $this->db->query("select * from motor where id_kota = :id_kota and id_tipe 
        //                 = :id_tipe and id_brand = :id_brand");

        $this->db->bind('id_kota',$data['location']);
        $this->db->bind('id_tipe',$data['tipe']);
        $this->db->bind('id_brand',$data['brand']);

        $this->db->execute();
        return $this->db->resultSet();
        
    }

    public function getNewIdMotor(){
        $data = $this->db->query('SELECT max(id_motor) as max from motor');
        return $this->db->resultSet();
    }

    public function tambahDataMotor($data){
            
        $this->db->query("INSERT INTO MOTOR (id_motor, id_client, nama, id_brand, id_tipe, id_kota, 
        harga,foto_motor,foto_bpkb,foto_stnk,description,status) VALUES 
        (:id_motor, :id_client, :nama, :id_brand, :id_tipe, :id_kota, :harga, :foto_motor, :foto_bpkb, :foto_stnk , :description,:status)");

        $this->db->bind('id_motor',$data['id']);
        $this->db->bind('id_client',$data['id_client']);
        $this->db->bind('nama',$data['title']);
        $this->db->bind('id_brand',$data['brand']);
        $this->db->bind('id_tipe',$data['tipe']);
        $this->db->bind('id_kota',$data['city']);
        $this->db->bind('harga',$data['harga']);
        $this->db->bind('foto_motor',$data['foto_motor']);
        $this->db->bind('foto_bpkb',$data['foto_bpkb']);
        $this->db->bind('foto_stnk',$data['foto_stnk']);
        $this->db->bind('description',$data['desc']);
        $this->db->bind('status',0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getMotorById($id){
        $this->db->query("select * from motor m join lokasi l on m.id_kota = l.id_kota join brand b on b.id_brand = m.id_brand join tipe t on t.id_tipe = m.id_tipe where id_motor = :id");
        $this->db->bind('id',$id);
        return $this->db->single();

    }

    public function getNamaClientById($id){
        $this->db->query("select c.nama, m.id_client from motor m join client c on c.id_client = m.id_client where m.id_motor = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getNamaMotorById($id){
        $this->db->query("select * from motor where id_client = :id");
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

    public function getNewIdOrder(){
        $data = $this->db->query('SELECT max(id_order) as max from orders');
        return $this->db->resultSet();
    }

    public function tambahDataOrder($data){
        $this->db->query("INSERT INTO `orders` (`id_order`, `tgl_order`, `tgl_pinjam`, `tgl_kembali`, `id_motor`, `id_client`,`total`,`bukti_transfer`) 
                          VALUES (:id_order, :tgl_order, :tgl_pinjam, :tgl_kembali, :id_motor, :id_client, :total, :bukti_transfer)");
        
        $this->db->bind('id_order',$data['id']);
        $this->db->bind('tgl_order',$data['cdate']);
        $this->db->bind('tgl_pinjam',$data['order_date']);
        $this->db->bind('tgl_kembali',$data['return_date']);
        $this->db->bind('id_motor',$data['id_motor']);
        $this->db->bind('id_client',$data['id_client']);
        $this->db->bind('total',$data['total']);
        $this->db->bind('bukti_transfer',$data['bukti_transfer']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStatusMotor($data){
        $this->db->query("UPDATE motor SET status = 1 where id_motor = :id_motor");
        $this->db->bind('id_motor',$data['id_motor']);
        $this->db->execute();
    }

    public function updateStatusReturnMotor($data){
        $this->db->query("UPDATE motor SET status = 0 where id_motor = :id_motor");
        $this->db->bind('id_motor',$data['id_motor']);
        $this->db->execute();
    }

    public function getRentedMotorById($id){
        $this->db->query('select M.id_motor,M.nama,M.status,O.tgl_kembali from motor M join orders O on M.id_motor = O.id_motor where O.id_client = :id and M.status = 1 LIMIT 1');
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

}
?>