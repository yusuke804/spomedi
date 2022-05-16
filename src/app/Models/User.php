<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $primaryKey = "user_id";

    public function meditates(): HasMany
    {
        return $this->hasMany(Meditate::class, 'meditate_id');
    }
}
