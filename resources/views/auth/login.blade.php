{{--Get css necessary for styling this page--}}
@extends('layouts.app2')
@section('content')
    <header class="header-base">
        <div class="container">
            <h1>Login</h1>
            <h5>Welcome back</h5>
        </div>
    </header>
    <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <form action="{{route('login')}}"
                              class="form-box form-ajax" method="post">
                            @csrf
                             <input id="email" name="email" placeholder="Email" type="email"
                                   class="input-text @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                   required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Email</p>
                            <p>Password</p>
                            <input name="password" id="password" type="password" data-toggle="datepicker"
                                   class="input-text @error('password') is-invalid @enderror" placeholder="Check-out"
                                   required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button class="btn btn-sm" type="submit">Login</button>
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your message has been sent successfully
                                </div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
