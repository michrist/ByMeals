<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    protected $table = 'input_user';
    protected $primarykey = "id_input";
    protected $fillable = [
        'user_id',
        'nama_menu',
        'deskripsi_menu',
        'umur_bayi',
        'bahan_menu',
        'langkah_memasak',
        'created_at',
        'updated_at',
        'status'
    ];
}
