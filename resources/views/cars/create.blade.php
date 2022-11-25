@extends('layouts.layout')

@section('content')
<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div> -->


<section id="form">
    <h1>Add Cars</h1>
    <form action="/cars" method="POST" id="create-form">
    @csrf
        <div class="wrap"><input type="text" name="speed" placeholder="Speed..."></div>
        <div class="wrap"><input type="text" name="acceleration" placeholder="Acceleration..."></div>
        <div class="wrap"><input type="text" name="durability" placeholder="Durability..."></div>
        <div class="wrap"><input type="text" name="fuel" placeholder="Fuel Efficiency..."></div>
        <div class="wrap"><input type="text" name="price" placeholder="Price..."></div>
        <div class="wrap"><button type="submit">Add Car</button></div>
    </form>
    <p>{{ session('mssg') }}</p>
</section>

<div id="top-btn">Top</div>


<script src="../js/top.js"></script>

@endsection

