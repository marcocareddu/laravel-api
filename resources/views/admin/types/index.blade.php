@extends('layouts.app')

@section('title', 'Tipologie')

@section('main-content')
    {{-- Errors management --}}
    @include('includes.error')

    {{-- Errors management --}}
    @include('includes.error')
    <div class="container">
        <h1 class="fs-4 text-secondary py-4 text-center">Tipologie</h1>
        <div class="row justify-content-center">
            @foreach ($types as $type)
                <div class="card col-5 m-3 text-bg-dark">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $type->label }}</h5>
                            <h4>{{ $type->color }}</h4>

                        </div>
                        <div class="d-flex">

                            {{-- Delete Button --}}
                            <form class="form-delete" action="{{ route('admin.types.destroy', $type) }}" method="POST"
                                class="form-delete">
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
