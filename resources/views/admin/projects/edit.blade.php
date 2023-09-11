@extends('layouts.app')

@section('title', 'Modifica')

@section('main-content')

    {{-- Errors management --}}
    @include('includes.error')

    <div class="container text-center">
        @include('includes.projects.form')
    </div>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection
