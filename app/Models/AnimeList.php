<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeList extends Model
{
    use HasFactory;
    protected $table = 'anime_lists';
    protected $fillable = [
        'name',
        'is_watched', 
        'display_photo'
    ];
}
