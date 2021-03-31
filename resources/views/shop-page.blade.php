@extends('layouts.page_blade_master')

@section('breadcrumb')
{{ $categories->name }}
@endsection

@section('content')


    <!-- .breadcumb-area end -->
    <!-- product-area start -->
    <div class="product-area pt-100">
        <div class="container">
            <div class="input-form">
                <form method="get">
                  <div class="input-group">
                    <input type="text" name="productSearch" class="" id="productSearch" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-default" name="searchButton" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="tab-content">                 
                <div class="tab-pane active" id="all">
                    <ul id="productContent" class="row justify-content-center">
                    	@foreach($products as $product)
                                <li class="col-xl-3 col-lg-4 col-sm-6 col-12 border border-secondary pt-3 m-2">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>Sale</span>
                                            <img src="{{ asset('uploads/product/'.$product->picture) }}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a href="{{ url('/product-details/'.$product->id) }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">{{ $product->name }}</a></h3>
                                            <p class="pull-left">{{ $product->price }} </p>
                                        </div>
                                    </div>
                                </li>   
                            @endforeach    
                        </ul> 
                </div>

            </div>
        </div>
    </div>
    <!-- product-area end -->
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

