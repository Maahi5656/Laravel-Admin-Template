@extends('layouts.page_blade_master')

@section('breadcrumb')
 Blog Details
@endsection
@section('content')

    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="blog-details-wrap">
                        <img src="{{asset('uploads/blog/'.$blogs->image)}}" class="w-100" alt="">
                        <h3>{{ $blogs->title  }}</h3>
                        <ul class="meta">
                            <li>19 JAN 2019</li>
                            <li>By Dr. John Darcy</li>
                        </ul>
                        <p>{{ $blogs->details  }}</p>
                        <div class="share-wrap">
                            <div class="row">
                                <div class="col-sm-7 ">
                                    <ul class="socil-icon d-flex">
                                        <li>share it on :</li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <a href="javascript:void(0);">Next Post <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form-area">
                        <div class="comment-main">
                            <h3 class="blog-title"><span>({{ $comments->count() }})</span>Comments:</h3>
                            <ol class="comments">
                                @foreach($comments as $comment)
                                <li class="comment even thread-even depth-1">
                                    <div class="comment-wrap">
                                        <div class="comment-theme">
                                            <div class="comment-image">
                                                <img src="assets/images/comment/1.png" alt="Jhon">
                                            </div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="sewl-comments-meta">
                                                    <h4>{{ $comment->name }} </h4>
                                                    <span>{{ $comment->created_at }}  at 2:30pm</span>
                                                </div>
                                                <div class="comment-area">
                                                    <p>{{ $comment->details }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ol>
                        </div>
                        <div id="respond" class="sewl-comment-form comment-respond form-style">
                            <h3 id="reply-title" class="blog-title">Leave a <span>comment</span></h3>
                            <form method="post" id="commentform" class="comment-form" action="{{ url('/comment') }}">
                                @csrf
                                @if(session('msg'))
                                    <p class="text-success">{{ session('msg') }}</p>
                                @endif
                                <div class="row">
                                    <input type="hidden" value="{{ $blogs->id }}" name="blogID">
                                    <div class="col-12">
                                        <div class="sewl-form-inputs no-padding-left">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <input id="name" name="name" tabindex="2" placeholder="Name" type="text">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <input id="email" name="email" tabindex="3" placeholder="Email" type="email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sewl-form-textarea no-padding-right">
                                            <textarea id="comment" name="comment" tabindex="4" rows="3" cols="30" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-submit">
                                            <input name="submit" id="submit" value="Send" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li><a href="#">Coconut Oil</a></li>
                                <li><a href="#">Honey</a></li>
                                <li><a href="#">Olive Oil</a></li>
                                <li><a href="#">Nut Oil</a></li>
                                <li><a href="#">Mustard Oil</a></li>
                                <li><a href="#">Sunrise Oil</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_recent_entries recent_post">
                            <h4 class="widget-title">Recent Post</h4>
                            <ul>
                                <li>
                                    <div class="post-img">
                                        <img src="assets/images/post/1.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-details.html">Lorem Ipsum is simply dummy text of the </a>
                                        <p>19 JAN 2019</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <img src="assets/images/post/2.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-details.html">Lorem Ipsum is simply dummy text of the </a>
                                        <p>19 JAN 2019</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <img src="assets/images/post/3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-details.html">Lorem Ipsum is simply dummy text of the </a>
                                        <p>19 JAN 2019</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <img src="assets/images/post/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-details.html">Lorem Ipsum is simply dummy text of the </a>
                                        <p>19 JAN 2019</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-details-area end -->
    <!-- start social-newsletter-section -->
    <section class="social-newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter text-center">
                        <h3>Subscribe  Newsletter</h3>
                        <div class="newsletter-form">
                            <form>
                                <input type="text" class="form-control" placeholder="Enter Your Email Address...">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

@endsection