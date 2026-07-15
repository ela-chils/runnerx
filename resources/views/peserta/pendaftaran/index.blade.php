@extends('layouts.peserta')

@section('content')

<div class="container mt-5">

    <h2 class="fw-bold mb-4">
        Event Saya
    </h2>


    @if($pendaftaran->count() == 0)

        <div class="alert alert-info">
            Belum ada event yang kamu ikuti.
        </div>

    @else


        @foreach($pendaftaran as $data)

        <div class="card shadow mb-3">

            <div class="card-body">

                <h4 class="fw-bold">
                    {{ $data->event->nama_event }}
                </h4>


                <p>
                    <b>Tanggal:</b>
                    {{ $data->event->tanggal }}
                </p>


                <p>
                    <b>Ukuran Jersey:</b>
                    {{ $data->ukuran_jersey }}
                </p>


                <p>
                    <b>Kode Kupon:</b>
                    {{ $data->kode_kupon ?? '-' }}
                </p>



            </div>

        </div>

        @endforeach


    @endif


</div>


@endsection