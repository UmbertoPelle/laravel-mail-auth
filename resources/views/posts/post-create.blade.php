@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <form action={{ route('post-store') }} method="post">
                  @csrf
                  @method('POST')
                  <div>
                    <label for="title">Title:</label><br>
                    <input type="text" name="title">
                  </div>
                  <div>
                    <label for="description">Description:</label><br>
                    <input type="text" name="description">
                  </div>
                  <div>
                    <label for="like">Like:</label><br>
                    <input type="number" name="like">
                  </div>
                  <div>
                    <label for="dislike">Dislike:</label><br>
                    <input type="number" name="dislike">
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
