@extends('layouts.app')
@section('content')
<div class="container-fluid g-0 jumbo">
    <img class="img-jumbo" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 py-3">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Inserimento nuovo fumetto</h1>
                </div>
                <div>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Torna all''elenco</a>
                </div>
            </div>
            <div>
                {{-- visualizzazione degli errori --}}
            </div>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Inserisci qui il titolo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Description</label>
                    <textarea name="description" type="text" class="form-control" rows="10" placeholder="Inserisci qui la descrizione"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Inserisci qui il prezzo">
                </div>
                <div class="form-group mb-3">
                    <label class="control-label">Image</label>
                    <input name="thumb" type="text" class="form-control" placeholder="Inserisci qui l'immagine">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success">
                        Salva il nuovo fumetto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection