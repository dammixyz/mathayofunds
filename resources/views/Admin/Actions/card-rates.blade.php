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
                                    <tr>
                                        <td>1</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>250</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>2</td>
                                        <td>PlayStore</td>
                                        <td>Canada</td>
                                        <td>350</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>3</td>
                                        <td>iTunes</td>
                                        <td>UK</td>
                                        <td>400</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>4</td>
                                        <td>Sephora</td>
                                        <td>Japan</td>
                                        <td>250</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                   <tr>
                                        <td>5</td>
                                        <td>PlayStore</td>
                                        <td>UK</td>
                                        <td>250</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Gift Card Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteGiftCardRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Gift Card Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
