<nav class="navbar navbar-expand-lg navbar-dark bg-navy fixed-top">
  <div class="container">

    <a class="navbar-brand fw-bold text-gold" href="/">
      RunnerX
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link text-white" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#events">Events</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#about">About</a>
        </li>

        <li class="nav-item">
            <button
                class="btn btn-gold ms-3"
                data-bs-toggle="modal"
                data-bs-target="#loginModal">

                Login
            </button>
        </li>

      </ul>

    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow">

            <div class="modal-header border-0 pb-0">
                <h4 class="fw-bold text-gold">
                    🏃 RunnerX
                </h4>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center p-4">

                <h3 class="fw-bold mb-2">
                    Welcome!
                </h3>

                <p class="text-muted mb-4">
                    Silakan pilih jenis akun untuk melanjutkan.
                </p>

                <!-- Login User -->
                <a href="{{ route('login') }}"
                   class="btn btn-primary w-100 py-2 mb-3">

                    👤 Login Peserta
                </a>

                <!-- Register -->
                <a href="{{ route('register') }}"
                   class="btn btn-outline-primary w-100 py-2 mb-4">

                    📝 Daftar Akun Baru
                </a>

                <hr>

                <small class="text-muted">
                    Organizer / Admin
                </small>

                <a href="{{ route('admin.login') }}"
                   class="btn btn-dark w-100 mt-3">

                    🔒 Login Admin
                </a>

            </div>

        </div>
    </div>
</div>