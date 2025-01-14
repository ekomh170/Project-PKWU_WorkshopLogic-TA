<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class WorkshopController extends Controller
{
    private $webAppUrl;

    public function __construct()
    {
        // URL aplikasi web Google untuk memproses data pendaftaran
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbw4pX1iG6wxGyh1h1RPSJ8jG_t5Jn0iGWHSnCwT22bp-2YUOSkuYEnWG5qZIIR7_Jgi2w/exec';
    }

    public function index()
    {
        // Menampilkan halaman formulir pendaftaran workshop
        return view('workshops.register');
    }

    public function register(Request $request)
    {
        // Menambahkan log untuk melihat data request yang masuk
        logger()->info('Data Request:', $request->all());

        // Validasi data yang diterima dari form
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'workshop' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'message' => 'nullable|string',
            'jenis_workshop' => 'required|string',
            'harga' => 'required|numeric',
            'konfirmasi_pembayaran' => 'required|string',
        ]);

        // Cek jika ada error
        if ($validator->fails()) {
            // Kirim kembali error ke view
            logger()->error('Validation Error:', $validator->errors()->all());
            return redirect()->route('workshops.register')->withErrors($validator)->withInput();
        }

        try {
            // Data yang sudah divalidasi
            $validatedData = $validator->validated();

            // Menambahkan log untuk melihat data yang divalidasi
            logger()->info('Validated Data:', $validatedData);

            // Menyaring data untuk memastikan hanya data yang diinginkan yang dikirim
            $dataToSend = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'workshop' => $validatedData['workshop'],
                'status' => $validatedData['status'],
                'location' => $validatedData['location'],
                'message' => $validatedData['message'] ?? '',
                'jenis_workshop' => $validatedData['jenis_workshop'],
                'harga' => $validatedData['harga'],
                'konfirmasi_pembayaran' => $validatedData['konfirmasi_pembayaran'],
            ];

            // Kirim data ke Google Web App
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->webAppUrl, $dataToSend);

            // Log response dari server
            logger()->info('Response from Google Apps Script:', $response->json());

            // Jika respons sukses
            if ($response->successful()) {
                // Menyaring response dan memeriksa status
                $responseJson = $response->json();
                // dd($responseJson);
                if (isset($responseJson['status']) && $responseJson['status'] === 'success') {
                    // Simpan email ke cache untuk mencegah pendaftaran ulang
                    cache()->put($validatedData['email'], true, now()->addDays(7));

                    // Redirect dengan pesan sukses
                    $whatsappGroupLink = 'https://chat.whatsapp.com/IutV8oYZMz302DSEeuwS17';
                    return redirect()->route('workshops.register')
                        ->with('success', 'Pendaftaran berhasil disimpan!')
                        ->with('wa_link', $whatsappGroupLink);
                } else {
                    // Jika server memberikan kesalahan
                    $errorMessage = $responseJson['message'] ?? 'Kesalahan tidak diketahui dari server.';
                    logger()->error('Error dari Google Apps Script:', [
                        'response' => $responseJson,
                    ]);
                    return redirect()->route('workshops.register')->with('error', 'Gagal menyimpan data: ' . $errorMessage);
                }
            } else {
                // Jika response gagal
                $errorMessage = $response->json('message') ?? 'Kesalahan tidak diketahui dari server.';
                logger()->error('Error dari Google Apps Script:', [
                    'response' => $response->json(),
                ]);
                return redirect()->route('workshops.register')->with('error', 'Gagal menyimpan data: ' . $errorMessage);
            }
        } catch (\Exception $e) {
            // Menambahkan log untuk men-debug exception
            logger()->error('Exception in WorkshopController@register:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->route('workshops.register')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
