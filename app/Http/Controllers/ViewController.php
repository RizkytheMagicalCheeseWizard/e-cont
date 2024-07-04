<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\TypeTicket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function view(){
        $data_schedule = Schedule::all();
        $data_user = User::all();
        $data_type = TypeTicket::all();
        $data_booking = Booking::where('users_id',Auth::id())-> with(['schedule','typeticket','user'])->get();

        return view('landing-page',compact('data_schedule','data_type','data_booking','data_user'));
    }
    
}
