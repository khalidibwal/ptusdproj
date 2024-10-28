<?php

namespace App\Http\Controllers;

use App\odel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.component.contact.home');
    }
    
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::send('Email.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('khalidblacklist@gmail.com'); // Change this to your real email
            $mail->subject($request->subject);
        });

        return back()->with('success', 'Message sent successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function show(odel $odel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function edit(odel $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, odel $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function destroy(odel $odel)
    {
        //
    }
}
