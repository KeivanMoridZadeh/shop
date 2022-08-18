@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h3 class="mb-5">Register</h3>

                                <div class="form-outline mb-4">
                                    <input type="text" id="name" class="form-control form-control-lg" name="name" placeholder="User name" value="{{
    old('name') }}"/>
                                    @error('name')
                                    <div class="text-danger mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}"/>
                                    @error('email')
                                        <div class="text-danger mt-2 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password"/>
                                    @error('password')
                                    <div class="text-danger mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password"/>
                                    @error('password')
                                    <div class="text-danger mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>


                                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
