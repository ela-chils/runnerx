@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">


            <div class="card shadow border-0 rounded-4">

                <div class="card-header bg-navy text-white rounded-top-4">

                    <h3 class="fw-bold mb-0">
                        🏃 Tambah Event Lari
                    </h3>

                </div>


                <div class="card-body p-4">


                    @if($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    <form action="{{ route('admin.events.store') }}"
                          method="POST">

                        @csrf



                        <!-- Nama Event -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Nama Event
                            </label>

                            <input type="text"
                                   name="nama_event"
                                   class="form-control"
                                   placeholder="Contoh: Grow Run 2026"
                                   value="{{ old('nama_event') }}">

                        </div>




                        <!-- Jenis Event -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Jenis Event
                            </label>

                            <select name="jenis_event"
                                    class="form-select">


                                <option value="">
                                    Pilih Jenis Event
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




                        <!-- Tanggal -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Tanggal Event
                            </label>

                            <input type="date"
                                   name="tanggal"
                                   class="form-control">

                        </div>





                        <!-- Kota -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Kota
                            </label>


                            <select name="kota"
                                    class="form-select">


                                <option value="">
                                    Pilih Kota
                                </option>


                                <option value="Jakarta">
                                    Jakarta
                                </option>


                                <option value="Yogyakarta">
                                    Yogyakarta
                                </option>


                                <option value="Semarang">
                                    Semarang
                                </option>


                                <option value="Kendal">
                                    Kendal
                                </option>


                            </select>

                        </div>





                        <!-- Harga -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Harga Pendaftaran
                            </label>


                            <input type="number"
                                   name="harga"
                                   class="form-control"
                                   placeholder="Contoh: 200000">

                        </div>





                        <!-- Kuota -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Kuota Peserta
                            </label>


                            <input type="number"
                                   name="kuota_peserta"
                                   class="form-control"
                                   placeholder="Jumlah peserta">

                        </div>






                        <!-- Deskripsi -->
                        <div class="mb-3">

                            <label class="fw-bold">
                                Deskripsi
                            </label>


                            <textarea name="deskripsi"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Deskripsi event..."></textarea>


                        </div>




                        <div class="d-flex justify-content-between">


                            <a href="{{ route('admin.events.index') }}"
                               class="btn btn-secondary">

                                Kembali

                            </a>



                            <button type="submit"
                                    class="btn btn-gold fw-bold">

                                Simpan Event

                            </button>


                        </div>



                    </form>


                </div>

            </div>


        </div>


    </div>


</div>


@endsection