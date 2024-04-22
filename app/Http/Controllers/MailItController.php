<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailIt;

class MailItController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return (new MailMessage)
        //             ->line('Hi!')
        //             ->subject('Reset Password')
        //             ->line('You are receiving this email so you can reset the password for your account')
        //             ->action('Reset Password', "wipiwopi" )
        //             ->line("If you didn't request this, please ignore this email.")
        //             ->line('Thank you!');

        $correoDestino = 'kcampos@ing.ucsc.cl';
        $data = [
            // Datos que desees pasar al correo, por ejemplo el nombre del destinatario, etc.
        ];

        Mail::to($correoDestino)->send(new MailIt($data));

        // return view("pages.MailIt");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
