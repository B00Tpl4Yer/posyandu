<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilStatusGizi;
use App\Models\HasilBeratBadan;
use App\Models\Resep;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PenggunaTerdaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:pengguna terdaftar']);
    }

    public function index()
    {
        //$penggunaterdaftar = User::role('pengguna terdaftar')->get();
        //return view('penggunaterdaftar.index', compact('penggunaterdaftar'));
    }
    public function cekStatusGizi()
    {
        return view('penggunaterdaftar.cek-status-gizi');
    }
    public function hitungStatusGizi(Request $request)
    {
        $usiaBulan = $request->input('usia_bulan');
        $beratBadan = $request->input('berat_badan');
        $tinggi = $request->input('tinggi');
        $tinggiM = $tinggi / 100;
        $nilaiIMT = $beratBadan / ($tinggiM * $tinggiM);
        if ($usiaBulan >= 0 && $usiaBulan <= 60) {
            if ($nilaiIMT < 16) {
                $statusGizi = 'Kurang Gizi';
            } elseif ($nilaiIMT >= 16 && $nilaiIMT < 18.5) {
                $statusGizi = 'Gizi Kurang';
            } elseif ($nilaiIMT >= 18.5 && $nilaiIMT < 24) {
                $statusGizi = 'Gizi Baik';
            } else {
                $statusGizi = 'Kelebihan Gizi';
            }
        }
        $user = Auth::user();
        HasilStatusGizi::create([
            'user_id' => $user->id,
            'tanggal' => now(),
            'usia_bulan' => $usiaBulan,
            'tinggi' => $tinggi,
            'berat_badan' => $beratBadan,
            'status_gizi' => $statusGizi,
        ]);
        return view('penggunaterdaftar.hasil-status-gizi', compact('statusGizi'));
    }

    public function riwayatStatusGizi()
    {
        $user = Auth::user();
        $riwayatStatusGizi = HasilStatusGizi::where('user_id', $user->id)->orderBy('tanggal', 'desc')->get();
        return view('penggunaterdaftar.riwayat-status-gizi', compact('riwayatStatusGizi'));
    }

    public function cekBeratBadanIdeal()
    {
        return view('penggunaterdaftar.cek-berat-badan-ideal');
    }
    public function hitungBeratBadanIdeal(Request $request)
    {
        $beratBadan = $request->input('berat_badan');
        $tinggi = $request->input('tinggi');
        $nilaiAkhir = number_format(($beratBadan / ($tinggi / 100) ** 2), 2);
        if ($nilaiAkhir >= 18 && $nilaiAkhir <= 24) {
            $hasil = 'Sangat Sehat';
        } elseif ($nilaiAkhir >= 12 && $nilaiAkhir <= 16) {
            $hasil = 'Cukup Sehat';
        } else {
            $hasil = 'Kurang Sehat';
        }
        $user = Auth::user();
        HasilBeratBadan::create([
            'user_id' => $user->id,
            'tanggal' => now(),
            'tinggi' => number_format($tinggi, 2),
            'berat_badan' => number_format($beratBadan, 2),
            'hasil' => $hasil,
        ]);
        return view('penggunaterdaftar.hasil-berat-badan', compact('hasil'));
    }

    public function riwayatberatbadan()
    {
        $user = Auth::user();
        $riwayatberatbadan = HasilBeratBadan::where('user_id', $user->id)->orderBy('tanggal', 'desc')->get();
        return view('penggunaterdaftar.riwayat-berat-badan', compact('riwayatberatbadan'));
    }
    public function pembelajaranAnak()
    {
    }

    public function kirimFeedbackForm()
    {
        return view('penggunaterdaftar.kirim_feedback');
    }

    public function kirimFeedback(Request $request)
    {
        $request->validate([
            'pesan' => 'required|string',
        ]);

        $feedback = new Feedback([
            'user_id' => auth()->id(),
            'pesan' => $request->input('pesan'),
        ]);

        $feedback->save();

        return redirect()->route('dashboard')->with('success', 'Feedback berhasil dikirim.');
    }

    public function lihatResep()
    {
        $user = Auth::user();
        $reseps = Resep::forUser($user->id)->get();

        return view('penggunaterdaftar.lihat-resep', compact('reseps'));
    }
}
