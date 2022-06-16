<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa396';
    protected $fillable = [
        'nim', 'nama', 'gender', 'jurusan', 'bidang_minat'
    ];

    public $timestamps = false;
}