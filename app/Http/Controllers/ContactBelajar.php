<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactBelajar extends Controller
{
    public function contact()
    {
        return view('ahlan');
    }

    public function sendMail(Request $request){
        // code to send email
        // return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim');
        $details=[
            'nama'=>  $request->nama,
            'email'=>  $request->email,
            'telpon'=>  $request->telpon,
            'alamat'=>  $request->alamat
        ];

        \Mail::to('district_5@masalirsyad.sch.id')->send(new \App\Mail\ContactMail($details));
        return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim');
    }
}
