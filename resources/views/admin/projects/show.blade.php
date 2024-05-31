@extends('layouts.admin')

@section('content')
    <h2>Singolo progetto</h2>

    <div class="card">
        {{-- nome progetto --}}
        <div class="card-body">
            <h5 class="card-title">{{$project->name}}</h5>
        </div>
        {{-- corpo progetto --}}
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Slug</strong>:
                {{$project->slug}}
            </li>
            <li class="list-group-item">
                <strong>Nome Azienda</strong>:
                {{$project->client_name}}
            </li>
            @if ($project->summary)
                <li class="list-group-item">
                    <strong>Descrizione</strong>:
                    {{$project->summary}}
                </li>
            @endif
            
        </ul>
    </div>

    {{-- data di creazione --}}
    <div class="mt-4">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Data creazione</strong>:
                {{$project->created_at}}
            </li>
            <li class="list-group-item">
                <strong>Data di modifica</strong>:
                {{$project->updated_at}}
            </li>
        </ul>
    </div>
@endsection