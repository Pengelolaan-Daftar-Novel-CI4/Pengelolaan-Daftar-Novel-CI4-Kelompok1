<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
	protected $allowedFields = ['username', 'password'];


	public function login($username, $password)
{
    // Mengubah penggunaan objek koneksi menjadi objek query builder
    $query = $this->db->table('users')
                     ->where('username', $username)
                     ->where('password', $password)
                     ->get();

    if ($query->getNumRows() == 1) {
        // Jika data pengguna ditemukan, kembalikan objek pengguna
        return $query->getRow();
    } else {
        // Jika data pengguna tidak ditemukan, kembalikan null
        return null;
    }
}

    
}