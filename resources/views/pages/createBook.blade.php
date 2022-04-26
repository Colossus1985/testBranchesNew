@extends('layout.main')
@section('content')
<div class="container">
    <div class="row pt-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary me-3" href="{{ route('home') }}" enctype="multipart/form-data">Back</a>
            </div>
            <div class="pull-left mb-2">
                <h1><span class="alert-title">{{ $title }}</span></h1>
            </div>
        </div>
    </div>
    
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('livres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="title">
                        @error('title')
                    <div class="alert alert-danger mt-1 mb-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <div class="flex-fill me-2">
                    <div class="form-group">
                        <strong>First Name Auteur:</strong>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name Auteur">
                            @error('firstName')
                        <div class="alert alert-danger mt-1 mb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="flex-fill mx-2">
                    <div class="form-group">
                        <strong>Last Name Auteur:</strong>
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name Auteur">
                        @error('lastName')
                        <div class="alert alert-danger mt-1 mb-1">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value = Submit>
            </div>
        </div>
    </form>
</div>
@endsection