<?php

namespace App\Models;

use CodeIgniter\Model;

class NovelModel extends Model
{
    //menyambungkan ke dalam tabel film secara langsung
    protected $table ='novel';
    //apabila akan insert di database makan di secara langsung akan memberikan id dengan menlanjutkan id yang sudah ada
    protected $primaryKey ='id';
    //ketika insert menggunakan fungsi ci diakan melakukan autoincremen pada data yg kita tambahkan
    protected $useAutoIncrement = true;
    //mengisinkan apakah data dapat di update, delete dan insert pada kolom
    protected $allowedFields      = ['judul', 'slug','id_genre', 'karya', 'sampul'];


    public function getAllDataJoin(){
        $query = $this -> db -> table("novel")
        -> select ("novel.*, genre.nama_genre")
        ->join ("genre", "genre.id_genre = novel.id_genre");
        return $query->get()->getResultArray();
    }

    //fungsi utnuk mencari data sesuai dengan id
    public function getDataById($id){
        return $this -> find ($id);
    }

    //fungsi utnuk mencari data sesuai dengan where/kondisi yang di cari
    public function getDataBy($data){
        return $this -> where ('judul', $data)-> findAll();
    }

    //fungsi yang di gunakan untuk menampilakan kolom tertentu pada tabel
    public function getFilmAll(){
        $builder = $this->db->table('novel');
        $builder ->select('novel.judul');
        $query = $builder -> get ();
        return $query -> getResult();
    }





}