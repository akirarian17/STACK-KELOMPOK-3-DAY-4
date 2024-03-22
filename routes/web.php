<?php

use App\Models\Aspirasi;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/Masuk', function (Request $request) {
    $credentials = $request->only(['Username', 'Password']);
    $user = User::where('Username', $credentials['Username'])->get()->first();
    if ($user) {
        Auth::login($user);
        return redirect('/');
    }
    return back();
    
    
});

Route::post('/Masuk_Admin', function (Request $request) {
    $credentials = $request->only(['Username', 'Password']);
    $admin =Admin ::where('Username', $credentials['Username'])->get()->first();
    if ($admin) {
        Auth::guard('admin')->login($admin);
        return redirect('/Hasil_Laporan_Admin');
    }
    return back();
    
    
});

Route::post('/Daftar', function (Request $request) {
    $data = $request->all();
$data['Password'] = Hash::make($data['Password']);
User::create($data);
return redirect('/Masuk');
    
    
});

Route::post('/Main', function (Request $request) {
    $data = $request->all();
Aspirasi::create($data);
return redirect('/Main');

});
    

Route::get('/', function () {
   
    return view('Main');
});

Route::get('/Masuk', function () {
    return view('Masuk');
});

Route::get('/Masuk_Admin', function () {
    return view('Masuk_Admin');
});

Route::get('/Daftar', function () {
    return view('Daftar');
});

Route::get('/Hasil_Laporan', function () {
    $aspirasi=Aspirasi::where('Nama', auth()->user()->Username)->get();
    return view('Hasil_Laporan', compact("aspirasi"));
});

Route::get('/Edit_Laporan/{id}', function ($id) {
    $aspirasi=Aspirasi::where('id',$id)->first();
    return view('Edit_Hasil_Laporan', compact("aspirasi"));
});

Route::get('/Hasil_Laporan_Admin', function () {
    $aspirasi=Aspirasi::all();
    return view('Hasil_Laporan_Admin', ['aspirasi' => $aspirasi]);
});

Route::post('/Edit_Laporan', function (Request $request) {
    $data = $request->all();
$aspirasi = Aspirasi::where('id', $data['id'])->first();
$aspirasi->Judul = $data['Judul'];
$aspirasi->Aspirasi = $data['Aspirasi'];
$aspirasi->Nama = $data['Nama'];
$aspirasi->Kategori = $data['Kategori'];
$aspirasi->save();
return redirect('/Hasil_Laporan');

});
    
    


Route::get('/Hasil_Laporan_Admin', function () {
    return view('Hasil_Laporan_Admin');
});

Route::get('/Main', function () {
    return view('Main');
});