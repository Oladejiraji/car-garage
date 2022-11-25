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


<section id="products">
    <div id="product-wrap">
        <h1>Products</h1>
        <div id="product-grid">

            @foreach ($cars as $car)
            <div class="product hidden">
                <img src="/img/car{{ $car->id }}.jpg" alt="">
                <div class="price">{{ $car->price }}</div>
                <div class="product-info">
                    <div class="speed">Maximum Speed: <div class="bar">
                            <div class="overlay" data-att="{{ $car->speed }}"></div>
                            <div class="tab"></div>
                        </div>
                    </div>
                    <div class="acc">Acceleration: <div class="bar">
                            <div class="overlay" data-att="{{ $car->acceleration }}"></div>
                            <div class="tab"></div>
                        </div>
                    </div>
                    <div class="dur">Durability: <div class="bar">
                            <div class="overlay" data-att="{{ $car->durability }}"></div>
                            <div class="tab"></div>
                        </div>
                    </div>
                    <div class="fuel">Fuel Efficiency: <div class="bar">
                            <div class="overlay" data-att="{{ $car->fuel }}"></div>
                            <div class="tab"></div>
                        </div>
                    </div>
                </div>
                <div id="view">
                    <button id="view-btn">View</button>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<section id="modal">
    <div id="modal-content"></div>
</section>

<div id="top-btn">Top</div>

<script src="../js/main.js"></script>
<script src="../js/top.js"></script>
<script src="../js/animate.js"></script>

@endsection