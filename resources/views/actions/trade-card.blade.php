@extends('layouts.app')
@section('contents')
    <div class="pricing-tab  section-pad section">
        <div class="container">
            <div class="tab-custom">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="nav nav-tabs ucap">
                            <li class="active"><a href="#sell-giftcard-tab" data-toggle="tab">Sell Gift Card</a></li>
                            <li><a href="#buy-giftcard-tab" data-toggle="tab">Buy Gift Card</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content no-pt no-mt">
                    <div class="tab-pane fade in active no-pt no-mt" id="sell-giftcard-tab">
                        <!-- Features Box -->
                        <div class="features-box section section-pad no-pb pt-15">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                        <div class="box round " style="background: #fff1e0;">
                                            <form action="{{route('submit-trade-card-form')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h5 style="font-family: OpenSans; font-weight: bold">Please Fill All Fields Correctly</h5>
                                                        <div class="clearfix" id="card-form">
                                                            <div class="form-field form-m-bttm" id="card-type-wrapper">
                                                                <select name="giftcard-type" class="form-control" id="giftcard-type"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Gift Card</option>
                                                                    @foreach($cards as $key => $card)
                                                                        <option value="{{$card->id}}" id="{{$key}}">{{$card->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm" id="giftcard-country-select">
                                                                <select name="country" class="form-control" id="giftcard-country"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Card's Country</option>
                                                                    @foreach($countries as $country)
                                                                        <option value="{{$country->id}}" id="usa">{{$country->name}}</option>
                                                                    @endforeach
                                                                    <option value="others" id="others">Others</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-field form-m-bttm" id="gc-denomination">
                                                                <select name="denomination" class="form-control" id="giftcard-denomination"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Card's Denomination</option>
                                                                    @foreach($denominations as $denomination)
                                                                        <option value="{{$denomination->id}}" id="d-25">{{$denomination->value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm" id="bank-wallet-option">
                                                                <select name="quote-request-hear" class="form-control" id="walletBank"
                                                                        aria-invalid="false">
                                                                    <option selected disabled>Select Payment Option</option>
                                                                    <option value="wallet" id="wallet">Wallet</option>
                                                                    <option value="bank" id="bank">Bank</option>
                                                                </select>
                                                            </div>
                                                            <div class="alert alert-info" id="giftcard-trade-sell">
                                                                We will pay &#8358;0 for $0
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <select name="sell_option" class="form-control" id="giftcard-sell-option"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Card's Sell Option</option>
                                                                    <option value="1" id="ecode">Ecode</option>
                                                                    <option value="2" id="card-upload">Card Upload</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-field form-button form-m-bttm">
                                                                <button type="submit" class="btn btn-xs btn-alt"
                                                                        style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                    Proceed
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                        {{--Gift Card Rates--}}
                                        <div
                                            class="box round shadow-alt pricing-box highlited light ucap shadow">
                                            <h4 class="ucap">Our Rates</h4>
                                            <hr>
                                            <h5 class="ucap">Amazon</h5>
                                            <h5>$1 = &#8358;460 <div style="color: darkgreen">($25 - $100)</div> </h5>
                                            <h5>$1 = &#8358;450 <div style="color: darkgreen">($150 - $250)</div></h5>
                                            <h5>$1 = &#8358;420 <div style="color: darkgreen">($500)</div></h5>
                                            <hr>
                                            <h5 class="ucap">PlayStore</h5>
                                            <h5>$1 = &#8358;460</h5>
                                            <hr>
                                            <h5 class="ucap">iTunes</h5>
                                            <h5>$1 = &#8358;460 <div style="color: darkgreen">($25-$200)</div></h5>
                                            <h5>$1 = &#8358;455 <div style="color: darkgreen">($250 - $500)</div></h5>
                                            <hr>
                                            <h5 class="ucap">PlayStation</h5>
                                            <h5>$1 = &#8358;460</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Features Box -->
                    </div>
                    <div class="tab-pane fade no-pt no-mt" id="buy-giftcard-tab">
                        <!-- Features Box -->
                        <div class="features-box section section-pad no-pb pt-15">
                            <div class="container">
                                <div class="row " style="display: flex !important; justify-content: center !important;">
                                    <div
                                        class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm"
                                    >
                                        <div class="box round " style="background: #fff1e0; background: transparent">
                                            <h3>Coming Soon ... <span style="color: red">*</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Pricing Tab -->
@endsection
@section('script_contents')
    <script>
        $(document).on('ready', function () {
            $('div#themes_panel').hide();
            $('#gc-denomination').hide();


            var app = @json($cards);
            var id;
            $("#giftcard-type").change(function() {
                id = $(this).find('option:selected').attr('id');
                if (id){
                    const gc_country = $('#giftcard-country').find(":selected").val();
                    if (gc_country !== ""){
                        $('#gc-denomination').show();
                    }
                }
                let selected_card = app[id].image;
                let selected_name = app[id].name;
                $('#card-image-display').remove();
                var html = '<div id="card-image-display"><div class="box round" class="'+selected_name+'-gc" id="gitfcard-'+selected_name+'">'
                    html +=   '<img src="'+selected_card+'" alt="box-image" class="box-image"> </div></div>'
                $( html ).insertAfter('#card-type-wrapper');
                var lower = (app[id].name).toLowerCase()
                if (lower === 'amazon'){
                    $('#card_upload_containers-wrapper').remove();
                    $('#receipt-type-wrapper').remove();
                    $('#ecode-option').remove();

                    var card_type = $('#giftcard-sell-option').find('option:selected').attr('id')
                    if (card_type === 'card-upload'){
                        $('#card_upload_containers-wrapper').remove();
                        $('#receipt-type-wrapper').remove();
                        $('#ecode-option').remove();
                        var html_rt = '<div id="receipt-type-wrapper"><div class="form-field form-m-bttm"><select name="receipt_type" class="form-control" id="receipt-type" aria-invalid="false" required>'
                        html_rt +=    '<option value="" selected disabled>Select Amazon\'s Receipt Type</option><option value="cash" id="cash">'
                        html_rt +=    'Cash</option><option value="deposit" id="deposit">Deposit</option></select></div></div>'
                        $( html_rt ).insertAfter('#giftcard-sell-option');

                        $("select#receipt-type").change(function() {
                            //alert("its brwww");
                            var rt = $(this).find('option:selected').attr('id')
                            if (rt === 'cash'){
                                $('#ecode-option').remove();
                                $('#card_upload_containers-wrapper').remove();
                                var html = '<div id="card_upload_containers-wrapper"><div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">'
                                html +=    '<label for="card_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px">'
                                html +=    'Upload Card<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-card-upload" title="Clear Image" style="color: red">'
                                html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                html +=    '<input type="file" name="card_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" multiple required>'
                                html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div></div>'
                                html += '<div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">'
                                html +=    '<label for="receipt_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px" id="upload-receipt-text">'
                                html +=    'Upload Card\'s Receipt<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-receipt-upload" title="Clear Image" style="color: red">'
                                html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                html +=    '<input type="file" name="receipt_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" multiple required>'
                                html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div></div></div>'
                                $( html ).insertAfter('#receipt-type-wrapper');
                                var secondUpload = new FileUploadWithPreview('cardUpload')
                                var secondUpload = new FileUploadWithPreview('receiptUpload')
                            }
                            else if (rt === 'deposit'){
                                $('#ecode-option').remove();
                                $('#card_upload_containers-wrapper').remove();
                                var html = '<div id="card_upload_containers-wrapper"><div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">'
                                html +=    '<label for="card_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px">'
                                html +=    'Upload Card<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-card-upload" title="Clear Image" style="color: red">'
                                html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                html +=    '<input type="file" name="card_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" multiple required>'
                                html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div></div>'
                                html += '<div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">'
                                html +=    '<label for="receipt_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px" id="upload-receipt-text">'
                                html +=    'Upload Card\'s Receipt<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-receipt-upload" title="Clear Image" style="color: red">'
                                html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                html +=    '<input type="file" name="receipt_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" multiple required>'
                                html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div></div></div>'
                                $( html ).insertAfter('#receipt-type-wrapper');
                                var secondUpload = new FileUploadWithPreview('cardUpload')
                                var secondUpload = new FileUploadWithPreview('receiptUpload')
                            }
                        });
                    }

                }else {
                    $('#receipt-type').remove();
                    $('#card_upload_containers-wrapper').remove();
                }
            });
            $("#giftcard-country").change(function() {
                var id = $(this).find('option:selected').attr('id')
                if (id){
                    const gc_type = $('#giftcard-type').find(":selected").val();
                    if (gc_type !== ""){
                        $('#gc-denomination').show();
                    }
                }
                if (id === 'others'){
                    var html= '<div id="specify-country-others-wrapper"><div class="form-field form-m-bttm" id="specify-country-others"><label for="country_others" class="text-sm">Other Country</label>'
                    html += '<input name="country_other" placeholder="Please specify card\'s country" class="form-control required" aria-required="true" type="text" required></div>'
                    $( html ).insertAfter('#giftcard-country-select');
                    //$('#specify-country-others').show()
                }else{
                    $('#specify-country-others-wrapper').remove();
                }
            });

            $("#giftcard-sell-option").change(function() {
                var card_type = $(this).find('option:selected').attr('id')
                if (card_type === 'ecode'){
                    $('#card_upload_container').remove();
                    $('#receipt_upload_container').remove();
                    $('#receipt-type-wrapper').remove();
                   var html = '<div class="form-field form-m-bttm" id="ecode-option"><label for="ecode_option" class="text-sm" style="font-size: 16px;">Ecode</label>'
                   html += '<input name="ecode" placeholder="Enter ecode" class="form-control required" aria-required="true" type="text" required></div>'
                    $( html ).insertAfter('#giftcard-sell-option');
                }
                if (card_type === 'card-upload'){
                    if ((app[id])){
                        var lower = (app[id].name).toLowerCase()
                        if (lower === 'amazon'){
                            $('#card_upload_containers-wrapper').remove();
                            $('#receipt-type-wrapper').remove();
                            $('#ecode-option').remove();
                            var html_rt = '<div id="receipt-type-wrapper"><div class="form-field form-m-bttm"><select name="receipt_type" class="form-control" id="receipt-type" aria-invalid="false" required>'
                            html_rt +=    '<option value="" selected disabled>Select Amazon\'s Receipt Type</option><option value="cash" id="cash">'
                            html_rt +=    'Cash</option><option value="deposit" id="deposit">Deposit</option></select></div></div>'
                            $( html_rt ).insertAfter('#giftcard-sell-option');

                            $("select#receipt-type").change(function() {
                                //alert("its brwww");
                                var rt = $(this).find('option:selected').attr('id')
                                if (rt === 'cash'){
                                    $('#card_upload_containers-wrapper').remove();
                                    $('#ecode-option').remove();
                                    var html = '<div id="card_upload_containers-wrapper"><div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">'
                                    html +=    '<label for="card_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px">'
                                    html +=    'Upload Card<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-card-upload" title="Clear Image" style="color: red">'
                                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                    html +=    '<input type="file" name="card_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" required multiple>'
                                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div></div>'
                                    html += '<div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">'
                                    html +=    '<label for="receipt_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px" id="upload-receipt-text">'
                                    html +=    'Upload Card\'s Receipt<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-receipt-upload" title="Clear Image" style="color: red">'
                                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                    html +=    '<input type="file" name="receipt_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" required multiple>'
                                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div></div></div>'
                                    $( html ).insertAfter('#receipt-type-wrapper');
                                    var secondUpload = new FileUploadWithPreview('cardUpload')
                                    var secondUpload = new FileUploadWithPreview('receiptUpload')
                                }
                                else if (rt === 'deposit'){
                                    $('#ecode-option').remove();
                                    $('#card_upload_containers-wrapper').remove();
                                    var html = '<div id="card_upload_containers-wrapper"><div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">'
                                    html +=    '<label for="card_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px">'
                                    html +=    'Upload Card<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-card-upload" title="Clear Image" style="color: red">'
                                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                    html +=    '<input type="file" name="card_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" required multiple>'
                                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div></div>'
                                    html += '<div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">'
                                    html +=    '<label for="receipt_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px" id="upload-receipt-text">'
                                    html +=    'Upload Card\'s Receipt<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-receipt-upload" title="Clear Image" style="color: red">'
                                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                                    html +=    '<input type="file" name="receipt_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" required multiple>'
                                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div></div></div>'
                                    $( html ).insertAfter('#receipt-type-wrapper');
                                    var secondUpload = new FileUploadWithPreview('cardUpload')
                                    var secondUpload = new FileUploadWithPreview('receiptUpload')
                                }
                            });
                            return
                        }
                    }
                    $('#ecode-option').remove();
                    var html = '<div id="card_upload_containers-wrapper"><div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">'
                    html +=    '<label for="card_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px">'
                    html +=    'Upload Card<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-card-upload" title="Clear Image" style="color: red">'
                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                    html +=    '<input type="file" name="card_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" required multiple>'
                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div></div>'
                    html += '<div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">'
                    html +=    '<label for="receipt_upload" class="text-sm" style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px" id="upload-receipt-text">'
                    html +=    'Upload Card\'s Receipt<a href="javascript:void(0)" class="custom-file-container__image-clear" id="close_image_preview-receipt-upload" title="Clear Image" style="color: red">'
                    html +=    'x</a></label><label class="custom-file-container__custom-file" style="margin-bottom: 15px;">'
                    html +=    '<input type="file" name="receipt_upload[]" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" required multiple>'
                    html +=    '<input type="hidden" name="MAX_FILE_SIZE" value="10485760" /><span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;">'
                    html +=    '</span></label><div class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div></div></div>'
                    $( html ).insertAfter('#giftcard-sell-option');
                    var secondUpload = new FileUploadWithPreview('cardUpload')
                    var secondUpload = new FileUploadWithPreview('receiptUpload')
                }
            });

            $("#walletBank").change(function() {
                id = $(this).find('option:selected').attr('id');
                if(id === 'wallet'){
                    $('#bankPayment').remove();
                    var html = '<div id="walletPayment"><div class="form-field form-m-bttm">'
                    html += '<label for="wallet_balance" class="text-sm">Wallet Balance</label>'
                    html += '<input name="wallet_balance" value="&#8358;{{Auth::user()->account_balance}}" class="form-control required" aria-required="true" type="text" disabled required></div></div>'
                    $( html ).insertAfter('#bank-wallet-option');
                }
                else if(id === 'bank'){
                    $('#walletPayment').remove();
                    var html = '<div id="bankPayment"><div class="form-field form-m-bttm"><label for="bank" class="text-sm">Bank Name'
                    html += '</label><input name="bank" value="{{Auth::user()->accountDetail->bank}}" class="form-control required" aria-required="true" type="text" disabled required>'
                    html += '</div><div class="form-field form-m-bttm"><label for="account_no" class="text-sm">Bank Account Number</label>'
                    html += '<input name="account_no" value="{{Auth::user()->accountDetail->account_number}}" class="form-control required" aria-required="true" type="text" disabled required>'
                    html += '</div><div class="form-field form-m-bttm"><label for="full_name" class="text-sm">Full Name (As per bank)</label>'
                    html += '<input name="full_name" value="{{Auth::user()->accountDetail->name}}" class="form-control required" aria-required="true" type="text" disabled required></div></div>'
                    $( html ).insertAfter('#bank-wallet-option');
                }

            });


        })
    </script>
@endsection
