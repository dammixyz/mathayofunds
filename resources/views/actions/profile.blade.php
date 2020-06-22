@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-md-offset-0 col-sm-8 ">
                    <div class="pricing-tab  section-pad section no-pt no-mt">
                        <div class="container">
                            <div class="tab-custom">
                                <div class="row no-pt no-mt">
                                    <div class="col-md-6 col-md-offset-3">
                                        <ul class="nav nav-tabs ucap">
                                            <li class="active"><a href="#buy-giftcard-tab" data-toggle="tab">Account Details</a></li>
                                            <li ><a href="#sell-giftcard-tab" data-toggle="tab">Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content no-pt no-mt">
                                    <div class="tab-pane fade in active no-pt no-mt" id="buy-giftcard-tab">
                                        <!-- Features Box -->
                                        <div class="features-box section section-pad pt-15">
                                            <div class="box round shadow-alt text-center">
                                                <form action="{{route('user.update-bank-details')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <h5 style="font-family: OpenSans; font-weight: bold">My Bank Details</h5>
                                                            <div class="clearfix">
                                                                <div id="bank_details">
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="bank" class="text-sm">Bank Name</label>
                                                                        <input name="bank" value="{{$account_details != null ? $account_details->bank : ""}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="text" required>
                                                                    </div>
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="account_no" class="text-sm">Bank Account
                                                                            Number</label>
                                                                        <input name="account_no" value="{{$account_details != null ? $account_details->account_number: ""}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="number" required>
                                                                    </div>
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="full_name" class="text-sm">Full Name (As per
                                                                            bank)</label>
                                                                        <input name="full_name" value="{{$account_details != null ? $account_details->name : ""}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-field form-button form-m-bttm">
                                                                <button type="submit" class="btn btn-xs btn-alt"
                                                                        style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End Features Box -->
                                    </div>
                                    <div class="tab-pane fade  no-pt no-mt" id="sell-giftcard-tab">
                                        <!-- Features Box -->
                                        <div class="features-box section section-pad pt-15">
                                            <div class="box round shadow-alt text-center">
                                                <form action="{{route('user.update-profile-details')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <h5 style="font-family: OpenSans; font-weight: bold">My Profile</h5>
                                                            <div class="clearfix">
                                                                <div id="user_details">
                                                                    <div class="custom-file-container" data-upload-id="profilePicture">
                                                                        <label for="profile_pic" class="text-sm"
                                                                               style="font-family: OpenSans, sans-serif; color: #373e45; margin-top: 20px"
                                                                        >
                                                                            Upload Your Image(Optional)
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="custom-file-container__image-clear"
                                                                                id="close_image_preview-profile-pic"
                                                                                title="Clear Image"
                                                                                style="color: red"
                                                                            >
                                                                                x
                                                                            </a>
                                                                        </label>
                                                                        <label
                                                                            class="custom-file-container__custom-file"
                                                                            style="margin-bottom: 15px;"
                                                                        >
                                                                            <input type="file" name="profile_pic" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-profile-pic" accept="image/*">
                                                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                            <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                                        </label>
                                                                        <div class="custom-file-container__image-preview" id="profile-pic"></div>
                                                                    </div>
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="username" class="text-sm">Username</label>
                                                                        <input name="username" value="{{Auth::user()->username}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="text" disabled required>
                                                                    </div>
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="email" class="text-sm">E-Mail</label>
                                                                        <input name="email" value="{{Auth::user()->email}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="text" disabled required>
                                                                    </div>
                                                                    <div class="form-field form-m-bttm">
                                                                        <label for="phone_number" class="text-sm">Phone Number</label>
                                                                        <input name="phone_number" value="{{Auth::user()->phone_number}}"
                                                                               class="form-control required" aria-required="true"
                                                                               type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-field form-button form-m-bttm">
                                                                <button type="submit" class="btn btn-xs btn-alt"
                                                                        style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End Features Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--End Features Box -->
@endsection
@section('script_contents')
    <script type="text/javascript">
        var firstUpload = new FileUploadWithPreview('profilePicture')
    </script>
@endsection
