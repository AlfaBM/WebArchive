<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'id_buku';

    // relasi tabel
    public function mapel(){
        return $this->hasOne(mapel::class, 'id_mapel', 'id_mapel');
    }

    public function materi(){
        return $this->hasOne(materi::class, 'id_materi', 'id_materi');
    }

    // fungsi database

    public function scopeDisplay(){
        $content = book::with('mapel', 'materi');
        return $content;
    }
}
