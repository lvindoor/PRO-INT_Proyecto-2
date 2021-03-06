<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function deliveryPoint() {
        return $this->belongsTo(DeliveryPoint::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
