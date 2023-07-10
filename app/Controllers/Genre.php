<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;

    public function __construct()
    {
        //step 4 memanggil 
        $this -> Genre = new GenreModel();
    }

    public function index()
    {
        $data['dataGenre'] = $this -> Genre -> getAllData();
        return view("novel/datagenre", $data);
    }

    public function addgenre(){
        $data['genre'] = $this -> Genre -> getAllData();
        $data["errors"] = session('errors');
        return view("novel/addgenre", $data);
    }
      

    public function update($id_genre)
    {
        $decryptedId = decryptUrl($id_genre);
        $data["errors"] = session('errors');
        $data["datagenre"] = $this-> Genre -> getDataByID ($id_genre);
        return view("novel/editgenre", $data);
    }

}