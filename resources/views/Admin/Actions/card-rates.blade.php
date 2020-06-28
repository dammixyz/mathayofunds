@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Gift Card Rates Management</h4>
                        <span data-toggle="modal" data-target=".addGiftCardRate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Gift Card Rate">
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
                            <h4 class="card-title mb-3">Gift Card Rates</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Rate($)</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($rates as $key => $rate)
                                        <tr>
                                            <td>{{$rate->id}}</td>
                                            <td>{{$rate->card->name}}</td>
                                            <td>{{$rate->country->name}}</td>
                                            <td>{{$rate->rate}}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".editGiftCard-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title
                                                           data-original-title="Edit Gift Card Rate">
                                                                <h4 class="text-primary">
                                                                    <i class="mdi mdi-square-edit-outline mdi-24px"></i>
                                                                </h4>
                                                        </a>
                                                    </span>&nbsp;
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
    @foreach($rates as $key => $rate)
        <div class="modal fade editGiftCard-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Gift Card</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{route('admin.edit-card-rate', ['token' => $rate->token])}}">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Rate</label>
                                <input type="number" class="form-control" name="rate" value="{{$rate->rate}}" id="defaultconfig" required />
                            </div>
                            <div class="mt-3">
                                <label class="control-label">Cards</label>
                                <select name="card" class="form-control select2" required>
                                    <option value="">Select Card</option>
                                    @foreach($cards as $card)
                                        <option value="{{$card->id}}" @if($card->id == $rate->card_id) selected @endif>{{$card->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <label class="control-label">Countries</label>
                                <select name="country" class="form-control select2" required>
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" @if($country->id == $rate->country_id) selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Gift Card</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade addGiftCardRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Gift Card Rate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.add-card-rate')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Rate</label>
                            <input type="number" class="form-control" name="rate" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Cards</label>
                            <select name="card" class="form-control select2" required>
                                <option value="">Select Card</option>
                                @foreach($cards as $card)
                                    <option value="{{$card->id}}">{{$card->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Countries</label>
                            <select name="country" class="form-control select2" required>
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Gift Card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
