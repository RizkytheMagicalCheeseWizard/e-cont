<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
class AdminController extends Controller
{
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
    public function edit_schedule($id){
        $data_schedule = Schedule::findOrFail($id);
        return view('admin.update_admin',compact('data_schedule'));
    }
    public function update_schedule(Request $request,$id){
        $data_schedule = Schedule::findOrFail($id);
        $validate = $request->validate([
            'city' => 'required|string|max:255',
            'jam_keberangkatan' => 'required|string|max:255'
        ]);
        $data_schedule->city = $validate['city'];
        $data_schedule->jam_keberangkatan = $validate['jam_keberangkatan'];
        $data_schedule->save();
        
        return redirect('/admin/schedule');

    }
    public function delete_schedule($id){
        $data_schedule = Schedule::findOrFail($id);
        $data_schedule->delete();
        return redirect('/admin/schedule');
    }

}
