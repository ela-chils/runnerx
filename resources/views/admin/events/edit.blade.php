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
                  method="POST">

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
                        Jenis Event
                    </label>

                    <select name="jenis_event"
                            class="form-control">

                        <option value="3K"
                        {{ $event->jenis_event == '3K' ? 'selected' : '' }}>
                            3K
                        </option>

                        <option value="5K"
                        {{ $event->jenis_event == '5K' ? 'selected' : '' }}>
                            5K
                        </option>

                        <option value="10K"
                        {{ $event->jenis_event == '10K' ? 'selected' : '' }}>
                            10K
                        </option>

                        <option value="Half Marathon"
                        {{ $event->jenis_event == 'Half Marathon' ? 'selected' : '' }}>
                            Half Marathon
                        </option>

                        <option value="Full Marathon"
                        {{ $event->jenis_event == 'Full Marathon' ? 'selected' : '' }}>
                            Full Marathon
                        </option>

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


                <div class="mb-3">
                    <label class="form-label">
                        Kota
                    </label>

                    <input type="text"
                           name="kota"
                           class="form-control"
                           value="{{ $event->kota }}">
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