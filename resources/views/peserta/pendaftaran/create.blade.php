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


            <p>
                Harga:
                Rp {{ number_format($event->harga,0,',','.') }}
            </p>



            <form action="{{ route('peserta.pendaftaran.store',$event->id) }}"
                  method="POST">

                @csrf



                <div class="mb-3">

                    <label>
                        Nama Lengkap
                    </label>

                    <input type="text"
                    name="nama_lengkap"
                    class="form-control"
                    required>

                </div>



                <div class="mb-3">

                    <label>
                        Email
                    </label>

                    <input type="email"
                    name="email"
                    class="form-control"
                    required>

                </div>



                <div class="mb-3">

                    <label>
                        Nomor HP
                    </label>

                    <input type="text"
                    name="no_hp"
                    class="form-control"
                    required>

                </div>



                <div class="mb-3">

                    <label>
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

                    <label>
                        Ukuran Jersey
                    </label>

                    <select name="ukuran_jersey"
                    class="form-control">

                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>

                    </select>

                </div>




                <div class="mb-3">

                    <label>
                        Kode Kupon
                    </label>


                    <input type="text"
                    name="kode_kupon"
                    class="form-control"
                    placeholder="Contoh: D-10">


                </div>




                <button class="btn btn-warning fw-bold">

                    Daftar Sekarang 🏃

                </button>


            </form>


        </div>

    </div>


</div>


@endsection