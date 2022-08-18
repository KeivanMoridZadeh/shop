@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach ($test as $t)
                    <div class="col-md-4 mb-2">
                        <div class="card mh-100 box-shadow " >
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title fw-bold">{{ $t->title }}</h5>
                                <p class="card-text overflow-auto">{{ $t->body }}</p>
                                <div class="d-flex  justify-content-between align-items-center">
                                    <div class="btn-group ">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text-secondary" href="{{ route('post.show',['post'=>$t->id]) }}">view</a></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>

                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </main>
@endsection
