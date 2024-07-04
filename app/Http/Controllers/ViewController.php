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
    public function view_user(){
        $data_schedule = Schedule::all();
        $data_user = User::all();
        $data_type = TypeTicket::all();
        $data_booking = Booking::where('users_id',Auth::id())-> with(['schedule','typeticket','user'])->get();

        return view('landing-page',compact('data_schedule','data_type','data_booking','data_user'));
    }
    public function view_schedule(){
        $data_schedule = Schedule::all();
        return view('admin.schedule',compact('data_schedule'));
    }
    public function view_ticket(){
        $data_type = TypeTicket::all();
        return view('admin.ticket',compact('data_type'));
    }
    public function view_client(){
        $data_user = User::where('role','member')->get();

        return view('admin.client',compact('data_user'));
    }
    
}
