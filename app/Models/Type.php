<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';
    protected $fillable = ['name', 'size', 'price', 'description'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'type_photo');
    }
}
