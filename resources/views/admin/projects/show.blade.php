@extends('layouts.app')

@section('title', $project->name)

@section('main-content')
    <div class="container">
        <h1 class="fs-4 text-secondary my-4 text-center">Progetti</h1>
        <div class="row justify-content-center">
            <div class="card col m-3 text-center">
                <img src="{{ $project->thumb ? asset('storage/' . $project->thumb) : 'https://t3.ftcdn.net/jpg/03/45/05/92/360_F_345059232_CPieT8RIWOUk4JqBkkWkIETYAkmz2b75.jpg' }}"
                    class="card-img-top img-fluid" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ $project->url }}" class="btn btn-outline-dark"><i class="fa-brands fa-github"></i></a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-warning mx-3"><i
                                class="fa-solid fa-pencil"></i></a>

                        {{-- Delete Button --}}
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger text-black"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
