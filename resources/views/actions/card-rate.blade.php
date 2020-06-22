@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row mb-15 d-flex justify-content-center">
                <div class="col-md-9 col-sm-6 res-m-bttm">
                    <div class="box round shadow-alt">
                        <h6 class="ucap">Gift Card Rates</h6>
                        <p class="small">Here are list of all our card rates</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sidebar-right wgs-box">
                                    <div class="wgs-search">
                                        <div class="wgs-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="search-card-rate"
                                                       placeholder="Search Card Rate...">
                                                <button class="search-btn"><i class="fa fa-search"
                                                                              aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="gaps size-1x"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" id="giftcards-rates-table">
                            <table class="table table-hover" id="cardRateTable">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cards as $card)
                                    <tr>
                                        <th scope="row">{{$card->id}}</th>
                                        <td>{{$card->card->name}}</td>
                                        <td>{{$card->country->name}}</td>
                                        <td>{{$card->rate}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
@endsection
@section('script_contents')
    <script>
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
            const cardTable = $('#cardRateTable').DataTable({
                responsive: true,
                bPaginate: true,
                bLengthChange: false,
                bFilter: true,
                bInfo: true,
                bAutoWidth: true,
                pageLength: 15,
            });
            /*Remove the default search box*/
            $('#cardRateTable_filter').remove()
            /*Add datatable search functionality to custom search box*/
            $('#search-card-rate').keyup(function () {
                cardTable.search($(this).val()).draw();
            })
        })
    </script>
@endsection

