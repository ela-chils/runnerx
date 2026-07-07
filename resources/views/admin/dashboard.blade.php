@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <h2>Admin Dashboard RunnerX</h2>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card p-3 shadow">
                <h5>Total Event</h5>
                <h3>{{ \App\Models\Event::count() }}</h3>
            </div>
        </div>

    </div>

</div>

@endsection