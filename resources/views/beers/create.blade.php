@extends('layouts.main')

@section('header')
    <h1 class="mt-5">Birre</h1>
@endsection

@section('content')
    <form action="{{ route('beers.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Marca">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo">
        </div>
        <div class="form-group">
            <label for="alcohol_content">Gradazione</label>
            <input type="text" class="form-control" name="alcohol_content" id="alcohol_content" placeholder="Gradazione">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('beers.index') }}" class="btn btn-secondary">Indietro</a>
    </form>
@endsection

