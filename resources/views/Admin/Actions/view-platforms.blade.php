@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Coin Platforms Management</h4>
                        <span data-toggle="modal" data-target=".addPlatform">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Platform">
                                    <h4 class="text-primary"><i class="mdi mdi-plus-circle mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Coin</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Coin</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($platforms as $key => $platform)
                                         <tr>
                                            <td>{{$platform->id}}</td>
                                            <td>{{$platform->name}}</td>
                                            <td>{{$platform->wallet_address}}</td>
                                            <td>{{$platform->coin->name}}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".editPlatform-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Coin ">
                                                                <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;
                                                    <span data-toggle="modal" data-target=".view-qrcode-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Qr Code">
                                                                <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;

                                                    {{--<span data-toggle="modal" data-target=".deleteCoinRate">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Coin Rate">
                                                                <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                        </a>
                                                     </span>--}}
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
        </div>
    </div>
    @foreach($platforms as $key => $platform)
        <div class="modal fade editPlatform-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Platform</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.edit-platform', ['token' => $platform->token])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Platform Name</label>
                                <input type="text" class="form-control" name="name" value="{{$platform->name}}" placeholder="Enter Coin Name e.g Bitcoin" id="defaultconfig" required />
                            </div>
                            <div class="mt-3">
                                <label>Wallet Address</label>
                                <input type="text" class="form-control" name="address" value="{{$platform->wallet_address}}" placeholder="Enter Wallet Address" id="defaultconfig" required />
                            </div>
                            <div class="mt-3">
                                <label>Qr Code</label>
                                <input type="file" class="form-control" name="image" accept="image/*" />
                            </div>
                            <div class="mt-3">
                                <label class="control-label">Coin</label>
                                <select name="coin" class="form-control select2" required>
                                    <option value="">Select Coin</option>
                                    @foreach($coins as $coin)
                                        <option value="{{$coin->id}}" @if($coin->id == $platform->coin_id) selected @endif>{{$coin->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Edit Platform</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade view-qrcode-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Qr Code</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <img src="{{asset($platform->qr_code)}}" class="img-fluid" alt="Responsive image">
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
    @endforeach
    <div class="modal fade addPlatform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Platform </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.add-platform')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Platform Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Coin Name e.g Bitcoin" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Wallet Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Wallet Address" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Qr Code</label>
                            <input type="file" class="form-control" name="image" accept="image/*"  required/>
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Coin</label>
                            <select name="coin" class="form-control select2" required>
                                <option value="">Select Coin</option>
                                @foreach($coins as $coin)
                                    <option value="{{$coin->id}}">{{$coin->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Platform</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
