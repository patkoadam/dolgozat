<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['cim', 'mufaj','szerzo','kiadas', 'genre_id'];

    public function genres()
    {
        return $this->belongsTo(genre::class, 'genre_id');
    }

    public function loans()
    {
        return $this->hasMany(genre::class);
    }
}
