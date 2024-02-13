<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePhoto extends Model
{
    use HasFactory;

    protected $table = 'type_photo';
    protected $fillable = ['type_id', 'photo_id'];
}
