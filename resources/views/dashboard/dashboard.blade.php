<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Reservations</h4>
                <p class="card-text">Modify your current reservations.</p>
                <a href="/dashboard/reservations" class="btn btn-primary">My Reservations</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Room</h4>
                <p class="card-text">Browse our catalog of top-rated hotels.</p>
                <a href="/hotels" class="btn btn-primary">Our Hotels</a>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">PROFILE</h4>
                <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
                <p class="card-text">Name: {{Auth::user()->name}}</p>
                <p>Email: {{Auth::user()->email}}</p>
            </div>
            </div>
        </div>

    </div>


</div>
@endsection