<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mapel extends Model
{
    protected $table = 'mapel';

    protected $primaryKey = 'id_mapel';

    public function book(){
        return $this->belongsTo(book::class);
    }

     public function scopeMapelget(){
        return mapel::paginate(8);;
     }
}
