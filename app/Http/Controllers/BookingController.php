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
        $validate= $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'type_ticket_id' => 'required|exists:ticket_types,id',
            'booking_date' => 'required|date',
            'quantity' => 'required|integer|min:1'
        ]);
        $userid = Auth::id();
        $typeticket = TypeTicket::findOrFail($validate['type_ticket_id']);
        $total_price = $validate['quantity'] * $typeticket->total_price;
        Booking::create([
            'jadwal_id' => $validate['jadwal_id'],
            'type_ticket_id' => $validate['type_ticket_id'],
            'users_id' => $userid,
            'quantity' => $validate['quantity'],
            'total_price' => $total_price,
            'booking_date' => $validate['booking_date'],
        ]);
        return redirect('/')->with('success','Booking berhasil ditambahkan');
    }
}
