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
                            @foreach($blogs as $key => $blog)
                                 <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{asset('uploads/'. $blog->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mt-0">Blog Title</h4>
                                        <p class="card-text">{{$blog->title}}</p>

                                        <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".viewBlogPost-{{$key}}">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <span data-toggle="modal" data-target=".editBlogPost-{{$key}}">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Blog">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                            <a href="{{route('admin.delete-blog', ['id' => $blog->id])}}" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Blog">
                                                <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>

                    <div class="col-lg-12">
                        <ul class="pagination pagination-rounded justify-content-center mt-4">
                            {{$blogs->links()}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @foreach($blogs as $key => $blog)
        <div class="modal fade viewBlogPost-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="card-img-top img-fluid" src="{{asset('uploads/'.$blog->image)}}" alt="Card image cap">
                        </div>
                        <div class="mt-3">
                            <h5>{{$blog->title}}</h5>
                        </div>
                        <div class="mt-3">
                            <p>
                                {{$blog->text}}
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade editBlogPost-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Blog Post</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{route('admin.edit-blog', ['id' => $blog->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Blog Image" />
                            </div>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{$blog->title}}" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Text</label>
                                <textarea id="textarea" class="form-control" name="text" rows="10" placeholder="Blog Text...">{{$blog->text}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade createBlogAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Create A Blog Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" action="{{route('admin.create-blog')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Blog Image" required />
                        </div>
                        <div class="mt-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Blog Title" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Text</label>
                            <textarea id="textarea" class="form-control" name="text" rows="3" placeholder="Blog Text..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
