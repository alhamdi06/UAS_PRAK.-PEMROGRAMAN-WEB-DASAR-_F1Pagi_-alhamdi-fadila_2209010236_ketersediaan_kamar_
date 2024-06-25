<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', // contoh atribut yang dapat diisi
    ];

    // Jika Anda memiliki relasi dengan model lain, Anda dapat mendefinisikannya di sini
    // Contoh:
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
