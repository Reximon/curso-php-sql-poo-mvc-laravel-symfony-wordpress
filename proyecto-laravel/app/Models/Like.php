<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    // Relacion Many to One / De Muchos a uno
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relacion Many to One / De Muchos a uno
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
