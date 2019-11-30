<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //isinya: nama tabel dan isi field
    protected $table = 'tbl_siswa';
    protected $primaryKey = 'NIS';
    protected $fillable = ['NIS', 'NAMA', 'Alamat'];
}
