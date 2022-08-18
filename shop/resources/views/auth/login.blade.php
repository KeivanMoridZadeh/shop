@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Login</h3>

                                @if(session('status'))
                                    <div class=" py-2 mb-3  bg-danger fs-3 text-white rounded">
                                        {{ session('status') }}
                                    </div>
                                @endif


                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                            </div>
                            @error('email')
                                <div class="text-danger mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-outline mb-4">
                                <input type="password" id="Password" name="password" class="form-control form-control-lg" placeholder="Password" />

                            </div>
                            @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" />
                                <label class="form-check-label" for="remember"> Remember password </label>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </form>

@endsection
