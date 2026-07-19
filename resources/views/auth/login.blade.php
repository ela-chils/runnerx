<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0b0f99] to-black px-4">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 shadow-2xl">

            <!-- Logo / Title -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-yellow-400 tracking-wide">
                    RunnerX
                </h1>
                <p class="text-gray-300 text-sm mt-1">
                    Login untuk masuk ke event lari
                </p>
            </div>


            <!-- Session Status -->
            <x-auth-session-status 
                class="mb-4 text-yellow-300" 
                :status="session('status')" 
            />


            <form method="POST" action="{{ route('login') }}">
                @csrf


                <!-- Username -->
                <div class="mb-4">

                    <x-input-label 
                        for="username" 
                        value="Username" 
                        class="text-gray-200" 
                    />

                    <x-text-input
                        id="username"
                        class="block mt-1 w-full rounded-lg bg-white/10 border-white/20 text-white focus:border-yellow-400 focus:ring-yellow-400"
                        type="text"
                        name="username"
                        :value="old('username')"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <x-input-error 
                        :messages="$errors->get('username')" 
                        class="mt-2 text-red-400" 
                    />

                </div>


                <!-- Password -->
                <div class="mb-4">

                    <x-input-label 
                        for="password" 
                        value="Password" 
                        class="text-gray-200" 
                    />


                    <x-text-input
                        id="password"
                        class="block mt-1 w-full rounded-lg bg-white/10 border-white/20 text-white focus:border-yellow-400 focus:ring-yellow-400"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />


                    <x-input-error 
                        :messages="$errors->get('password')" 
                        class="mt-2 text-red-400" 
                    />

                </div>


                <!-- Remember -->
                <div class="flex items-center justify-between mt-4 text-sm text-gray-300">

                    <label class="flex items-center">

                        <input 
                            id="remember_me" 
                            type="checkbox"
                            class="rounded border-gray-300 text-yellow-500 shadow-sm focus:ring-yellow-400"
                            name="remember"
                        >

                        <span class="ms-2">
                            Remember me
                        </span>

                    </label>


                    @if (Route::has('password.request'))

                        <a 
                            class="text-yellow-400 hover:underline"
                            href="{{ route('password.request') }}"
                        >
                            Forgot password?
                        </a>

                    @endif

                </div>


                <!-- Button -->
                <div class="mt-6">

                    <x-primary-button 
                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 rounded-lg"
                    >
                        Log In
                    </x-primary-button>

                </div>


                <!-- Register -->
                <p class="text-center text-gray-300 text-sm mt-4">

                    Belum punya akun?

                    <a 
                        href="{{ route('register') }}" 
                        class="text-yellow-400 hover:underline"
                    >
                        Daftar RunnerX
                    </a>

                </p>


            </form>

        </div>

    </div>
</x-guest-layout>