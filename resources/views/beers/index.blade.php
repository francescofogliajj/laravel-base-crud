<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <main class="container">
            <h1 class="mt-5">Birre</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Prezzo</th>
                        <th>Gradazione</th>
                        <th>Descrizione</th>
                        <th>Creato il</th>
                        <th>Aggiornato il</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->alcohol_content }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('beers.show', $item->id) }}" class="btn">Mostra</a>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </main>
    </body>
</html>
