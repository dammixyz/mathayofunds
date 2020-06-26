@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <form class="app-search">
                        <div class="position-relative">
                            <input type="text" class="form-control" style="background-color: #e6e6e6;" placeholder="Search Blog Post...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Blog Posts</h4>
                        <span data-toggle="modal" data-target=".createBlogAdmin">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Create Blog Post">
                                    <h4 class="text-primary"><i class="mdi mdi-plus-circle mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">
                        <!-- Blog Post -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('mathayo.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".deleteBlogPost">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
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
