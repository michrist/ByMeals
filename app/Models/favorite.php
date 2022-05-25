<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
    protected $table = "favorits";
    protected $primarykey = "idfavorit";
    protected $fillable = [
        'idmpasi',
        'id',
    ];
    public $timestamps = false;
    public $guarded = [];
}
