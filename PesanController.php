<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index() {

        return view('pesan', ['pesan' => session('pesan', [])]);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Menyimpan pesan ke session
        $pesan = session('pesan', []);
        $pesan[] = $validatedData;
        session(['pesan' => $pesan]);

        // Redirect ke halaman daftar pesan dengan pesan baru
        return redirect('/pesan');
    }
}
