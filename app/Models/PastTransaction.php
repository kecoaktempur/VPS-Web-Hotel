<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastTransaction extends Model
{
    use HasFactory;

    protected $table = 'past_transactions';
    protected $fillable = ['room_id', 'start_date', 'end_date', 'check_out_date', 'notes'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
