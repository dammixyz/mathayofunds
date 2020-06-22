@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                    <div class="box round shadow-alt text-center">
                        <form action="{{route('user.finalize-withdrawal')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h5 style="font-family: OpenSans; font-weight: bold">Withdrawal</h5>
                                    <div class="clearfix">
                                        <div id="withdrawal">
                                            <div class="form-field form-m-bttm">
                                                <label for="withdrawal_amount" class="text-sm">How much would you like to withdraw?</label>
                                                <input name="amount" id="withdrawal_amount"
                                                       class="form-control required" aria-required="true"
                                                       placeholder="Enter Amount in naira"
                                                       type="number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 style="font-family: OpenSans; font-weight: bold">Your Current Bank Details</h5>
                                    <div class="clearfix">
                                        <div id="bank_details">
                                            <div class="form-field form-m-bttm">
                                                <label for="bank" class="text-sm">Bank Name</label>
                                                <input name="bank" value="{{$account_details->bank}}"
                                                       class="form-control required" aria-required="true"
                                                       type="text" disabled required>
                                            </div>
                                            <div class="form-field form-m-bttm">
                                                <label for="account_no" class="text-sm">Bank Account
                                                    Number</label>
                                                <input name="account_no" value="{{$account_details->account_number}}"
                                                       class="form-control required" aria-required="true"
                                                       type="text" disabled required>
                                            </div>
                                            <div class="form-field form-m-bttm">
                                                <label for="full_name" class="text-sm">Full Name (As per
                                                    bank)</label>
                                                <input name="full_name" value="{{$account_details->name}}"
                                                       class="form-control required" aria-required="true"
                                                       type="text" disabled required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field form-button form-m-bttm">
                                        <button type="submit" class="btn btn-xs btn-alt btn-color"
                                                style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                            Withdraw
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
@endsection
@section('script_contents')

@endsection
