@extends('layouts.admin')

@section('content')

<div class="container">

<h2 class="fw-bold mb-4">
    Data Peserta RunnerX
</h2>


<table class="table table-bordered shadow">

<thead class="table-dark">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>NIK</th>
    <th>Event</th>
    <th>No HP</th>
    <th>Jersey</th>
    <th>No BIB</th>
    <th>Harga Awal</th>
    <th>Diskon</th>
    <th>Total Bayar</th>
    <th>Status Pembayaran</th>
    <th>Aksi</th>
</tr>

</thead>


<tbody>

@foreach($pesertas as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->nama_lengkap }}</td>

<td>{{ $item->email }}</td>

<td>{{ $item->nik }}</td>

<td>{{ $item->event->nama_event }}</td>

<td>{{ $item->no_hp }}</td>

<td>{{ $item->ukuran_jersey }}</td>

<td>{{ $item->kode_bib }}</td>

<td>
    Rp {{ number_format($item->harga_awal,0,',','.') }}
</td>

<td>
    Rp {{ number_format($item->potongan,0,',','.') }}
</td>

<td>
    Rp {{ number_format($item->harga_bayar,0,',','.') }}
</td>

<td>
    @if($item->status_pembayaran == 'lunas')

        <span class="badge bg-success">
            Lunas
        </span>

    @elseif($item->status_pembayaran == 'pending')

        <span class="badge bg-warning">
            Pending
        </span>

    @else

        <span class="badge bg-danger">
            Gagal
        </span>

    @endif
</td>

<td>

@if($item->status_pembayaran != 'lunas')

<form action="{{ route('admin.peserta.lunas', $item->id) }}" method="POST">

    @csrf
    @method('PUT')

    <button class="btn btn-success btn-sm">
        Konfirmasi Lunas
    </button>

</form>

@else

<span class="text-success">
    Sudah Bayar
</span>

@endif

</td>

</tr>

@endforeach

</tbody>


</table>

</div>

@endsection