@extends('layouts.peserta')

@section('content')

<div class="container">

    <h2 class="fw-bold mb-4">
        Event RunnerX 🏃
    </h2>


    <div class="row">

        @foreach($events as $event)

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">


                <div class="card-body">


                    <h5 class="fw-bold">
                        {{ $event->nama_event }}
                    </h5>


                    <p>
                        <strong>Jenis:</strong>
                        {{ $event->jenis_event }}
                    </p>


                    <p>
                        <strong>Tanggal:</strong>
                        {{ $event->tanggal }}
                    </p>


                    <p>
                        <strong>Kota:</strong>
                        {{ $event->kota }}
                    </p>


                    <p>
                        <strong>Harga:</strong>

                        Rp {{ number_format($event->harga) }}

                    </p>


                    <p>
                        <strong>Kuota:</strong>

                        {{ $event->kuota_peserta }}
                        peserta

                    </p>



                    <a href="{{ route('peserta.events.show',$event->id) }}"
                       class="btn btn-primary w-100">

                        Lihat Detail

                    </a>


                </div>


            </div>

        </div>


        @endforeach


    </div>


</div>

@endsection