<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <title>MathayoFunds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Lexican" name="author" />
{{--
    <link rel="shortcut icon" href="assets/images/favicon.ico">
--}}

    <!-- Bootstrap Css -->
    <link href="{{asset('_admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('_admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('_admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('_admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('_admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="{{asset('_admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('_admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('Admin.layout.header')
        @include('Admin.layout.sidebar')
        <div class="main-content">
            @yield('contents')
            {{--Modals--}}
            <div class="modal fade coinProofUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Upload Payment Proof</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Payment Proof</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Coin Transactions</b> table
                            </p>
                            <div class="mt-3">
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" placeholder="Upload your payment proof" name="payment_proof" id="defaultconfig" />
                            </div>

                            <br><br>

                            <h5 class="text-center">Message (Optional)</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade coinUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Customer's Payment Proof</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <img src="{{asset('mathayo.jpg')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">You Are About to Cancel This Transaction</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Message</h5>
                            <p class="text-muted mb-2 text-center">
                                Let your customer know the reason you cancelled this transaction. This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Upload Payment Proof</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Payment Proof</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Card Transactions</b> table
                            </p>
                            <div class="mt-3">
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" placeholder="Upload your payment proof" name="Rate" id="defaultconfig" />
                            </div>

                            <br><br>

                            <h5 class="text-center">Message (Optional)</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade rateMessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Negotiate with the Customer</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Rate</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Payable</b> field
                            </p>
                            <div class="mt-3">
                                <label>Your Rate</label>
                                <input type="number" class="form-control" placeholder="Enter your rate" name="Rate" id="defaultconfig" />
                            </div>

                            <br><br>

                            <h5 class="text-center">Message</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade makeAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Make User Admin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade sendMessageAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Message</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username of the customer" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade replyMessageAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Message</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="StuNNer" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade readMessageAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Message From DreMoney</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Some quick example text to build on the card title and make up the bulk of the card's content</h5>
                            <p class="mb-3">2 days ago</p>
                            <p class="text-muted mb-2">
                                Some quick example text to build on the card title and make up the bulk of the card's content
                                Some quick example text to build on the card title and make up the bulk of the card's content
                                Some quick example text to build on the card title and make up the bulk of the card's content
                                Some quick example text to build on the card title and make up the bulk of the card's content
                                Some quick example text to build on the card title and make up the bulk of the card's content
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade createBlogAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Create A Blog Post</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Blog Image" />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Blog Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Text</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Blog Text..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Create Blog</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade editBlogPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit Blog Post</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Blog Image" />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" value="The Mathayo Funds Company is a registered" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Text</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Blog Text...">The Mathayo Funds Company is a registered business under the CAC, you have nothing to worry about regarding the safety of your moneyThe Mathayo Funds Company is a registered business under the CAC, you have nothing to worry about regarding the safety of your money</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Update Blog</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade deleteBlogPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete Blog Post</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade viewBlogPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Blog Post</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                            </div>
                            <div class="mt-3">
                                <h5>The Mathayo Funds Company is a registered</h5>
                            </div>
                            <div class="mt-3">
                                <p>
                                    The Mathayo Funds Company is a registered business
                                    under the CAC, you have nothing to worry about regarding the safety
                                    of your moneyThe Mathayo Funds Company is a registered
                                    business under the CAC, you have nothing to worry
                                    about regarding the safety of your money
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addGiftCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Add Gift Card</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" />
                            </div>
                            <div class="mt-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="Title" placeholder="Gift Card Name. example: Amazon" id="defaultconfig" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Add Gift Card</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade editGiftCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit Gift Card</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" />
                            </div>
                            <div class="mt-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="Title" value="Amazon" id="defaultconfig" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Update Gift Card</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade deleteGiftCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete Gift Card</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addGiftCardRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Add Gift Card Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Type (i.e Gift Card Name)</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Gift Card Name" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Enter Country" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Rate ($)</label>
                                <input type="number" class="form-control" name="rate" placeholder="Enter The Gift Card's Rate ($)" id="defaultconfig" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Add Rate</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade editGiftCardRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit Gift Card Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Type (i.e Gift Card Name)</label>
                                <input type="text" class="form-control" name="name" value="Amazon" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" value="USA" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Rate ($)</label>
                                <input type="number" class="form-control" name="rate" value="450" id="defaultconfig" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Update Rate</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade deleteGiftCardRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete Gift Card Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addCoinRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Add Coin Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Coin (i.e Coin Name)</label>
                                <input type="text" class="form-control" name="coin" placeholder="Enter Coin Name e.g Bitcoin" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Rate($)</label>
                                <input type="number" class="form-control" name="rate" placeholder="Enter The Coin's Rate ($)" id="defaultconfig" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Add Rate</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade editCoinRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit Coin Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Coin (i.e Coin Name)</label>
                                <input type="text" class="form-control" name="coin" value="Ethereum" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Rate($)</label>
                                <input type="number" class="form-control" name="rate" value="200" id="defaultconfig" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Update Rate</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade deleteCoinRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Delete Coin Rate</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade editWalletAmount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Edit StuNNer Wallet</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="coin" value="StuNNer" disabled />
                            </div>
                            <div class="mt-3">
                                <label>Wallet (&#8358;)</label>
                                <input type="number" class="form-control" name="wallet" value="30000" id="defaultconfig" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Update Wallet</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade viewUserDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Accout Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="name" value="GTBank" disabled/>
                            </div>
                            <div class="mt-3">
                                <label>Bank Account Number</label>
                                <input type="number" class="form-control" name="country" value="072783878" disabled />
                            </div>
                            <div class="mt-3">
                                <label>Full Name (As per bank)</label>
                                <input type="text" class="form-control" name="rate" value="StuNNer DreMoney" disabled />
                            </div>
                            <div class="mt-3">
                                <label>Amount Requested To Be Paid</label>
                                <input type="text" class="form-control" name="rate" value="&#8358;25,000" disabled />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade cancelPaymentRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">You Are About to Cancel This Payment Request</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Send a Message</h5>
                            <p class="text-muted mb-2 text-center">
                                Let your customer know the reason you cancelled the payment request. This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="Title" placeholder="Message Title"/>
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Payment Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade approvePaymentRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Approve Wallet Payment Request</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-3">
                                <p>
                                    Ensure that you have paid the customer the requested amount before you approve the payment
                                    <br><br>
                                    Are you sure?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            @include('Admin.layout.footer')
        </div>
    </div>
<script src="{{asset('_admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('_admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('_admin/assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('_admin/assets/js/app.js')}}"></script>
    <!-- Required datatable js -->
    <script src="{{asset('_admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('_admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('_admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('_admin/assets/js/pages/datatables.init.js')}}"></script>

    <script src="{{asset('_admin/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('_admin/assets/js/pages/form-element.init.js')}}"></script>

    <script src="{{asset('_admin/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

    <script src="{{asset('_admin/assets/js/pages/form-repeater.int.js')}}"></script>
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


