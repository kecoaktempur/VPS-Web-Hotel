<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $fillable = ['name'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_photo');
    }

    public function review()
    {
        return $this->belongsTo(Review::class, 'review_photo');
    }
}
