<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'vehicle_id',
        'user_id',
        'approve_rent',
        'approve_spv',
        'start_date',
        'end_data'
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function spv() {
        return $this->belongsTo(User::class, 'approve_rent', 'id');
    }

    public function rent() {
        return $this->belongsTo(User::class, 'approve_spv', 'id');
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
}
