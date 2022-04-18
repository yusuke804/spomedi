<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meditate extends Model
{
    use HasFactory;
    protected $table = "meditate";
    protected $primaryKey = "meditate_id";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
