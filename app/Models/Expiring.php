<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expiring extends Model
{
    use HasFactory;

    protected $table = 'expirings';
    protected $fillable = ['transaction_id', 'is_read'];

    public function transaction()
    {
        return $this->hasOne(CurrentTransaction::class);
    }
}
