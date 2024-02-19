<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = ['name', 'message', 'rating'];

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'review_photo');
    }
}
