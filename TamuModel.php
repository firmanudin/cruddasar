<?php
namespace App\Models;
use CodeIgniter\Model;

class TamuModel extends Model{
    protected $table = 'daftar_tamu';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_berkunjung', 'nama_tamu', 'alamat'];
}