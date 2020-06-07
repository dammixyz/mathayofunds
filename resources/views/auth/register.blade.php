{{--Get css necessary for styling this page--}}
@include('includes.head')
@include('includes.navbar')
<header class="header-base">
    <div class="container">
        <h1>Sign Up</h1>
        <h5>Join us and enjoy best crypto deals in Nigeria</h5>
    </div>
</header>
<main>
    <section class="section-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <form action="{{route('register')}}" class="form-box form-ajax" method="post">
                        @csrf
                        <p>Username</p>
                        <input id="username" name="username" placeholder="Username" value="{{ old('username') }}" type="text" class="input-text @error('username') is-invalid @enderror" required autocomplete="username">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;">{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="Email" type="email" class="input-text @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;" >{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <p>Phone Number</p>
                                <input name="phone_number" id="phone_number" type="number" autocomplete="phone_number" class="input-text @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" placeholder="Phone Number" required>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <p>Password</p>
                        <input name="password" id="password" type="password" data-toggle="datepicker" class="input-text @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; font-size: 14px;" >{{ $message }}</strong>
                                    </span>
                        @enderror
                        <p>Confirm Password</p>
                        <input id="password-confirmation" name="password_confirmation" placeholder="Confirm password" type="password" class="input-text" required autocomplete="new-password">
                        <div class="form-checkbox">
                            <input type="checkbox" id="check" name="check" value="check" required>
                            <label for="check">I have read and accept the terms of <a href="#">service and the privacy policy</a> of mathayofunds</label>
                        </div>
                        <button class="btn btn-sm" type="submit">Sign Up</button>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@include('includes.footer-bar')
