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

<section id="branding" class="container">
    <div id="branding-video">
        <video poster="/img/carposter.png" src="/img/carV.mp4" autoplay="" muted="" loop=""></video>
    </div>
    <div id="branding-overlay"></div>
    <div id="branding-text">
       <p>Ready to Get the Ride of Your Dreams</p>
       <button onclick="parent.location='/cars/garage'">Garage</button>         
    </div>
</section>

<section id="cards">
    <div id="card-wrap">
        <div class="card hidden">
            <div class="card-svg"><i class="fas fa-tachometer-alt fa-2x"></i></div>
            <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi natus dolore voluptatem id ducimus illum.</div> 
        </div>
        <div class="card large hidden">
            <div class="card-svg"><i class="fas fa-gas-pump fa-2x"></i></div>
            <div class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis, obcaecati modi dolore maiores venia
                neque perspiciatis.Consectetur commodi nemo earum porro est illum doloremque</div> 
        </div>
        <div class="card hidden">
            <div class="card-svg"><i class="fas fa-dumbbell fa-2x"></i></div>
            <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi natus dolore voluptatem id ducimus illum.</div> 
        </div>
    </div>
</section>

<section id="products">
    <div id="product-wrap">
        <h1>Our Top Products</h1>
        <div id="product-grid">

            
        @foreach ($cars as $car)
        @if ($car->id == 1 || $car->id == 2 || $car->id == 3)
            <div class="product hidden">
                <img src="/img/car{{ $car->id }}.jpg" alt="">
                <div class="price">{{ $car->price }}</div>
                <div class="product-info">
                    <div class="speed">Maximum Speed:  <div class="bar"> <div class="overlay" data-att="{{ $car->speed }}"></div> <div class="tab"></div> </div> </div>
                    <div class="acc">Acceleration:   <div class="bar"> <div class="overlay" data-att="{{ $car->acceleration }}"></div> <div class="tab"></div> </div>  </div>
                    <div class="dur">Durability:   <div class="bar"> <div class="overlay" data-att="{{ $car->durability }}"></div> <div class="tab"></div> </div>  </div>
                    <div class="fuel">Fuel Efficiency:   <div class="bar"> <div class="overlay" data-att="{{ $car->fuel }}"></div> <div class="tab"></div> </div>  </div>
                </div>
            </div>
        @endif
        @endforeach
           
        </div>
        <div id="garage"><button onclick="parent.location='/cars/garage'">Go To Garage</button></div>
    </div>
</section>

<div id="top-btn">Top</div>

<script src="js/top.js"></script>
<script src="js/animate.js"></script>

@endsection

