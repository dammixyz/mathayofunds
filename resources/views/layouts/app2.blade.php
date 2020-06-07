<!DOCTYPE html>
<html lang="en">

{{--HTML Head--}}
@include('includes.head')

{{--HTML Body--}}
<body>
{{--Preloader--}}
@include('includes.preloader')
{{--Navbar--}}
@include('includes.navbar')
<main>
    {{--Main Content--}}
    @yield('content')
</main>
{{--<i class="scroll-top-btn scroll-top show"></i>--}}
{{--Footer--}}
@yield('footer')
{{--@include('includes.footer')--}}
</body>

<!-- Mirrored from templates.themekit.dev/codrop/elements/navs/classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 21:34:49 GMT -->
</html>
