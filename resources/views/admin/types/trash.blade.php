@extends('layouts.app')

@section('title', 'Cestino Tipologie')

@section('main-content')

    <div class="container">
        <h1 class="text-center py-3">Tipi Cancellati</h1>
        <div class="row">

            @forelse ($types as $type)
                <div class="card col-6 m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $type->label }}</h5>

                        {{-- Buttons --}}
                        <div class="d-flex justify-content-evenly">

                            {{-- Delete Button --}}
                            <form class="form-delete" action="{{ route('admin.types.drop', $type) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Elimina Definitivamente</button>
                            </form>

                            {{-- Restore Button --}}
                            <form action="{{ route('admin.types.restore', $type) }}" method="POST">
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

                {{-- All types Button --}}
                <a href="{{ route('admin.types.index') }}" class="btn btn-outline-primary">Ritorna ai progetti</a>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @vite('resources/js/prevent-delete.js')
@endsection
