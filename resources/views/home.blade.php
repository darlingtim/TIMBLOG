<!-- resources/views/home.blade.php -->

<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Manage all your hotel reservations in one place</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Best prices</h5>
                    <p class="card-text">We have special discounts at the best hotels</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Book and manage with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection