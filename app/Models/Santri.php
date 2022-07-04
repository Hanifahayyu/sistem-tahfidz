<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $fillable = [
        'id',
        'user_id',
        'program_id',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat_lengkap',
        'nama_ibu',
        'nama_ayah',
        'created_at',
        'updated_at',
    ];
    function get_data_all(){
        
    }
}
