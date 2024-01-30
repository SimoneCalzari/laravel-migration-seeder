@extends('layouts.app')

@section('title')
    {{ 'Boolean Treni' }}
@endsection

@section('main')
    <main>
        <div class="container">
            <h2 class="text-center py-2">Partenze Odierne</h2>
            <table class="table table-bordered border-success">
                <thead>
                    <tr>
                        <th>Partenza</th>
                        <th>Destinazione</th>
                        <th>Orario Partenza</th>
                        <th>Orario Arrivo</th>
                        <th>Codice Treno</th>
                        <th>Azienda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains_today as $train)
                        <tr>
                            <td>{{ $train['stazione_partenza'] }}</td>
                            <td>{{ $train['stazione_arrivo'] }}</td>
                            <td>{{ Str::substr($train['orario_partenza'], 0, 5) }}</td>
                            <td>{{ Str::substr($train['orario_arrivo'], 0, 5) }}</td>
                            <td>{{ $train['codice_treno'] }}</td>
                            <td>{{ $train['azienda'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
