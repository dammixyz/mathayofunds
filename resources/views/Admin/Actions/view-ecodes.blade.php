@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Ecode Rate Management</h4>
                        <span data-toggle="modal" data-target=".addEcode">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Ecode Rate">
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
                            <h4 class="card-title mb-3">Ecode</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Card</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($ecodes as $key => $ecode)
                                         <tr>
                                            <td>{{$ecode->id}}</td>
                                            <td>{{$ecode->card->name}}</td>
                                            <td>{{$ecode->rate}}</td>
                                            <td>{{$ecode->created_at}}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".editEcode-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Country">
                                                                <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;

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
    @foreach($ecodes as $key => $ecode)
        <div class="modal fade editEcode-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Rate</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.edit-ecode', ['token' => $ecode->token])}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Rate</label>
                                <input type="text" class="form-control" name="rate" value="{{$ecode->rate}}" id="defaultconfig" required/>
                            </div>
                            <div class="mt-3">
                                <label>Card</label>
                                <input type="text" class="form-control" name="card" value="{{$ecode->card->name}}" id="defaultconfig" disabled required/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Update Ecode Rate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade addEcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Ecode </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.add-ecode')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Ecode Rate</label>
                            <input type="number" class="form-control" name="rate" placeholder="Enter Ecode Rate" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Cards</label>
                            <select name="card_id" class="form-control select2" required>
                                <option value="">Select Card</option>
                                @foreach($cards as $card)
                                    <option value="{{$card->id}}">{{$card->name}}</option>
                                @endforeach
                            </select>
                        </div>
                     {{--   <div class="mt-3">
                            <label>Rate($)</label>
                            <input type="number" class="form-control" name="rate" placeholder="Enter The Coin's Rate ($)" id="defaultconfig" required />
                        </div>
--}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Ecode</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
