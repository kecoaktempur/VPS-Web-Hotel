<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentTransaction extends Model
{
    use HasFactory;

    protected $table = 'current_transactions';
    protected $fillable = ['room_id', 'name', 'start_date', 'end_date', 'check_out_date', 'notes'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function expiring()
    {
        return $this->belongsTo(Expiring::class);
    }
}
