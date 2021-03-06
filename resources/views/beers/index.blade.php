@extends('layouts.main')

@section('header')
    <h1 class="mt-5">Birre</h1>
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Prezzo</th>
                <th>Gradazione</th>
                {{-- <th>Descrizione</th> --}}
                <th>Creato il</th>
                <th>Aggiornato il</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beers as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{!! number_format($item->price, 2) . " &euro;" !!}</td>
                    <td>{{ $item->alcohol_content }}</td>
                    {{-- <td>{{ $item->description }}</td> --}}
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('beers.show', $item->id) }}" class="btn btn-outline-light">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('beers.edit', $item->id) }}" class="btn btn-outline-light">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('beers.destroy', $item->id) }}" method="POST" onSubmit="return confirm('Sei sicuro di voler eliminare questa birra?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-light">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td> 
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')
    <div class="text-right">
        <a href="{{ route('beers.create') }}" class="btn btn-lg btn-primary">Aggiungi una birra</a>
    </div>
@endsection