<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user -> name }} - {{ $action }}</div>

                <div class="card-body">
                  <h1>{{ $post -> title}}</h1>
                  <h2>{{ $post -> description}}</h2>
                  <h4>Like: {{ $post -> like }}</h4>
                  <h4>Dislike: {{ $post -> dislike }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
