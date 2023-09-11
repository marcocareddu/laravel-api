@extends('layouts.app')

@section('title', 'Aggiungi')

@section('main-content')
    <div class="container text-center">
        @include('includes.projects.form')
    </div>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection
