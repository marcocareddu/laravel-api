{{-- Display alert with errors bag --}}
@if ($errors->any())
    <div class="alert alert-danger container mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
