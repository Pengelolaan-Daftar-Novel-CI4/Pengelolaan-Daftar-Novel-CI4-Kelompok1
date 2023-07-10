<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    //menyambungkan ke dalam tabel novel secara langsung
    protected $table ='genre';
    //apabila akan insert di database makan di secara langsung akan memberikan id dengan menlanjutkan id yang sudah ada
    protected $primaryKey ='id_genre';
    //ketika insert menggunakan fungsi ci diakan melakukan autoincremen pada data yg kita tambahkan
    protected $useAutoIncrement = true;
    //mengisinkan apakah data dapat di update, delete dan insert pada kolom
    protected $allowedFields      = ['nama_genre', 'created_at', 'updated_at'];

    //fungsi untuk menampilkan seluruh data
    public function getAllData(){
        //return mengembalikan data
        return $this -> FindAll();
    }


    public function getDataById($id_genre){
        return $this -> find ($id_genre);
    }

    public function add(){
        $data["datagenre"] = $this->Genre->getAllData();
        return view("novel/add", $data);
    }

    public function addgenre(){
        $data["datagenre"] = $this->Genre->getAllData();
        return view("genre/addgenre", $data);

    }

    public function getGenreAll(){
        $builder = $this->db->table('genre');
        $builder ->select('genre.nama_genre');
        $query = $builder -> get ();
        return $query -> getResult();
    }

    
    


}