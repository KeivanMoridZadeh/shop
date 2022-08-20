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
                @foreach ($test as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card mh-100 box-shadow " >
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                                <p class="card-text overflow-auto">{{ $post->body }}</p>
                                <div class="d-flex  justify-content-between align-items-center">
                                    <div class="btn-group ">
                                        <button type="button" class="btn btn-sm "><a  href="{{ route('post.show',['post'=>$post->id]) }}">View More</a></button>
                                            @auth()

                                                    @if(!$post->likedBy(auth()->user()))
                                                        <form action="{{ route('post.likes' ,$post) }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm ">Like</button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('post.likes' ,$post) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm ">UnLike</button>
                                                        </form>
                                                    @endif
                                                        @can('delete',$post)
                                                            <form action="{{ route('post.delete',$post) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm ">Delete</button>
                                                            </form>
                                                        @endcan


                                            @endauth()
                                        <span class="ml-2 pt-1 pr-1"> {{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }}</span>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $test->links() }}
        </div>
    </div>


    </main>

@endsection
