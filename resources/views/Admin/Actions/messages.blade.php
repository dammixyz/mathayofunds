@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <form class="app-search">
                        <div class="position-relative">
                            <input type="text" class="form-control" style="background-color: #e6e6e6;" placeholder="Search Message...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Messages</h4>
                        <span data-toggle="modal" data-target=".sendMessageAdmin">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                    <h4 class="text-primary"><i class="mdi mdi-email-send-outline mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">
                        @foreach($messages as $key => $message)
                            <div class="card border {{$message->sender == 1 ? "border-success" : "border-primary"}}">
                                <div class="card-body">
                                    <h5 class="card-title mt-0 mb-2"><div class="{{$message->sender == 1 ? "text-success" : "text-primary"}}">{{$message->sender == 1 ? "You ( Sent to ". $message->user->username . " )" : "Message From " . $message->user->username}}</div>{{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</h5>
                                    <p class="card-text font-size-15">
                                        {{$message->title}}
                                        <a href="#" class="{{$message->sender == 1 ? "text-success" : "text-primary"}}" data-toggle="modal" data-target=".readMessageAdmin-{{$key}}">Read Message</a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        {{--Admin Message--}}{{--
                        <div class="card border border-success">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-2"><div class="text-success">You (Sent to DreMoney)</div>3 days ago</h5>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" class="text-success" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        --}}{{--User Message--}}{{--
                        <div class="card border border-primary">
                            <div class="card-body">
                                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom: 0px">
                                    <h5 class="card-title mt-0 mb-2"><div class="text-primary">Message From DreMoney</div>3 days ago</h5>
                                    <span data-toggle="modal" data-target=".replyMessageAdmin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Reply DreMoney">
                                                <h4 class="text-primary"><i class="mdi mdi-reply mdi-24px"></i></h4>
                                        </a>
                                    </span>
                                </div>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        --}}{{--User Message--}}{{--
                        <div class="card border border-primary">
                            <div class="card-body">
                                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom: 0px">
                                    <h5 class="card-title mt-0 mb-2"><div class="text-primary">Message From StuNNer</div>4 days ago</h5>
                                    <span data-toggle="modal" data-target=".replyMessageAdmin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Reply StuNNer">
                                                <h4 class="text-primary"><i class="mdi mdi-reply mdi-24px"></i></h4>
                                        </a>
                                    </span>
                                </div>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        --}}{{--Admin Message--}}{{--
                        <div class="card border border-success">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-2"><div class="text-success">You (Sent to StuNNer)</div>5 days ago</h5>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" class="text-success" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>--}}

                    </div>

                    <div class="col-lg-12">
                        <ul class="pagination pagination-rounded justify-content-center mt-4">
                            {{$messages->links()}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @foreach($messages as $key => $message)
        <div class="modal fade readMessageAdmin-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Message From {{$message->user->username}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>{{$message->title}}</h5>
                        <p class="mb-3">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</p>
                        <p class="text-muted mb-2">
                            {{$message->body}}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade sendMessageAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.reply-messages')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3">
                            <label class="control-label">Username</label>
                            <select name="token" class="form-control select2" required>
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                    <option value="{{$user->token}}">{{$user->username}}</option>
                                @endforeach
                            </select>
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
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
