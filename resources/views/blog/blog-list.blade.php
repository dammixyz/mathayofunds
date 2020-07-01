@extends('layouts.app')
@section('contents')
    <!--Section Blog List-->
    <div class="section section-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 res-m-bttm">
                    <div class="row text-center">
                        <h2>Our Latest <span>Updates</span></h2>
                        <p>Stay connected. Get our latest gists and many more</p>
                        <hr>

                        @foreach($blogs as $blog)
                            <div class="col-sm-4">
                                <div class="blog-post shadow round">
                                    <div class="post-thumb"><a href="{{route('blogs.show', $blog->id)}}"><img src="{{asset($blog->image)}}" alt="post"></a></div>
                                    <div class="post-entry">
                                        <div class="post-meta"><span>Posted {{$blog->created_at->format('j F, Y')}}</span></div>
                                        <h5><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></h5>
                                        <a href="{{route('blogs.show', $blog->id)}}" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
                                    </div>
                                </div>
                                <div class="gaps size-3x"></div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <ul class="pagination pagination-lg">
                                {{$blogs->links()}}
                            </ul>
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

