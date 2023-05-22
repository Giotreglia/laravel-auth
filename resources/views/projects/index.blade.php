@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Client</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->client }}</td>
                                <td>{{ $project->type }}</td>
                                <td class="d-flex gap-1 justify-content-end">
                                    <a class="btn btn-secondary" href="{{ route('admin.projects.show', $project->id) }}">
                                        Dettagli
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->id) }}">
                                        Modifica
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('admin.projects.destroy', $project->id) }}">
                                        Elimina
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
