@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Book Data
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('book.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Title:</label>
                    <input type="text" class="form-control" name="title" />
                </div>

                <div class="form-group">
                    <label for="country_name">Author:</label>
                    <input type="text" class="form-control" name="author" />
                </div>

                <div class="form-group">
                    <label for="country_name">Edition:</label>
                    <input type="text" class="form-control" name="edition" />
                </div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </div>
    </div>
@endsection
