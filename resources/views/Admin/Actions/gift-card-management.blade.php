@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form class="app-search">
                        <div class="position-relative">
                            <input type="text" class="form-control" style="background-color: #e6e6e6;" placeholder="Search Gift Card...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Gift Card Management</h4>
                        <span data-toggle="modal" data-target=".addGiftCard">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Gift Card">
                                    <h4 class="text-primary"><i class="mdi mdi-plus-circle mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">
                        <!-- Blog Post -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('giftcard1.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Sephora</h4>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('giftcard2.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Amazon</h4>
                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('giftcard3.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">PlayStore</h4>
                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('giftcard2.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">iTunes</h4>
                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('giftcard5.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">PlayStation</h4>
                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteGiftCard">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-12">
                        <ul class="pagination pagination-rounded justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
