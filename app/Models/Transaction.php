<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = ['room_id', 'name', 'start_time', 'end_time'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function expiring()
    {
        return $this->belongsTo(Expiring::class);
    }
}
