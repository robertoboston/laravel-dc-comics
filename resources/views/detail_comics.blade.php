@extends('layouts.app')

@section('content')
<div class="jumbo">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="blue-band">
</div>
<div class="container-single-card">
    <div class="col-80">
        <div class="single-card">
            <img src="{{$single['thumb']}}" alt="{{$single['title']}}">
        </div>
        <div class="comic-title">
            <h1>{{$single['title']}}</h1>
        </div>
        <div class="price-section">
            <div>
               U.S.-Price {{$single['price']}}
            </div>
            <div>
                Available
            </div>
        </div>
        <div class="description">
            {{$single['description']}}
        </div>
    </div>
    <div class="col-20">
        <div class="advertise">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h5>Art By: {{$single['artists']}}</h5>
            <h5>Written By: {{$single['writers']}}</h5>
        </div>
        <div class="col-6">
            <h5>Series: {{$single['series']}}</h5>
            <h5>U.S. Price: {{$single['price']}}</h5>
            <h5>On Sale Date: {{$single['sale_date']}}</h5>
        </div>
    </div>
</div>
@endsection