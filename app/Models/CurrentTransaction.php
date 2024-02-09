<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentTransaction extends Model
{
    use HasFactory;

    protected $table = 'current_transactions';
    protected $fillable = ['room_id', 'name', 'start_time', 'end_time', 'check_out_time', 'notes'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function expiring()
    {
        return $this->belongsTo(Expiring::class);
    }
}
