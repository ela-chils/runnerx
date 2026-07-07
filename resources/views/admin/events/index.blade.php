@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <h3>Data Event RunnerX</h3>

    <a href="#" class="btn btn-primary mb-3">+ Tambah Event</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Kota</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Kuota</th>
            </tr>
        </thead>

        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->nama_event }}</td>
                <td>{{ $event->jenis_event }}</td>
                <td>{{ $event->kota }}</td>
                <td>{{ $event->tanggal }}</td>
                <td>Rp {{ number_format($event->harga) }}</td>
                <td>{{ $event->kuota }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection