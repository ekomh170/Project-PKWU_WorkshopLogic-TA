<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WorkshopController extends Controller
{
    private $webAppUrl;

    public function __construct()
    {
        // URL Web App dari Google Apps Script
        $this->webAppUrl = env('GOOGLE_APPS_SCRIPT_URL'); // Pastikan URL disimpan di .env
    }

    // Tampilkan form daftar workshop
    public function index()
    {
        return view('workshops.register');
    }

    // Proses pendaftaran workshop
    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'workshop' => 'required|string',
            'message' => 'nullable|string|max:500',
        ]);

        try {
            // Kirim data ke Google Apps Script Web App
            $response = Http::post($this->webAppUrl, [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'workshop' => $validatedData['workshop'],
                'message' => $validatedData['message'] ?? '',
                'timestamp' => now()->format('Y-m-d H:i:s'), // Tambahkan timestamp untuk pencatatan
            ]);

            // Periksa respons dari Google Apps Script
            if ($response->successful() && isset($response->json()['status']) && $response->json()['status'] === 'success') {
                // Tambahkan link grup WA ke session
                $whatsappGroupLink = 'https://chat.whatsapp.com/IutV8oYZMz302DSEeuwS17'; // Ganti dengan link grup WhatsApp
                return redirect()->route('workshops.register')
                    ->with('success', 'Pendaftaran berhasil disimpan!')
                    ->with('wa_link', $whatsappGroupLink); // Kirim link grup WA
            } else {
                $errorMessage = $response->json()['message'] ?? 'Kesalahan tidak diketahui dari server.';
                return redirect()->route('workshops.register')->with('error', 'Gagal menyimpan data: ' . $errorMessage);
            }
        } catch (\Exception $e) {
            return redirect()->route('workshops.register')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
