<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use App\Models\TypeTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    
    public function booking(Request $request){
        
        $validate= $request->validate([
            'jadwal_id' => 'required|exists:schedules,id',
            'type_ticket_id' => 'required|exists:type_tickets,id',
            'booking_date' => ['required','date',
            function ($attribute,$value,$fail){
                if(Carbon::parse($value)->lte(Carbon::today())){
                    $fail('The booking date must be a future date');
                }
            }
        ],
            'quantity' => 'required|integer|min:1',
        ]);
        if(!isset($request->total_price)){
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
    public function edit($id){

        $data_booking = Booking::findOrFail($id);
        $data_schedule = Schedule::all();
        $data_type = TypeTicket::all();
        return view('edit',compact('data_booking','data_schedule','data_type'));
    }
    public function update(Request $request,$id){
        $booking = Booking::findOrFail($id);
        $validate = $request->validate([
            'jadwal_id' => 'required|exists:schedules,id',
            'type_ticket_id' => 'required|exists:type_tickets,id',
            'booking_date' => [
                'required',
                'date',
                function ($attribute,$value,$fail)use ($booking){
                    $newDate = Carbon::parse($value);
                    $oriDate = Carbon::parse($booking->booking_date);
                    if($newDate->lt($oriDate)){
                        $fail('The Booking date must be after the original booking date');
                    }
                }
        
            ],
            'quantity' => 'required|integer|min:1',

        ]);
        if(!isset($request->total_price)){
            $typeticket = TypeTicket::findOrFail($validate['type_ticket_id']);
            $totalprice = $validate['quantity'] * $typeticket->price;
        }
        $booking->jadwal_id = $validate['jadwal_id'];
        $booking->type_ticket_id = $validate['type_ticket_id'];
        $booking->booking_date = $validate['booking_date'];
        $booking->quantity = $validate['quantity'];
        $booking->total_price = $totalprice;
        $booking->save();

        return redirect('/');

    }
}
