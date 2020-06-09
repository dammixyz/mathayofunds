@extends('layouts.app')
@section('contents')
    <!-- Section -->
    <div class="section section-pad">
        <div class="container">
            <div class="tab-custom">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">
                        <ul class="nav nav-tabs ucap" id="loginreg-form">
                            <li class="active"><a href="#tab1" data-toggle="tab">Log In</a></li>
                            <li><a href="#tab2" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="gaps size-2x"></div>
                <!-- Tab panes -->
                <div class="tab-content no-pd">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger"  style="margin-top: 10px; margin-left: 10px;">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                                @if(session('failure'))
                                    <div class="alert alert-danger" style="margin-top: 10px; margin-left: 10px;">
                                        {{session('failure')}}
                                    </div>
                                @endif
                                @if(session('success'))
                                    <div class="alert alert-success" style=" margin-top: 10px; margin-left: 10px;">
                                        {{session('success')}}
                                    </div>
                                @endif
                                <h3 class="heading-lead center">Login to your account</h3>
                                <form class="form-signup" action="{{route('user.login')}}" method="post">
                                    @csrf
                                    <div class="form-results"></div>
                                    <div class="form-group">
                                        <div class="form-field form-m-bttm">
                                            <input name="email" type="email" placeholder="Email *" class="form-control required email" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="password" type="password" placeholder="Password *" class="form-control required" aria-required="true" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-alt">Log In</button>
                                    <span class="gaps"></span>
                                    <p class="small">Not registered? <a class="switch-tab" data-tabnav="loginreg-form" href="#tab2" data-toggle="tab">Register here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                <h3 class="heading-lead center">Register an account</h3>
                                <form class="form-signup" action="{{route('user.registration')}}" method="post">
                                    @csrf
                                    <div class="form-results"></div>
                                    <div class="form-group">
                                        <div class="form-field form-m-bttm">
                                            <input name="username" type="text" placeholder="Username *" class="form-control required" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field form-m-bttm">
                                            <input name="email" type="email" placeholder="Email *" class="form-control required email" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field form-m-bttm">
                                            <input name="phone_number" type="number" placeholder="Phone Number *" class="form-control required" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="password" type="password" placeholder="Password *" class="form-control required" aria-required="true" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input name="password_confirmation" type="password" placeholder="Confirm Password *" class="form-control required" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="checkbox" name="signup-term" required> <span> I accept and agree with Mathayo Funds<a href="#">Terms and condition</a></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-alt">Signup</button>
                                    <span class="gaps"></span>
                                    <p class="small">Already registered? <a class="switch-tab" data-tabnav="loginreg-form" href="#tab1" data-toggle="tab">Login here</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@endsection
