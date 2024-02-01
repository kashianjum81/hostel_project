<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkavailabilty;
use App\Models\Reservation;
use App\Models\Room;
use Symfony\Component\HttpKernel\DependencyInjection\ResettableServicePass;

class BookingController extends Controller
{

    public function index(){
        return view('index');
    }

    public function userrecord(){
        $checkseat = Checkavailabilty::first();
        return view('reservationform', compact('checkseat'));
    }
    public function selectroom(){
        $selectedroom = Room::latest()->first();
        return view('room', compact('selectedroom'));
    }

    public function update(Request $request){

        $checkseat = Checkavailabilty::first();
        $checkseat->bookingdate= $request->bookingdate;
        $checkseat->no_persons= $request->no_persons;
        $checkseat->are_you_student= $request->are_you_student;
        $checkseat->save();
        return redirect()->route('select-room');
    }

    public function selectedroom(Request $request){
     $selectedroom= new Room();
     $selectedroom->selected_room = $request->selected_room;
     $selectedroom->save();
     return redirect()->route('userrecord');

    }

    public function reservationform(Request $request){
        // dd($request->all());

        $reservationform = new Reservation();
        $reservationform->name = $request->name;
        $reservationform->phone =$request->phone;
        $reservationform->email =$request->email;
        $reservationform->bookingdate =$request->bookingdate;
        $reservationform->selected_room =$request->selected_room;
        $reservationform->mess =$request->mess;
        $reservationform->complain =$request->complain;
        $reservationform->save();
        return redirect()->route('booking.com');


    }
}
