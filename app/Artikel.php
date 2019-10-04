<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='Artikel';

    protected $fillable=[
        'judul','isi','user_id','kategori_artikel_id'
    ];

    protected $casts=[

    ];
}


