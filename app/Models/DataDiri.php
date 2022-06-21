<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiri extends Model
{
    protected $primarykey= 'id';
    protected $table = 'data_diri';
    protected $allowedFields = ['nama', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'status', 'alamat',
    'email', 'nama_sd', 'nama_smp', 'nama_sma', 'thn_lulus_sd', 'thn_lulus_smp', 'thn_lulus_sma', 'nama_univ', 'thn_lulus_univ'];
}
