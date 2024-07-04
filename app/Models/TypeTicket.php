<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTicket extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'class',
        'price'
    ];
    protected $type = 'type_tickets';
    protected $guarded = []; 
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
