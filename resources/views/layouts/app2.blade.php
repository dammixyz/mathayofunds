<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MathayoFunds</title>
    <meta name="description" content="">
    <script src="{{asset('themekit/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('themekit/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/social.css')}}">
    <link rel="stylesheet" href="{{asset('skin.css')}}">
    <link rel="icon" href="{{asset('media/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
    <div id="preloader"></div>
    @include('includes.navbar')
    <main>
        @yield('content')
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="light">
        @yield('footer')
        @include('includes.footer-bar')
        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/5edc5c8e4a7c6258179a131c/default';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
            <!--End of Tawk.to Script-->
        <!--#Mathayo61502..-->
    <link rel="stylesheet" href="{{asset('themekit/media/icons/iconsmind/line-icons.min.css')}}">
    <script src="{{asset('themekit/scripts/parallax.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/glide.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/magnific-popup.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/tab-accordion.js')}}"></script>
    <script src="{{asset('themekit/scripts/imagesloaded.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/contact-form/contact-form.js')}}"></script>
    <script src="{{asset('themekit/scripts/progress.js')}}"></script>
    <script src="{{asset('themekit/scripts/pagination.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/social.min.js')}}"></script>
    <script src="{{asset('media/custom.js')}}"></script>
    <script data-setting="codrop" src="{{asset('../../themekit.dev/tools/sidebar/sidebar.js')}}"></script>
    <script src="{{asset('../../themekit/scripts/tab-accordion.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('script_content')
    <script type="text/javascript">
        @if(session('failure'))
             toastr.error('{{session("failure")}}');
        @endif
        {{--@if(count($errors)>0)
        @foreach($errors->all() as $error)
        toastr.error('{{$error}}');
        @endforeach
        @endif--}}
        @if(session('success'))
        toastr.success('{{session("success")}}');
        @endif
    </script>
</body>
</html>
