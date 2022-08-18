@extends('layouts.app')

@section('content')
    <section class="jumbotron album py-5 bg-light my-5 col-5 container text-center rounded ">
        <div class="container">
            <h1 class="jumbotron-heading">Create Post</h1>
            <p class="lead text-muted">You can make your posts here!</p>

        </div>
    </section>

    <div class="album py-5 bg-light mb-5 col-7 container text-center rounded  ">
        <form action="{{ route('posts') }}" method="post">
            @csrf
            <div class="row justify-content-md-center">
                <div class="center col-5 ">
                    <div class="mb-3 ">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="Body" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>


@endsection
