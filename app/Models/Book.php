<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'description',
        'author_id',
        'status',
    ];

    protected $casts = [
        'id' => 'string',
        'author_id' => 'string',
    ];

    //protected $with = ['author'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
