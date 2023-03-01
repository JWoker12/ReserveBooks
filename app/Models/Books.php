<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    protected $fillable = [
        'id',
        'title',
        'author',
        'description'
    ];
}
