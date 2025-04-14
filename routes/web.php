<?php

// use Illuminate\Http\Client\Request;

use App\Models\Booking;
use App\Models\Event;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $testimonis = Testimoni::where('rating', 5)->limit(10)->orderBy('created_at', 'desc')->get();
    $event = Event::where('aktif', 1)->first();
    // Menghitung total skor
    $totalSkor = Testimoni::sum(DB::raw('rating'));

    // Menghitung total jumlah review
    $totalReview = Testimoni::count();

    // Menghitung rata-rata rating
    $averageRating = $totalReview > 0 ? round($totalSkor / $totalReview, 1) : 0;
    return view('welcome', compact('testimonis', 'event', 'totalReview', 'averageRating'));
})->name('beranda');
Route::get('/layanan', function () {
    $print = Produk::where('kategori', 'print')->get();
    $jilid = Produk::where('kategori', 'jilid')->get();
    $lainnya = Produk::where('kategori', 'lainnya')->paginate(9);
    return view('layanan', compact('print', 'jilid', 'lainnya'));
})->name('layanan');
Route::get('/testimoni', function () {
    $testimonis = Testimoni::where('rating', 5)->limit(10)->orderBy('created_at', 'desc')->get();
    $testimoniLengkaps = Testimoni::orderBy('created_at', 'desc')->paginate(12);
    return view('testimoni', compact('testimonis', 'testimoniLengkaps'));
})->name('testimoni');


Route::post('/kirim-testi', function (Request $request) {
    // dd()
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        'testimoni' => 'required|string|max:1000',
        'fakultas' => 'required|string|max:255',
        'rating' => 'required|numeric|between:1,5'
    ]);

    $path = $request->file('foto')->store('testimoni');

    $testimoni = new Testimoni();
    $testimoni->nama = $request->nama;
    $testimoni->foto = $path;
    $testimoni->testimoni = $request->testimoni;
    $testimoni->fakultas = $request->fakultas;
    $testimoni->rating = $request->rating;
    $testimoni->save();

    return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
})->name('kirimTestimoni');

Route::post('/booking-diskon', function (Request $request) {
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'wa' => 'required|numeric'
    ]);
    $booking = new Booking();
    $booking->nama = $request->nama;
    $booking->nomor_telepon = $request->wa;
    $booking->event_id = $request->event;
    $booking->status = 0;
    $booking->save();
    return redirect()->back()->with('success', 'Selamat! diskon sudah tercatat');
})->name('bookingDiskon');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
