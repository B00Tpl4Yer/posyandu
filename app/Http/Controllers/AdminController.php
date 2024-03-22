<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Resep;
use App\Models\Feedback;
use App\Models\User;
use App\Models\HasilStatusGizi;
use App\Models\HasilBeratBadan;
use App\Models\videopembelajarananak;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin')->except('artikelPublik');
    }


//    public function index()
//    {
//        $admins = User::role('admin')->get();
//
//        return view('admin.index', compact('admins'));
//    }
    public function artikelPublik()
    {
        $artikels = Artikel::where('public', true)->get();
        return view('welcome', compact('artikels'));
    }

    public function kelolaArtikel()
    {
        $artikels = Artikel::all();

        return view('admin.kelola-artikel', compact('artikels'));
    }
    public function tambahArtikelform()
    {
        return view('admin.tambah-artikel');
    }
    public function tambahArtikel(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'konten' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:20048', // Validasi untuk foto
        ]);

        // Mengunggah dan menyimpan foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('artikel'), $fotoPath);
        }

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->penulis = $request->penulis;
        $artikel->tanggal_posting = now();
        $artikel->konten =nl2br(e($request->konten));
        $artikel->foto = $fotoPath;
        $artikel->public = true;
        $artikel->user_id = Auth::user()->id;
        $artikel->save();

        return redirect()->route('admin.kelola-artikel')->with('success', 'Artikel berhasil ditambahkan');
    }


    public function editArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('admin.edit-artikel', compact('artikel'));
    }

    public function updateArtikel(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'penulis' => 'required',
            'konten' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:20048',
        ]);

        $artikel = Artikel::findOrFail($id);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('artikel'), $fotoPath);
        }

        $artikel->judul = $request->judul;
        $artikel->foto = $fotoPath;
        $artikel->penulis = $request->penulis;
        $artikel->konten = nl2br(e($request->konten));
        $artikel->save();

        return redirect()->route('admin.kelola-artikel')->with('success', 'Artikel berhasil diperbarui');
    }

    public function hapusArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('admin.kelola-artikel')->with('success', 'Artikel berhasil dihapus');
    }
    public function lihatHasilStatusGizi()
    {
        $riwayatStatusGizi = HasilStatusGizi::orderBy('tanggal', 'desc')->get();
        $penggunaTerdaftar = User::role('pengguna terdaftar')->get();

        return view('admin.riwayat-status-gizi', compact('riwayatStatusGizi', 'penggunaTerdaftar'));
    }

    public function lihatHasilBeratBadan()
    {
        $riwayatberatbadan = HasilBeratBadan::orderBy('tanggal', 'desc')->get();

        $penggunaTerdaftar = User::role('pengguna terdaftar')->get();

        return view('admin.riwayat-berat', compact('riwayatberatbadan', 'penggunaTerdaftar'));
    }

    public function lihatFeedback()
    {
        $user = Auth::user();

        Feedback::where('dibaca', false)->update(['dibaca' => true]);
        $feedback = Feedback::with('user')->get();


        $unreadFeedbackCount = 0;

        return view('admin.lihat_feedback', compact('feedback', 'unreadFeedbackCount'));
    }
        public function beriResepForm()
    {
        $users = User::all();
        return view('admin.beri-resep-form', compact('users'));
    }
    public function beriResep(Request $request)
    {

        $this->validate($request, [
            'namaobat' => 'required',
            'pemberi' => 'required',
            'dosis' => 'required',
            'keterangan' => 'required',
        ]);

        $resep = new Resep();
        $resep->user_id = $request->input('user_id');
        $resep->namaobat = $request->input('namaobat');
        $resep->pemberi = $request->input('pemberi');
        $resep->tanggalpemberian = now();
        $resep->dosis = $request->input('dosis');
        $resep->keterangan = $request->input('keterangan');
        $resep->save();

        return redirect()->route('admin.daftar-resep')->with('success', 'Resep berhasil diberikan');
    }

    public function daftarResep()
    {
        $reseps = Resep::all();
        return view('admin.daftar-resep', compact('reseps'));
    }

/*    public function kelolaPembelajaranAnak()
    {
        // Ambil semua video pembelajaran anak dari database
        $videos = VideoPembelajaranAnak::all();

        return view('admin.kelola-pembelajaran-anak', compact('videos'));
    }

    public function tambahPembelajaranAnakForm()
    {
        return view('admin.tambah-pembelajaran-anak');
    }

    public function tambahPembelajaranAnak(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $this->validate($request, [
            'kategori' => 'required',
            'judul' => 'required',
            'url_video' => 'required|url',
            'deskripsi' => 'required',
        ]);

        // Buat video pembelajaran anak baru
        $video = new VideoPembelajaranAnak();
        $video->kategori = $request->kategori;
        $video->judul = $request->judul;
        $video->url_video = $request->url_video;
        $video->deskripsi = $request->deskripsi;
        $video->save();
        return redirect()->route('admin.kelola-pembelajaran-anak')->with('success', 'Video pembelajaran anak berhasil ditambahkan');
    }

    public function editPembelajaranAnakForm($id)
    {
        // Temukan video pembelajaran anak yang akan diedit
        $video = VideoPembelajaranAnak::findOrFail($id);

        return view('admin.edit-pembelajaran-anak', compact('video'));
    }

    public function updatePembelajaranAnak(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $this->validate($request, [
            'kategori' => 'required',
            'judul' => 'required',
            'url_video' => 'required|url',
            'deskripsi' => 'required',
        ]);

        // Temukan video pembelajaran anak yang akan diubah
        $video = VideoPembelajaranAnak::findOrFail($id);

        // Perbarui informasi video
        $video->kategori = $request->kategori;
        $video->judul = $request->judul;
        $video->url_video = $request->url_video;
        $video->deskripsi = $request->deskripsi;
        $video->save();

        return redirect()->route('admin.kelola-pembelajaran-anak')->with('success', 'Video pembelajaran anak berhasil diperbarui');
    }

    public function hapusPembelajaranAnak($id)
    {
        // Temukan dan hapus video pembelajaran anak
        $video = VideoPembelajaranAnak::findOrFail($id);
        $video->delete();

        return redirect()->route('admin.kelola-pembelajaran-anak')->with('success', 'Video pembelajaran anak berhasil dihapus');
    }

    */

}
