@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-sm-6 res-m-bttm">
                    <div class="row text-center">
                        <h4>Gift Cards</h4>
                        @foreach($images as $key => $image)
                            @if($image->image_type == 1)
                                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="box round shadow-alt" >
                                        <a href="#" data-toggle="modal" data-target="#viewGiftCard-{{$key}}"><img src="{{asset('uploads/'.$image->image)}}" alt="box-image" class="box-image"></a><br>
                                        <a href="#" class="btn btn-md btn-alt" data-toggle="modal" data-target="#viewGiftCard-{{$key}}">View Card</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <hr>
                    <div class="row text-center mb-15">
                        <h4>Receipts</h4>
                        @foreach($images as $key => $image)
                            @if($image->image_type == 2)
                                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="box round shadow-alt" >
                                        <a href="#" data-toggle="modal" data-target="#viewGiftCard-{{$key}}"><img src="{{asset('uploads/'.$image->image)}}" alt="box-image" class="box-image"></a><br>
                                        <a href="#" class="btn btn-md btn-alt" data-toggle="modal" data-target="#viewGiftCard-{{$key}}">View Receipt </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
    {{--View Gift Card--}}
    @foreach($images as $key => $image)
        <div class="modal" tabindex="-1" id="viewGiftCard-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Your Uploaded Resources</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-field form-m-bttm">
                            <img src="{{asset('uploads/'.$image->image)}}" alt="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script_contents')
    <script type="text/javascript">
        $(window).on('load', function () {
            $('div#themes_panel').hide();
            //ToolTip
            $('#upload-1').tooltip()
            $('#proof-1').tooltip()
            $('#upload-2').tooltip()
            $('#proof-2').tooltip()
            $('#upload-3').tooltip()
            $('#proof-3').tooltip()
            $('#upload-4').tooltip()
            $('#proof-4').tooltip()
            $('#upload-5').tooltip()
            $('#proof-5').tooltip()
            $('#upload-6').tooltip()
            $('#proof-6').tooltip()
            $('#upload-7').tooltip()
            $('#proof-7').tooltip()
            $('#upload-8').tooltip()
            $('#proof-8').tooltip()
            $('#upload-9').tooltip()
            $('#proof-9').tooltip()
            $('#upload-10').tooltip()
            $('#proof-10').tooltip()

            /*Data Table*/
            const coinTable = $('#coinTable').DataTable({
                responsive: true,
                bPaginate: true,
                bLengthChange: false,
                bFilter: true,
                bInfo: true,
                bAutoWidth: true,
                pageLength : 15,
            });
            /*Remove the default search box*/
            $('#coinTable_filter').remove()
            /*Add datatable search functionality to custom search box*/
            $('#search-coin-trade').keyup(function(){
                coinTable.search($(this).val()).draw() ;
            })
        })
    </script>
@endsection
