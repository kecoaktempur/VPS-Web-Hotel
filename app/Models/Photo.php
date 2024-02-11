<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $fillable = ['name'];

    public function types()
    {
        return $this->belongsToMany(Type::class, 'type_photo');
    }
}
