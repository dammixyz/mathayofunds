@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                    <div class="box round shadow-alt">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sidebar-right wgs-box">
                                    <div class="wgs-search">
                                        <div class="wgs-content">
                                            <div class="form-group">
                                                <input id="search-message" type="text" class="form-control"  placeholder="Search Message...">
                                                <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <div class="gaps size-1x"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h5>My Messages</h5>
                            <a href="#" data-toggle="modal" data-target="#sendMessageModal"><span><i class="fa fa-send"></i> &nbsp;</span><b>Send
                                    Message</b></a>
                        </div>
                        @foreach($chats as $key => $chat)
                            <div class="box round @if($chat->sender == 0) shadow-alt @endif" @if($chat->sender == 1)style="background: #fff1e0; margin-bottom: 16px;" @endif>
                                <h6>@if($chat->sender == 0)You (Sent to admin) @else Admin @endif
                                    <span>
                                        <p>{{\Carbon\Carbon::parse($chat->created_at)->diffForHumans()}}</p>
                                    </span>
                                </h6>
                                <p>
                                    {{$chat->title}}
                                    <span><a href="#" class="" data-toggle="modal" data-target="#readMessageModal-{{$key}}">Read Message</a></span>
                                </p>
                            </div>
                        @endforeach
                        <div class="row text-center">
                            <div class="col-md-12">
                                <ul class="pagination pagination-lg">
                                    {{$chats->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
    {{--Send Message Modal--}}
    <div class="modal" tabindex="-1" id="sendMessageModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('user.send-chat')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-field form-m-bttm">
                    <textarea name="message" cols="10" rows="8" style="resize: none" placeholder="Leave a message"
                              class="form-control required" aria-required="true"
                              type="text" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-xs btn-alt"><span><i class="fa fa-send"></i> &nbsp;</span><b>Send</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--Read Meassage Modal--}}
    @foreach($chats as $key => $chat)
        <div class="modal fade" id="readMessageModal-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <div class="">

                            <h5 class="modal-title" style="color: #f7921a;"></h5><span><h6>{{$chat->title}}</h6></span>
                            <p>{{\Carbon\Carbon::parse($chat->created_at)->diffForHumans()}}</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    {{$chat->body}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('script_contents')

@endsection
