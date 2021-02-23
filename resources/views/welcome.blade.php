@extends('template.main')

@section('content')
    <h1 class="text-center">Liste membres</h1>
    @include('partials.tables')
    <form action="/deleteAll" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit">Delete All</button>
    </form>
@endsection