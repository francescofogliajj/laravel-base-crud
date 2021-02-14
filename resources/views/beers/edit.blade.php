@extends('layouts.main')

@section('header')
    <h1 class="mt-5">Aggiorna</h1>
@endsection

@section('content')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('beers.update', $beer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $beer->name }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Marca" value="{{ $beer->brand }}">
        </div>
        @error('brand')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo" value="{{ $beer->price }}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="alcohol_content">Gradazione</label>
            <input type="text" class="form-control" name="alcohol_content" id="alcohol_content" placeholder="Gradazione" value="{{ $beer->alcohol_content }}">
        </div>
        @error('alcohol_content')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{ $beer->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('beers.index') }}" class="btn btn-secondary">Indietro</a>
    </form>
@endsection