@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <h3>Data Event RunnerX</h3>

    <a href="{{ route('admin.events.create') }}" 
    class="btn btn-primary mb-3">
        + Tambah Event
    </a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Kota</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Kuota</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
            @foreach($events as $event)
            <tr>
                <td>

                @if($event->gambar)

                <img src="{{ asset('storage/'.$event->gambar) }}"
                    width="100"
                    height="70"
                    style="object-fit:cover"
                    class="rounded">

                @else

                Tidak ada gambar

                @endif

                </td>
                <td>{{ $event->nama_event }}</td>
                <td>{{ $event->jenis_event }}</td>
                <td>{{ $event->kota }}</td>
                <td>{{ $event->tanggal }}</td>
                <td>Rp {{ number_format($event->harga) }}</td>
                <td>{{ $event->kuota_peserta }}</td>
                <td></td>
                <td>

            <a href="{{ route('admin.events.edit',$event->id) }}"
            class="btn btn-warning btn-sm">
                Edit
            </a>


            <form action="{{ route('admin.events.destroy',$event->id) }}"
                method="POST"
                class="d-inline">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin hapus event?')">

                    Hapus

                </button>

            </form>

        </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection