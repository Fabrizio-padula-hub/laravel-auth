@extends('layouts.admin')

@section('content')
    <h2>Singolo progetto</h2>
    {{-- messaggio flash --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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


    <div class="d-flex align-items-center">
        <a class="mx-3 btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->id])}}">Modifica</a>
        <form action="{{ route('admin.projects.destroy', ['project' => $project->id])}}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection