<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Peserta\EventController as PesertaEventController;
use App\Http\Controllers\Peserta\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing.index');
})->name('home');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::view('/admin/login', 'admin.login')->name('admin.login');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');


        Route::resource('events', EventController::class);

        Route::resource('events', EventController::class);


        // LIHAT PESERTA EVENT
         Route::get('/peserta',
            [EventController::class, 'peserta']
        )->name('peserta');

    });


/*
|--------------------------------------------------------------------------
| Login Peserta
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('peserta.login');
})->name('login');

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {

    $request->session()->regenerate();


    if (auth()->user()->role == 'admin') {

        return redirect()->route('admin.dashboard');

    }


    return redirect()->route('peserta.dashboard');

    }

    return back()->withErrors([
        'email' => 'Email atau Password salah.',
    ])->onlyInput('email');

});


/*
|--------------------------------------------------------------------------
| Register Peserta
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('peserta.register');
})->name('register');

Route::post('/register', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    Auth::login($user);

    return redirect()->route('peserta.dashboard');

});


/*
|--------------------------------------------------------------------------
| Dashboard Peserta
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    Route::get('/peserta/dashboard', function () {

        $events = \App\Models\Event::all();

        return view('peserta.dashboard', compact('events'));

    })->name('peserta.dashboard');



    Route::get('/peserta/events',
        [PesertaEventController::class, 'index']
    )->name('peserta.events.index');



    Route::get('/peserta/events/{event}',
        [PesertaEventController::class, 'show']
    )->name('peserta.events.show');



    // FORM PENDAFTARAN EVENT

    Route::get('/peserta/events/{event}/daftar',
        [PendaftaranController::class, 'create']
    )->name('peserta.pendaftaran.create');



    // SIMPAN PENDAFTARAN

    Route::post('/peserta/events/{event}/daftar',
        [PendaftaranController::class, 'store']
    )->name('peserta.pendaftaran.store');



    // EVENT YANG SUDAH DIPILIH

    Route::get('/peserta/pendaftaran',
        [PendaftaranController::class, 'index']
    )->name('peserta.pendaftaran.index');


});


/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('home');

})->name('logout');