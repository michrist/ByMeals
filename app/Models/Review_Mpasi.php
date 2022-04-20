<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_Mpasi extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function user(){
        return $this->belongsTo(Artikel::class);
    }
    public function review(){
        return $this->hasMany(Mpasi::class);
    }
}
