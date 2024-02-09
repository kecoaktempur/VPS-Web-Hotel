<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastTransaction extends Model
{
    use HasFactory;

    protected $table = 'past_transactions';
    protected $fillable = ['room_id', 'name', 'start_time', 'end_time', 'check_out_time', 'notes'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
