<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TicketMail;
use Illuminate\Support\Facades\Mail;

class TicketCon extends Controller
{
    //
    public function showTicket(){
        return view('ticket');
    }
    public function sendTicket(Request $request){
        $ticketMail= new TicketMail($request->email,$request->name,$request->description);
        Mail::to('admin@appticket.it')->send($ticketMail);
        return redirect()->back()->with(['success'=>'La tua mail è stata inviata!']);
    }
}
