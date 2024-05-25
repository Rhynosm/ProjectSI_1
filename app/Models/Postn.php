<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postn extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'namapel',
        'penyelenggara',
        'tanggalmulai',
        'tanggalberakhir',
        'biaya',
    ];
}
