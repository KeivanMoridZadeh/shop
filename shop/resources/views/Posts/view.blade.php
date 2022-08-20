@extends('layouts.app')

@section('content')
    <section class="jumbotron album py-5 bg-light my-5 col-5 container text-center rounded ">
        <div class="container">
            <div class="card">
                <img src="#" class="card-img-top" alt="image"/>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}.</p>
                    <a href="#" class="btn btn-primary">Like</a>
                </div>
            </div>

        </div>
    </section>





@endsection
