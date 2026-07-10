@extends('layouts.app')

@section('content')

<div class="min-vh-100 d-flex align-items-center justify-content-center"
     style="background: radial-gradient(circle at top, #0b0f99 0%, #050505 70%);">

    <div style="width:100%; max-width:420px;">

        <div class="text-center mb-4">
            <h1 style="color:#f7c400; font-weight:800; letter-spacing:3px;">
                RUNNERX
            </h1>
            <p class="text-secondary small">
                Daftar untuk ikut event lari
            </p>
        </div>

        <div class="p-4 rounded-4 shadow-lg"
             style="background: rgba(255,255,255,0.06); backdrop-filter: blur(18px); border:1px solid rgba(255,255,255,0.1);">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NAME -->
                <div class="mb-3">
                    <label class="text-light small">Nama</label>
                    <input type="text"
                           name="name"
                           class="form-control border-0 text-white"
                           style="background:rgba(0,0,0,0.4); padding:12px; border-radius:12px;"
                           required>
                </div>

                <!-- USERNAME -->
                <div class="mb-3">
                    <label class="text-light small">Username</label>

                    <input type="text"
                        name="username"
                        class="form-control border-0 text-white"
                        style="background:rgba(0,0,0,0.4); padding:12px; border-radius:12px;"
                        required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label class="text-light small">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control border-0 text-white"
                           style="background:rgba(0,0,0,0.4); padding:12px; border-radius:12px;"
                           required>
                </div>

                <button type="submit"
                        class="w-100 fw-bold"
                        style="background:#f7c400; color:#000; padding:12px; border-radius:12px; border:none;">
                    REGISTER
                </button>

            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="text-warning small text-decoration-none">
                    Sudah punya akun? Login
                </a>
            </div>

        </div>

    </div>

</div>

@endsection