<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'jam_keberangkatan'
    ];
    protected $schedule = 'schedules';
    protected $guarded = [];
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
