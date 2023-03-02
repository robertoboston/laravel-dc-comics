@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Visualizzazione Comic {{$comic['title']}}</h1>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Torna all''elenco</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection