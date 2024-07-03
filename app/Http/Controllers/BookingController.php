<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\TypeTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    public function booking(Request $request){
        $userid = Auth::id();
        $validate= $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'ticket_type_id' => 'required|exists:ticket_types,id',
            'booking_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0'
        ]);
        $typeticket = TypeTicket::findOrFail($request->ticket_type_id);
        $price = $typeticket->price;


        $total_price = $price * $request->quantity;
        Booking::create([
            'jadwal_id' => $validate['jadwal_id'],
            'type_ticket_id' => $validate['type_ticket_id'],
            'users_email' => Auth::user()->email,
            'quantity' => $validate['quantity'],
            'total_price' => $total_price,
            'booking_date' => $validate['booking_date'],
            'user_id' => $userid
        ]);
        return redirect()->route('landing-page')->with('success');
    }
}
