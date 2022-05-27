<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = [
        'tanggal',
        'menu_pagi_id',
        'waktu_pagi',
        'menu_siang_id',
        'waktu_siang',
        'menu_malam_id',
        'waktu_malam',
        'user_id'
    ];

    public function setMenuPagiAttribute($value)
    {
        $this->attributes['menu_pagi_id'] = json_encode($value);
    }

    public function getMenuPagiAttribute($value)
    {
        return $this->attributes['menu_pagi_id'] = json_decode($value);
    }

    public function mpasi()
    {
        return $this->belongsTo(Mpasi::class, 'menu_pagi_id', 'menu_siang_id', 'menu_malam_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
