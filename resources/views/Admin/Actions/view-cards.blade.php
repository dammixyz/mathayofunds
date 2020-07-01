@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Cards Management</h4>
                        <span data-toggle="modal" data-target=".addCard">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Card">
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
                                        <th scope="col">Card Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($cards as $key => $card)
                                         <tr>
                                            <td>{{$card->id}}</td>
                                            <td>{{$card->name}}</td>
                                            <td>{{$card->created_at}}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".editCard-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Coin Rate">
                                                                <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;

                                                    <span data-toggle="modal" data-target=".view-image-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Image">
                                                                <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
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
    @foreach($cards as $key => $card)
        <div class="modal fade editCard-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Card Info</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.edit-card', ['token' => $card->token])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Card Name</label>
                                <input type="text" class="form-control" name="name" value="{{$card->name}}" id="defaultconfig" required/>
                            </div>
                            <div class="mt-3">
                                <label>Card Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Update Card</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade view-image-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <img src="{{asset($card->image)}}" class="img-fluid" alt="Responsive image">
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
    <div class="modal fade addCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Card </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.add-card')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Card Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Card Name" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Card Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*"  required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
