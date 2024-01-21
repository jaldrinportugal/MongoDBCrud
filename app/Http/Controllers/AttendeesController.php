<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendees;

class AttendeesController extends Controller
{
    public function index()
    {
        $attendee = Attendees::all();
        return view('attendee')->with('attendees', $attendee);
    }

    function save_attendees(Request $request){
        $validatedData = $request->validate([
            'Id' => 'integerIncrements',
            'Attendees' => 'required|string|max:500',
            'Phone' => 'required|string|max:500',
        ]);

        Attendees::create($validatedData);

        return back();
    }

    function delete_attendees($id){
        $attendees = Attendees::find($id);
        $attendees->delete();
        return back();
    }

    public function update_attendees($id){
        $attendees = Attendees::find($id);
        return view('update_attendees', compact('attendees'));
    }

    public function save_updated_attendees(Request $request, $id){
        $attendees = Attendees::find($id);
        $attendees->Attendees = $request->update_event_attendee;
        $attendees->Phone = $request->update_phone;
        $attendees->save();

        return redirect()->route('attendee');
    }
}
