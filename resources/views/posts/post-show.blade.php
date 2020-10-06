@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post -> title}}</div>

                <div class="card-body">
                  {{ $post -> description}}
                  <h4>Like: {{ $post -> like }}</h4>
                  <h4>Dislike: {{ $post -> dislike }}</h4>

                  @auth
                    <a class="btn btn-primary" href="#">edit</a>
                    <a class="btn btn-danger" href={{ route('post-delete', $post -> id)}}>delete</a>
                  @else
                    <h2>Please do loggin to edit!</h2>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
