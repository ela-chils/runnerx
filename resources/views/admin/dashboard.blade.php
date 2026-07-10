@extends('layouts.admin')

@section('content')

<h1 class="fw-bold mb-5">
    Dashboard RunnerX
</h1>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card border-0 shadow rounded-4 p-4">

            <h6 class="text-muted mb-3">
                Total Event
            </h6>

            <h1 class="fw-bold text-primary">
                {{ $totalEvent }}
            </h1>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-0 shadow rounded-4 p-4">

            <h6 class="text-muted mb-3">
                Total Peserta
            </h6>

            <h1 class="fw-bold text-success">
                {{ $totalPeserta }}
            </h1>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card border-0 shadow rounded-4 p-4">

            <h6 class="text-muted mb-3">
                Event Aktif
            </h6>

            <h1 class="fw-bold text-warning">
                {{ $eventAktif }}
            </h1>

        </div>

    </div>

</div>

@endsection