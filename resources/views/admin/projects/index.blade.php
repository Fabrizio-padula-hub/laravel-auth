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
                            <a href="{{ route('admin.projects.show', ['project' => $project->id])}}">Info</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection