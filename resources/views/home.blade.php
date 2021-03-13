@extends('layout')

@section('content')
    <div id="carouselExampleControls mt-5" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://w.wallhaven.cc/full/z8/wallhaven-z885vv.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://w.wallhaven.cc/full/rd/wallhaven-rd7drw.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://w.wallhaven.cc/full/43/wallhaven-43qyp3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection