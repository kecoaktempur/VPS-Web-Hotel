<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $fillable = ['room_number', 'type_id', 'dispenser', 'magic_jar', 'rak_piring', 'alat_makan', 'meja_makan', 'dapur', 'living_room', 'microwave', 'kulkas', 'shower', 'waterheater', 'wastafel', 'closet', 'bathtub', 'ac', 'tv', 'single_bed', 'king_bed', 'queen_bed'];

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
