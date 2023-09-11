@extends('layouts.app')

@section('title', 'Progetti')

@section('main-content')

    {{-- Errors management --}}
    @include('includes.error')
    <div class="container">
        <h1 class="fs-4 text-secondary py-4 text-center">Progetti</h1>
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="card col-5 m-3 text-bg-dark">
                    <img src="{{ asset('storage/' . $project->thumb) }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <p class="card-text">{{ $project->description }}</p>

                            {{-- Dinamic Relation Types --}}
                            <h4>{{ $project->type?->label }}</h4>

                            {{-- Dinamic Relation Technologies --}}
                            <h4>{{ $technology->label }}</h4>
                        </div>
                        <div class="d-flex">
                            <a href="{{ $project->url }}" class="btn btn-outline-dark"><i
                                    class="fa-brands fa-github"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-warning mx-3"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-outline-primary mx-3"><i
                                    class="fa-solid fa-eye"></i></a>

                            {{-- Delete Button --}}
                            <form class="form-delete" action="{{ route('admin.projects.destroy', $project) }}"
                                method="POST" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger text-black"><i
                                        class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/prevent-delete.js')
@endsection
