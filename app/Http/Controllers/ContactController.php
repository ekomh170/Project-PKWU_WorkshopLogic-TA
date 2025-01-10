<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ambil data dari form
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Nomor WhatsApp tujuan
        $phoneNumber = "6285772586141"; 

        // Format pesan WhatsApp
        $whatsappMessage = "Halo, nama saya $name.\nEmail: $email\nSubjek: $subject\nPesan: $message";

        // Redirect ke WhatsApp
        $url = "https://wa.me/$phoneNumber?text=" . urlencode($whatsappMessage);

        return redirect($url);
    }
}
