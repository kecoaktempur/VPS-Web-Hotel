<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expiring extends Model
{
    use HasFactory;

    protected $table = 'expirings';
    protected $fillable = ['is_read', 'is_checked'];

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
