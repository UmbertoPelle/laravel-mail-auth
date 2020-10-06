@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts:</div>

                <div class="card-body">
                  <ol>
                    @foreach ($posts as $post)
                      <li>
                        <a href={{ route('post-show', $post -> id)}}>
                          {{ $post -> title}}
                        </a><br>
                        {{ $post -> description}}
                      </li>
                    @endforeach
                  </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
