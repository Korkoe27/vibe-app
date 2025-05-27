<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }
}
