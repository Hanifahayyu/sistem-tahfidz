<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'id',	
        'kelas_kode',	
        'updated_at',	
        'kelas_nama',	
        'kelas_tingkat',	
        'created_at',
    ];
    function get_data_all(){
        
    }
}
