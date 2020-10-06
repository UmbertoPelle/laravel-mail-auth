@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <form action={{ route('post-update', $post -> id)}} method="post">
                  @csrf
                  @method('POST')
                  <div>
                    <label for="title">Title:</label><br>
                    <input type="text" name="title" value="{{ $post-> title}}">
                  </div>
                  <div>
                    <label for="description">Description:</label><br>
                    <input type="text" name="description" value="{{ $post -> description}}">
                  </div>
                  <div>
                    <label for="like">Like:</label><br>
                    <input type="number" name="like" value="{{ $post -> like}}">
                  </div>
                  <div>
                    <label for="dislike">Dislike:</label><br>
                    <input type="number" name="dislike" value="{{ $post -> dislike}}">
                  </div>
                  <br><br>
                  <button type="submit" name="button">Send</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
