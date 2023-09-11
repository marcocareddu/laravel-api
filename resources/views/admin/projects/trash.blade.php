@extends('layouts.app')

@section('title', 'Cestino')

@section('main-content')

    <div class="container">
        <h1 class="text-center py-3">Cancellati</h1>
        <div class="row">

            @forelse ($projects as $project)
                <div class="card col-6 m-3" style="width: 18rem;">
                    <img src="{{ $project->thumb }}" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>

                        {{-- Buttons --}}
                        <div class="d-flex justify-content-evenly">

                            {{-- Delete Button --}}
                            <form class="form-delete" action="{{ route('admin.projects.drop', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Elimina Definitivamente</button>
                            </form>

                            {{-- Restore Button --}}
                            <form action="{{ route('admin.projects.restore', $project) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-success">Ripristina</button>
                            </form>

                        </div>
                    </div>
                </div>

            @empty
                <div class="alert alert-success">Non ci sono elementi</div>
            @endforelse

            <div class="d-flex justify-content-center">

                {{-- All projects Button --}}
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">Ritorna ai progetti</a>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @vite('resources/js/prevent-delete.js')
@endsection
