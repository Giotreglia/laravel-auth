@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center p-5">
        <div class="col-4">
            <div class="card">
                <img src="{{ $project->image }}" class="card-img-top ms_img" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Type: {{ $project->type }}</li>
                    <li class="list-group-item">Client: {{ $project->client }}</li>
                </ul>
                <a class="btn btn-primary my-2" href="{{ route('admin.projects.index', $project->id) }}">
                    Torna alla lista
                </a>
                <a class="btn btn-warning my-2" href="{{ route('admin.projects.index', $project->id) }}">
                    Modifica
                </a>
            </div>
        </div>

    </div>
@endsection
