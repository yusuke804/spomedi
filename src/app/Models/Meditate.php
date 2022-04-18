<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meditate extends Model
{
    use HasFactory;
    private $table = "meditate";
    private $primaryKey = "meditate_id";
}
