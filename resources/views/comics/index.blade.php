@extends('layouts.app')
@section('content')
<div class="container-fluid g-0 jumbo">
    <img class="img-jumbo" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="p-5 mb-4">
    <h1 class="display-5 fw-bold">Dc Comics</h1>
    <p class="fs-4">Ecco i nostri fumetti</p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Tutti i comics</h2>
                <a href="#" class="btn btn-primary">Aggiugni fumetto</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Immagine</th>
                <th>Titolo</th>
                <th>Tipo</th>
                <th>Description</th>
                <th>Price</th>
                <th>series</th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic['id']}}</td>
                    <td><img src="{{$comic['thumb']}}" alt=""></td>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['price']}}$</td>
                    <td>{{$comic['series']}}</td>
                    <td>
                     <a href="{{route('comics.show',['comic'=>$comic['id']])}}" class="btn btn-info btn-sm btn-square mb-2" title="dettaglio comic">
                        <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-warning btn-sm btn-square">
                        <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection