<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;
    
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'title',
        'description',
        'author_id',
        'gender_id',
        'price',
        'cover_url'
    ];

    protected $casts = [
        'id' => 'string',
        'author_id' => 'string',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    //protected $with = ['author'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
