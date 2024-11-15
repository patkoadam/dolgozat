<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class loan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['email', 'elvive', 'visszahozva'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
