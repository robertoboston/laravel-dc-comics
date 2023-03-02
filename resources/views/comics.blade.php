@extends('layouts.app')
@section('page-title','comics')

@section('content')
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    <div class="bg-grey">
        <div class="container">
            @foreach ($fumetti as $key => $item)
            <a class="card" href="{{route('detail_comics', ['id' => $key])}}">
                <div class="comics-card">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    <div class="title-card">
                        {{$item['series']}}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection

