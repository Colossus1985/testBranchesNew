@extends('layout.main') 
@section('content')
<div class="mt-4">
    <a class="btn btn-info" href="{{ route('home') }}">Back</a>
    <h1><span class="alert-title">List of Books</span></h1>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @if (count($arrayBooks) == 0)
        <div>
            <p class="alert alert-danger">Sorry there are no movis at this kind yet</p>
        </div>
        @endif

        @foreach ($arrayBooks as $book)
        <tr>
            <td>{{ $book ->title }}</td>
            <td>{{ $book ->firstName }}</td>
            <td>{{ $book ->lastName }}</td>
            <td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
