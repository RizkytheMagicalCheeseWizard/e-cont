<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'schedule_id',
        'ticket_type_id',
        'quantity',
        'total_price',
        'booking_date'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
    public function typeticket(){
        return $this->belongsTo(TypeTicket::class,'ticket_type_id');
    }
}
