@extends('layouts.main')
@section('title')
<title>{{ $story->title }} | DTU Times </title>
@endsection

@section('content')
<section id="page-title">

    <div class="container clearfix">
        <h1>Blog</h1>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
        ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
                    ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
                            ============================================= -->
                    <div class="entry clearfix">
                        <br>
                        <!-- Entry Title
                                ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $story->title }}</h2>
                        </div>
                        <!-- .entry-title end -->

                        <!-- Entry Meta
                                ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{ $story->created_at->diffForHumans()}}</li>
                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                        </ul>
                        <!-- .entry-meta end -->

                        <!-- Entry Image
                                ============================================= -->
                        <div class="entry-image">
                            @if ($story->getFirstMediaUrl('blog_images', 'fullscreen'))
                            <img alt="background" src="{{ $story->getFirstMediaUrl('blog_images', 'fullscreen') }}" /> @endif
                        </div>
                        <!-- .entry-image end -->

                        <!-- Entry Content
                                ============================================= -->
                        <div class="entry-content notopmargin"  style="font-size: 18px;">

                            <p>{!! $story->body !!}</p>


                            <!-- Post Single - Content End -->

                            <div class="clear"></div>

                        </div>
                    </div>
                    <!-- .entry end -->




                    <!-- Post Author Info
                            ============================================= -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Posted by <span><a href="#">{{$story->user->name}}</a></span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="{{$story->user->getFirstMediaUrl('avatars', 'thumb')}}" alt="" class="img-circle">
                            </div>
                            {{ $story->user->bio }}
                        </div>
                    </div>
                    <!-- Post Single - Author End -->

                    <div class="line"></div>





                </div>

            </div>
            <!-- .postcontent end -->

            <!-- Sidebar
                    ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">

                  <!--
                    <div class="widget clearfix">

                        <h4>Instagram Photostream</h4>

                        <-InstaWidget->
                        <a href="https://instawidget.net/v/user/dtu_times" id="link-73734ef5caafb9b7a4fbcd2ce68135d5d39b14869251ce0ffed917dd24dba4af">dtu_times</a>
                        <script src="https://instawidget.net/js/instawidget.js?u=73734ef5caafb9b7a4fbcd2ce68135d5d39b14869251ce0ffed917dd24dba4af&width=300px"></script>
                    </div>
                  -->



                    <div class="widget clearfix">

                        <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-1">Recent</a></li>

                            </ul>

                            <div class="tab-container">


                                <div class="tab-content clearfix" id="tabs-1">
                                    <div id="recent-post-list-sidebar">

                                        @if (count($stories))
                                            @foreach ($stories as $item)
                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="{{ route('blog.show', $item->slug) }}" class="nobg"><img class="img-circle" src="{{ $item->getFirstMediaUrl('blog_images', 'thumb') }}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="{{ route('blog.show', $item->slug) }}">{{ $item->title }}</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>{{ $item->created_at->diffForHumans()}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>





                </div>

            </div>
            <!-- .sidebar end -->

        </div>

    </div>

</section>
@endsection

@section('scripts')

@endsection
