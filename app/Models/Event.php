<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;


    protected $table = 'events';
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticket_types()
    {
        return $this->hasMany(TicketType::class);
    }

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function subcategory(){
        return $this->belongsTo(Categories::class);
    }

    public function media(){
        return $this->hasMany(Media::class);
    }
}
