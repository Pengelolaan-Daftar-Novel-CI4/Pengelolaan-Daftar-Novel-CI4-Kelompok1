<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\NovelModel;
use App\Models\GenreModel;

class Novel extends BaseController
{
    //step 2
    protected $Novel;
    protected $Genre;
    //step 3 membuat fungsi construct untuk inisiasi class model(filmmodel)
    public function __construct()
    {
        //step 4 memanggil 
        $this -> Novel = new NovelModel();
        $this -> genre = new GenreModel();
    }

    public function index()
    {
        //step 4
        $data['novel'] = $this -> Novel -> getAllDatajoin();
        return view("novel/index", $data);
    }

    //fungsi yang akan diakses pada url nanti
    public function detail(){ 
    $data['datanovel'] = $this -> Novel -> getAllDataJoin();
    return view("novel/datanovel", $data);    
    }  

    public function detailNovel($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["novel"] = $this->Novel->getDataByID($id);
        return view("novel/detail", $data); 
    }

    public function sinopsis($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["novel"] = $this->Novel->getDataByID($id);
        return view("novel/sinopsis", $data); 
    }

    public function hapus($id)
    {
        $decryptedId = decryptUrl($id);
        $this->Novel->delete($decryptedId);
        session()->setFlashdata('success', 'Data berhasil dihapus.');

        return redirect()->to('/novel');
    }

    public function contact(){
        $data['contact'] = $this -> Novel -> getAllDataJoin();
        return view("novel/contact", $data);
    }
    
    public function about(){
        $data['about'] = $this -> Novel -> getAllDataJoin();
        return view("novel/about", $data);
    }

    public function add(){
        $data['genre'] = $this -> genre -> getAllData();
        $data["errors"] = session('errors');
        return view("novel/add", $data);
    }

    public function tambah(){
        $validation =$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom judul Harus Diisi'
                ]
            ],

            'slug' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom slug Harus Diisi'
                ]
            ],


            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom Genre Harus Diisi'
                ]
            ],

            'karya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom karya Harus Diisi'
                ]
            ],

            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom penerbit Harus Diisi'
                ]
            ],

        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $image = $this->request->getFile('sampul');

        //generate nama file yang unik
        $imageName = $image->getRandomName();
        //pindahkan file ke direktori penyimpanan
        $image->move(ROOTPATH . 'public/assets/sampul/', $imageName);

        $data = [
            'judul'=> $this->request->getPost('judul'),
            'slug'=> $this->request->getPost('slug'),
            'id_genre'=> $this->request->getPost('id_genre'),
            'karya'=> $this->request->getPost('karya'),
            'penerbit'=> $this->request->getPost('penerbit'),
            'sampul'=> $imageName,
            'sinopsis' => $this->request->getPost('sinopsis'),
        ];
        $this->Novel->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('/novel');
    }

    public function update($id)
    {
        $data["genre"]= $this->genre->getAllData();
        $data["errors"]= session('errors');
        $data["Novel"]= $this->Novel->getDataByID($id);
        return view("novel/edit", $data); 
    }

    public function edit(){
        $validation =$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom judul Harus Diisi'
                ]
            ],

            'slug' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom slug Harus Diisi'
                ]
            ],


            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom Genre Harus Diisi'
                ]
            ],

            'karya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom karya Harus Diisi'
                ]
            ],

            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom penerbit Harus Diisi'
                ]
            ],

            'sampul' => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,img/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded'=> 'kolom sampul harus Berisi File.',
                    'mime_in' => 'Tipe file pada kolom cover harus berupa JPG,JPEG,atau PNG',
                    'max_size' => 'ukuran file pada kolom cover melebihi batas maksimum'
                ]
            ],

        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        //ambil data lama
        $datanovel = $this->novel->find($this->request->getPost('id'));

        //tambah request id
        $data = [
            'id' => $this->request->getPost('id'),
            'judul' => $this->request->getPost('judul'),
            'slug' => $this->request->getPost('slug'),
            'id_genre' => $this->request->getPost('id_genre'),
            'karya' => $this->request->getPost('karya'),
            'penerbit' => $this->request->getPost('penerbit'),
            'sinopsis' => $this->request->getPost('sinopsis'),
        ];

        //cek apakah ada sampul yg di upload
        $sampul = $this->request->getFile('sampul');
        if ($sampul->isValid() && !$sampul->hasMoved()){
            //generate nama file unik
            $imageName = $sampul->getRandomName();
            //pindahkan file ke direktori
            $sampul->move(ROOTPATH . 'public/assets/cover/', $imageName);
            //hapus file gambar lama jika ada
            if($datanovel['sampul']){
                unlink(ROOTPATH . 'public/assets/cover/' . $novel['cover']);
            }
            //jika ada tambahkan array cover di variable $data
            $data['sampul'] = $imageName;
        }
        $this->novel->save($data);
        session()->setFlashdata('success', 'Data berhasil diperbarui.'); // tambahkan ini
        return redirect()->to('/novel');
    }

}