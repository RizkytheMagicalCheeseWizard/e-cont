<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\TypeTicket;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function view(){
        $data_schedule = Schedule::all();

        $data_type = TypeTicket::all();
        $data_booking = Booking::all();

        return view('landing-page',compact('data_schedule','data_type','data_booking'));
    }
    
}
