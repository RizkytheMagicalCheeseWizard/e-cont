<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'jadwal_id',
        'type_ticket_id',
        'users_id',
        'quantity',
        'total_price',
        'booking_date'
    ];
    protected $booking = 'bookings'; 
    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class,'jadwal_id');
    }
    public function typeticket(){
        return $this->belongsTo(TypeTicket::class,'type_ticket_id');
    }
}
