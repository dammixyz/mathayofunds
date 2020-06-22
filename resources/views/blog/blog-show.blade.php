@extends('layouts.app')
@section('contents')
    <!--Section Blog Show -->
    <div class="section section-pad no-mt pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog<span> Post</span></h2>
                    <div class="post post-single">
                        <h3>{{$blog->title}}</h3>
                        <div class="post-meta">
                            <span class="pub-date"><em class="fa fa-user" aria-hidden="true"></em> Posted by Admin </span><br>
                            <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{$blog->created_at->format('j F, Y')}} </span>
                        </div>
                        <div class="row d-flex justify-content-center mb-15">
                            <div class="col-md-5">
                                <div class="box-image">
                                    <img alt="" src="{{asset($blog->image)}}">
                                </div>
                            </div>
                        </div>

                        <div class="post-entry">
                            {!! $blog->text !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Section -->
@endsection
@section('script_contents')

@endsection

