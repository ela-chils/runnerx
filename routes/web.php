<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\EventController;

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

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('/admin/events', EventController::class);

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
        return view('peserta.dashboard');
    })->name('peserta.dashboard');

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
| PENTING!!
|--------------------------------------------------------------------------
| Karena kita sudah membuat login & register sendiri,
| auth bawaan Breeze dinonaktifkan dulu.
|
*/

// require __DIR__.'/auth.php';