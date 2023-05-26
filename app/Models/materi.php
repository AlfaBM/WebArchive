<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $table = 'materi';

    protected $primaryKey = 'id_materi';

    public function book()
    {
        return $this->belongsTo(book::class);
    }

    public function scopeMateriget()
    {
        return materi::paginate(8);;
    }
}
