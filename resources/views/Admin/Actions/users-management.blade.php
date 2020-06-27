@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Users Management</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Registered Users</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons2" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Bank</th>
                                        <th>Account No</th>
                                        <th>Account Name</th>
                                        <th>Balance</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->role_id == 1 ? "Customer" : "Admin"}}</td>
                                            <td>{{$user->accountDetail == null ? "Nill" : $user->accountDetail->bank}}</td>
                                            <td>{{$user->accountDetail == null ? "Nill" : $user->accountDetail->account_number}}</td>
                                            <td>{{$user->accountDetail == null ? "Nill" : $user->accountDetail->name}}</td>
                                            <td>{{$user->account_balance}}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <div class="d-flex justify-content-start">
                                                    <a href="{{route('admin.user-details', ['token' => $user->token])}}">
                                                    <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                    </span>
                                                    </a>
                                                    &nbsp;@if($user->role_id == 1)
                                                        <span data-toggle="modal" data-target=".makeAdmin-{{$key}}">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                                    <h4 class="text-primary"><i class="mdi mdi-account-cog-outline mdi-24px"></i></h4>
                                                            </a>
                                                        </span>
                                                    @else
                                                        <a href="{{route('admin.remove-admin', ['token' => $user->token])}}">
                                                        <span data-toggle="tooltip" data-placement="top" title data-original-title="Remove Admin">
                                                            <i class="mdi mdi-account-convert mdi-24px"></i>
                                                        </span>
                                                        </a>
                                                    @endif
                                                    <span data-toggle="modal" data-target=".replyMessageAdmin-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                                                <h4 class="text-primary"><i class="mdi mdi-message mdi-24px"></i></h4>
                                                        </a>
                                                    </span>
                                                    &nbsp;
                                                    <span data-toggle="modal" data-target=".editWalletAmount-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Sonia Wallet">
                                                                <h4 class="text-warning"><i class="mdi mdi-wallet mdi-24px"></i></h4>
                                                        </a>
                                                    </span>
                                                </div>
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
            <!-- end row -->
        </div>
    </div>
    @foreach($users as $key => $user)
        <div class="modal fade makeAdmin-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Make User Admin?</h4>
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
                        <a href="{{route('admin.make-admin', ['token' => $user->token])}}" class="btn btn-primary" >Yes</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade replyMessageAdmin-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Message</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{route('admin.send-message', ['token'=> $user->token])}}">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{$user->username}}" id="defaultconfig" disabled />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Message Title" id="defaultconfig" required />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" name="body" rows="3" placeholder="Your Message..." required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade editWalletAmount-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit {{$user->username}} Wallet</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{route('admin.edit-wallet', ['token' => $user->token])}}">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{$user->username}}" disabled />
                            </div>
                            <div class="mt-3">
                                <label>Wallet (&#8358;)</label>
                                <input type="number" class="form-control" name="wallet" value="{{$user->account_balance}}" id="defaultconfig" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Update Wallet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
