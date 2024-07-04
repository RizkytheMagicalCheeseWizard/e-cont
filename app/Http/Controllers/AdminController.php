<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //
    public function insert_schedule(Request $request){
        $validate = $request->validate([
            'city' => 'required|string|max:255',
            'jam_keberangkatan' => 'required|string|max:255' 
        ]);
        $insert = Schedule::create([
            'city' => $validate['city'],
            'jam_keberangkatan' => $validate['jam_keberangkatan']
        ]);
        return redirect('/admin/schedule');
    }

}
