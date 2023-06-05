<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'kelas', 'tgl_lahir', 'jk'];

    protected $fillable = ['nama', 'kelas', 'tgl_lahir', 'jk'];

    public $timestamps = true;
}
