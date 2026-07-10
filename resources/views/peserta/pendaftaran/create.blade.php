@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">


    <div class="card shadow border-0 rounded-4">

        <div class="card-body p-5">


            <h2 class="fw-bold text-primary">
                Form Pendaftaran Event
            </h2>


            <h5 class="mt-3">
                {{ $event->nama_event }}
            </h5>


            <p class="fw-bold">
                Harga:
                Rp {{ number_format($event->harga,0,',','.') }}
            </p>



            <form action="{{ route('peserta.pendaftaran.store',$event->id) }}"
                  method="POST">

                @csrf



                <div class="mb-3">

                    <label class="fw-bold">
                        Nama Lengkap
                    </label>

                    <input type="text"
                    name="nama_lengkap"
                    class="form-control"
                    value="{{ auth()->user()->name }}"
                    required>

                </div>



                <div class="mb-3">

                    <label class="fw-bold">
                        Email
                    </label>

                    <input type="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email aktif"
                    required>

                    <small class="text-muted">
                        Email digunakan untuk informasi event
                    </small>

                </div>



                <div class="mb-3">

                    <label class="fw-bold">
                        Nomor HP
                    </label>

                    <input type="text"
                    name="no_hp"
                    class="form-control"
                    placeholder="08xxxxxxxxxx"
                    required>

                </div>



                <div class="mb-3">

                    <label class="fw-bold">
                        Jenis Kelamin
                    </label>

                    <select name="jenis_kelamin"
                    class="form-control">

                        <option value="Laki-Laki">
                            Laki-Laki
                        </option>

                        <option value="Perempuan">
                            Perempuan
                        </option>

                    </select>

                </div>




                <div class="mb-3">

                    <label class="fw-bold">
                        Ukuran Jersey
                    </label>

                    <select name="ukuran_jersey"
                    class="form-control">

                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>

                    </select>

                </div>


                <div class="mb-3">

                    <label class="fw-bold">
                        Kode Kupon
                    </label>


                    <input type="text"
                    name="kode_kupon"
                    class="form-control"
                    placeholder="Contoh: RUNNER10">

                </div>



                <button class="btn btn-warning fw-bold px-4">

                    Daftar Sekarang 🏃

                </button>


            </form>


        </div>

    </div>


</div>


@endsection