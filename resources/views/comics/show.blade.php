@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{$comic['title']}}</h1>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Torna all''elenco</a>
                </div>
            </div>
            <div>
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div>
                <p>{{$comic['description']}}</p>
                <h3>{{$comic['price']}}$</h3>
                <h3>Data di uscita: {{$comic['sale_date']}}</h3>
                <h3>Writers: {{$comic['writers']}}</h3>
                <h3>Artists: {{$comic['artists']}}</h3>
            </div>
        </div>
    </div>
</div>
@endsection