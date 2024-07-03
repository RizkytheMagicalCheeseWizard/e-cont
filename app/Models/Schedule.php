<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $schedule = 'schedules';
    protected $guarded = [];
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
