<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $fillable = ['type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function current_transactions()
    {
        return $this->hasMany(CurrentTransaction::class);
    }

    public function past_transactions()
    {
        return $this->hasMany(PastTransaction::class);
    }
}
