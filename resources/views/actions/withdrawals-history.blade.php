@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                    <div class="box round shadow-alt mb-15">
                        <div class="d-flex justify-content-between">
                            <h6 class="ucap">Withdrawal History</h6>
                        </div>
                        <p class="small">History of all your withdrawals</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sidebar-right wgs-box">
                                    <div class="wgs-search">
                                        <div class="wgs-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                       id="search-withdrawals-history"
                                                       placeholder="Search Withdrawals History...">
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
                        <div class="table-responsive">
                            <table class="table table-hover mb-15" id="withdrawalsHistory">
                                <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($histories as $history)
                                        <tr>
                                            <th >1</th>
                                            <td>{{$history->amount}}</td>
                                            <td>
                                                @if($history->status == 0)
                                                    <div class="badge" style="background-color: orange">Pending
                                                    </div>
                                                @elseif($history->status == 1)
                                                    <div class="badge" style="background-color: green">Completed
                                                    </div>
                                                @else
                                                    <div class="badge" style="background-color: red">Canceled
                                                    </div>
                                                @endif

                                            </td>
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

            /*Data Table*/
            const cardTable = $('#withdrawalsHistory').DataTable({
                responsive: true,
                bPaginate: true,
                bLengthChange: false,
                bFilter: true,
                bInfo: true,
                bAutoWidth: true,
                pageLength: 15,
            });
            /*Remove the default search box*/
            $('#withdrawalsHistory_filter').remove()
            /*Add datatable search functionality to custom search box*/
            $('#search-withdrawals-history').keyup(function () {
                cardTable.search($(this).val()).draw();
            })
        })
    </script>
@endsection
