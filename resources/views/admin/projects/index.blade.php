@extends('layouts.admin')

@section('content')

    <h1>Tutti i progetti</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Client Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td> 
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        <div>
                            {{-- bottone info --}}
                            <a class="mx-3 btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug])}}"><i class="fa-solid fa-circle-info"></i></a>
                            {{-- bottone modifica --}}
                            <a class="mx-3 btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->slug])}}"><i class="fa-solid fa-pen-to-square text-light"></i></a>
                        </div>
                    </td>
                    <td>
                        {{-- bottone elimina --}}
                        <div>
                            <form action="{{ route('admin.projects.destroy', ['project' => $project->slug])}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection