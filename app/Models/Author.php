<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $casts = [
        'id' => 'string',
    ];

    //protected $with = ['books'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
