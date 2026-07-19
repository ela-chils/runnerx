@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">
                Tambah Event RunnerX
            </h4>
        </div>


        <div class="card-body">


            <form action="{{ route('admin.events.store') }}" 
                method="POST"
                enctype="multipart/form-data">

                @csrf


                <div class="mb-3">
                    <label class="form-label">
                        Nama Event
                    </label>

                    <input type="text"
                           name="nama_event"
                           class="form-control"
                           placeholder="Contoh: Magelang Run 2026">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                    Gambar Event
                    </label>

                    <input type="file"
                    name="gambar"
                    class="form-control">

                    </div>


                {{-- JENIS EVENT MASTER DATA --}}
                <div class="mb-3">

                    <label class="form-label">
                        Jenis Event
                    </label>


                    <select name="jenis_event"
                        class="form-select">


                    <option value="">
                        -- Pilih Jenis Event --
                    </option>


                    @foreach($jenisEvents as $jenis)

                        <option value="{{ $jenis->id }}">

                            {{ $jenis->nama_jenis }}

                        </option>


                    @endforeach


                </select>


                </div>





                <div class="mb-3">

                    <label class="form-label">
                        Tanggal Event
                    </label>


                    <input type="date"
                           name="tanggal"
                           class="form-control">


                </div>





                {{-- KOTA MASTER DATA --}}
                <div class="mb-3">


                    <label class="form-label">
                        Kota
                    </label>


                    <select name="kota"
                            class="form-select">


                        <option value="">
                            -- Pilih Kota --
                        </option>



                        @foreach($kotas as $kota)


                            <option value="{{ $kota->nama_kota }}">

                                {{ $kota->nama_kota }}

                            </option>



                        @endforeach



                    </select>


                </div>






                <div class="mb-3">

                    <label class="form-label">
                        Harga Registrasi
                    </label>


                    <input type="number"
                           name="harga"
                           class="form-control"
                           placeholder="Contoh: 150000">


                </div>





                <div class="mb-3">

                    <label class="form-label">
                        Kuota Peserta
                    </label>


                    <input type="number"
                           name="kuota_peserta"
                           class="form-control"
                           placeholder="Contoh: 500">


                </div>





                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>


                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4"
                              placeholder="Deskripsi event..."></textarea>
                        

                </div>





                <button type="submit"
                        class="btn btn-primary">

                    Simpan Event

                </button>


                <a href="{{ route('admin.events.index') }}"
                   class="btn btn-secondary">

                    Kembali

                </a>



            </form>


        </div>

    </div>

</div>

@endsection