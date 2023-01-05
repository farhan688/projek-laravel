<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = "students";
    protected $fillable = [
        'id',
        'nama_depan',
        'nama_belakang',
        'email',
        'no_telp',
        'npm',
        'jenjang_studi',
        'semester'
    ];
}
