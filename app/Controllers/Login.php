<?php namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
   }
   
   public function login_action()
{
   $user = new UserModel();

   $username = $this->request->getPost('username');
   $password = $this->request->getPost('password');

   if (empty($username) || empty($password)) {
      session()->setFlashdata('gagal', 'Mohon masukkan username dan password');
      return redirect()->to(base_url('login'));
   }

   $cek = $user->login($username, $password);

   if ($cek != null && $cek->username == $username && $cek->password == $password)
   {
      session()->set('username', $cek->username);
      session()->set('id', $cek->id);
      return redirect()->to(base_url('/novel/index'));
   } else {
      session()->setFlashdata('gagal', 'Username / Password salah');
      return redirect()->to(base_url('login'));
   }
}

}
