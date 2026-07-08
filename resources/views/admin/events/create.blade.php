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


            <form action="{{ route('admin.events.store') }}" method="POST">

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
                        Jenis Event
                    </label>

                    <select name="jenis_event"
                            class="form-control">

                        <option value="">
                            -- Pilih Jenis --
                        </option>

                        <option value="3K">
                            3K
                        </option>

                        <option value="5K">
                            5K
                        </option>

                        <option value="10K">
                            10K
                        </option>

                        <option value="Half Marathon">
                            Half Marathon
                        </option>

                        <option value="Full Marathon">
                            Full Marathon
                        </option>

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



                <div class="mb-3">

                    <label class="form-label">
                        Kota
                    </label>

                    <input type="text"
                           name="kota"
                           class="form-control"
                           placeholder="Contoh: Magelang">

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