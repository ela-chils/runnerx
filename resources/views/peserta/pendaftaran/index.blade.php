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

                <p>
                <b>No BIB:</b>
                <span class="badge bg-primary">
                    {{ $data->kode_bib }}
                </span>
            </p>
                <p>
        <b>NIK:</b>
        {{ $data->nik }}
    </p>

        <p>
            <b>Harga Awal:</b>
            Rp {{ number_format($data->harga_awal,0,',','.') }}
        </p>


        <p>
            <b>Diskon:</b>
            Rp {{ number_format($data->potongan,0,',','.') }}
        </p>


        <p>
            <b>Total Bayar:</b>
            <strong>
                Rp {{ number_format($data->harga_bayar,0,',','.') }}
            </strong>
        </p>


        <p>
            <b>Status Pembayaran:</b>

            @if($data->status_pembayaran == 'lunas')

                <span class="badge bg-success">
                    Lunas
                </span>

            @elseif($data->status_pembayaran == 'pending')

                <span class="badge bg-warning text-dark">
                    Pending
                </span>

            @else

                <span class="badge bg-danger">
                    Gagal
                </span>

            @endif

        </p>


            </div>

        </div>

        @endforeach


    @endif


</div>


@endsection