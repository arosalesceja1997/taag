@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="uper ">
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div><br />
                @endif
                <table class="table table-striped">
                  <thead>
                      <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Edition</td>
                        <td>Publication data</td>
                        <td colspan="2">Action</td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($books as $book)
                      <tr>
                          <td>{{$book->id}}</td>
                          <td>{{$book->title}}</td>
                          <td>{{$book->author}}</td>
                          <td>{{$book->edition}}</td>
                          <td>{{$book->publication_data}}</td>
                          <td><a href="" class="btn btn-primary">Edit</a></td>
                          <td>
                              <form action="{{ route('book.destroy', $book->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              <div>
        </div>
    </div>
</div>
@endsection

