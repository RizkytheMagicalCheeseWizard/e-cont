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
            'jadwal_id' => 'required|exists:schedules,id',
            'type_ticket_id' => 'required|exists:type_tickets,id',
            'booking_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0'
        ]);
        if(!isset($validate['total_price'])){
            $typeticket = TypeTicket::findOrFail($validate['type_ticket_id']);
            $validate['total_price'] = $validate['quantity'] * $typeticket->price;
        }
        
        $booking = Booking::create([
            'jadwal_id' => $validate['jadwal_id'],
            'type_ticket_id' => $validate['type_ticket_id'],
            'users_id' => Auth::id(),
            'quantity' => $validate['quantity'],
            'total_price' => $validate['total_price'],
            'booking_date' => $validate['booking_date']
        ]);

        return redirect('/');
    }
}
