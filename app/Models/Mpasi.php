<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpasi extends Model
{
    protected $table = 'mpasi';
    use HasFactory;
    protected $primarykey = "idmpasi";
    protected $guarded = [
        'id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function review(){
        return $this->hasMany(Review_Mpasi::class);
    }
}
