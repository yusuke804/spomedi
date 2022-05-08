<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeditateGenre extends Model
{
    use HasFactory;
    protected $table = "meditate_genre";
    protected $primaryKey = "meditate_genre_id";

    const UPDATED_AT = null;
    const CREATED_AT = null;

   
}
