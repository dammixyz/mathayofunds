<!DOCTYPE html>
<html lang="en" class="js">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
        <!-- Fav Icon  -->
        <title>Mathayo Funds - Home</title>
        <!-- Vendor Bundle CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">
        {{--Font-AWESOME--}}
        <script src="{{asset('assets/js/fa.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/css/vendor.bundle.css')}}" >
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{asset('assets/css/style5152.css?ver=1.0')}}">
        <link rel="stylesheet" id="layoutstyle" href="{{asset('assets/css/theme5152.css?ver=1.0')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-91615293-2', 'auto');
            ga('send', 'pageview');
        </script>
        <style type="text/css">
            .page-item.active .page-link{
                background-color:#f7921a!important;
                border-color:#f7921a!important;
            }
        </style>
    </head>
    <body>
        @include('includes.header')
        @include('includes.btc-slider')
        @yield('contents')
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5ef100744a7c6258179b20f7/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        @include('includes.footer')
        <div class="modal" tabindex="-1" id="leaveReview" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{route('leave-review')}}" method="post">
                        @csrf
                        <div class="modal-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="modal-title">Your Review</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <b class="text-info"><span class="fa fa-info"></span> &nbsp; Notice:: Your review may be used for promotional purposes</b>
                        </div>
                        <div class="modal-body">
                            <div class="form-field form-m-bttm">
                    <textarea name="message" cols="10" rows="8" style="resize: none" placeholder="Share your experience with us so far."
                              class="form-control required" aria-required="true"
                              type="text" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-xs btn-alt"><span><i class="fa fa-send"></i> &nbsp;</span><b>Send</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{asset('assets/js/jquery.bundle.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
        <script src="{{asset('file-upload/file-upload-with-preview.min.js')}}"></script>
        <script src="{{asset('assets/js/platform.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(window).on('load', function () {
                $('div#themes_panel').hide();
            })
        </script>
        <script type="text/javascript">
            @if(session('failure'))
            toastr.error('{{session("failure")}}');
            @endif
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            toastr.error('{{$error}}');
            @endforeach
            @endif
            @if(session('success'))
            toastr.success('{{session("success")}}');
            @endif
        </script>
        @yield('script_contents')
    </body>
</html>
