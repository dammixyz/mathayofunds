@extends('layouts.app')
@section('contents')
    <div class="section section-pad">
    <div class="container">
        <div class="tab-custom">
            <div class="row">
                <div class="col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">
                    <ul class="nav nav-tabs ucap" id="loginreg-form">
                        <li class="active"><a href="#tab1" data-toggle="tab">Forgot Password</a></li>
                    </ul>
                </div>
            </div>
            <div class="gaps size-2x"></div>
            <!-- Tab panes -->
            <div class="tab-content no-pd">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <h3 class="heading-lead center">Enter Your Email</h3>
                            <form class="form-signup" action="{{route('forgot-password-email')}}" method="post">
                                @csrf
                                <div class="form-results"></div>
                                <div class="form-group">
                                    <div class="form-field form-m-bttm">
                                        <input name="email" type="text" placeholder="E-Mail *" class="form-control required" aria-required="true" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-alt">Send</button>
                                <span class="gaps"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
