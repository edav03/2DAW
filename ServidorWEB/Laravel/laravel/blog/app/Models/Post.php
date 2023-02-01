<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the PostController
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function usuarios(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Usuarios::class, 'user_id', 'id');
    }
}
