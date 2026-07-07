@extends('layouts.app')

@section('content')

<div class="min-vh-100 d-flex align-items-center justify-content-center"
     style="background: radial-gradient(circle at top, #0b0f99 0%, #050505 70%);">

    <div style="width:100%; max-width:420px;">

        <!-- HEADER -->
        <div class="text-center mb-4">
            <h1 style="color:#f7c400; font-weight:800; letter-spacing:3px;">
                RUNNERX
            </h1>
            <p class="text-secondary small">
                Login untuk ikut event lari
            </p>
        </div>

        <!-- CARD -->
        <div class="p-4 rounded-4 shadow-lg"
             style="background: rgba(255,255,255,0.06); backdrop-filter: blur(18px); border:1px solid rgba(255,255,255,0.1);">

            <!-- ERROR -->
            @if ($errors->any())
                <div class="alert alert-danger py-2 small">
                    Email atau password salah
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="mb-3">
                    <label class="text-light small mb-1">Email</label>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control border-0 text-white"
                           style="background:rgba(0,0,0,0.4); padding:12px; border-radius:12px;"
                           required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <label class="text-light small mb-1">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control border-0 text-white"
                           style="background:rgba(0,0,0,0.4); padding:12px; border-radius:12px;"
                           required>
                </div>

                <!-- REMEMBER + FORGOT -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <label class="text-secondary small">
                        <input type="checkbox" name="remember"> Remember me
                    </label>

                    <a href="#" class="text-warning small text-decoration-none">
                        Forgot?
                    </a>
                </div>

                <!-- BUTTON -->
                <button type="submit"
                        class="w-100 fw-bold"
                        style="background:#f7c400; color:#000; padding:12px; border-radius:12px; border:none;">
                    LOGIN
                </button>

            </form>

            <!-- REGISTER -->
            <div class="text-center mt-3">
                <span class="text-secondary small">Belum punya akun?</span>
                <a href="{{ route('register') }}" class="text-warning small text-decoration-none">
                    Register
                </a>
            </div>

        </div>

    </div>

</div>

@endsection