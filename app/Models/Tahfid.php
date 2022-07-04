<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahfid extends Model
{
    use HasFactory;
    protected $table = 'tahfid';
    protected $fillable = [
        'nama',
        'kehadiran',
        'kategori',
        'jml_halaman',	
    ];
}
