<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = "matakuliah";

    protected $fillable = [
        'nama_matkul',
        'kode',
        'jurusan_id',
        'dosen_id'
    ];
}
