@extends('layouts.admin')

@section('content')

<div class="container">

<h2 class="fw-bold mb-4">
    Data Peserta RunnerX 🏃
</h2>


<table class="table table-bordered shadow">

<thead class="table-dark">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Event</th>
    <th>No HP</th>
    <th>Jersey</th>
    <th>Status</th>
</tr>

</thead>


<tbody>

@foreach($peserta as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->nama_lengkap }}</td>

<td>{{ $item->email }}</td>

<td>{{ $item->event->nama_event }}</td>

<td>{{ $item->no_hp }}</td>

<td>{{ $item->ukuran_jersey }}</td>

<td>{{ $item->status }}</td>

</tr>

@endforeach

</tbody>


</table>

</div>

@endsection