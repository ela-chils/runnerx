@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h4 class="mb-0">
                Edit Event RunnerX
            </h4>
        </div>


        <div class="card-body">

            <form action="{{ route('admin.events.update', $event->id) }}"
            method="POST"
            enctype="multipart/form-data">

                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label class="form-label">
                        Nama Event
                    </label>

                    <input type="text"
                           name="nama_event"
                           class="form-control"
                           value="{{ $event->nama_event }}">
                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Ganti Gambar Event
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


                            <option value="{{ $jenis->nama_jenis }}"

                            {{ $event->jenis_event == $jenis->nama_jenis ? 'selected' : '' }}>


                                {{ $jenis->nama_jenis }}


                            </option>


                        @endforeach


                    </select>


                </div>




                <div class="mb-3">

                    <label class="form-label">
                        Tanggal
                    </label>


                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ $event->tanggal }}">

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


                            <option value="{{ $kota->nama_kota }}"


                            {{ $event->kota == $kota->nama_kota ? 'selected' : '' }}>


                                {{ $kota->nama_kota }}


                            </option>



                        @endforeach



                    </select>


                </div>




                <div class="mb-3">

                    <label class="form-label">
                        Harga
                    </label>


                    <input type="number"
                           name="harga"
                           class="form-control"
                           value="{{ $event->harga }}">

                </div>




                <div class="mb-3">

                    <label class="form-label">
                        Kuota Peserta
                    </label>


                    <input type="number"
                           name="kuota_peserta"
                           class="form-control"
                           value="{{ $event->kuota_peserta }}">

                </div>




                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>


                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4">{{ $event->deskripsi }}</textarea>


                </div>




                <button type="submit"
                        class="btn btn-warning">

                    Update Event

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