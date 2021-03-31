@extends('layouts.page_blade_master')

@section('breadcrumb')
 Cart
@endsection
@section('content')

    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="http://themepresss.com/tf/html/tohoney/cart">
                        <table class="table-responsive cart-wrap">
                            <thead>
                                <tr>
                                    <th class="images">Image</th>
                                    <th class="product">Product</th>
                                    <th class="ptice">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Total</th>
                                    <th class="remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $subtotal = 0;
                                    $shipping = 100;
                                    $total = $subtotal + $shipping;
                                @endphp
                                @foreach($carts as $cart)
                                    @php
                                        $product = App\Models\Product::findOrFail($cart['product_id']);
                                    @endphp
                                <tr>
                                    <td class="images">
                                        <img src="{{ asset('uploads/product/'.$product->picture) }}" alt="">
                                    </td>
                                    <td class="product"><a href="single-product.html">{{ $product->name }}</a></td>
                                    <td class="price">$ {{ $product->price }}</td>
                                    <td class="quantity cart-plus-minus">
                                        <input type="text" value="{{ $cart['qty'] }}" />
                                    </td>
                                    <td class="total">$ {{ $cart['total'] }}</td>
                                    <td class="remove">
                                        <a href="{{ route('cart.destroy',$cart['product_id']) }}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                    @php
                                        $subtotal += $cart['total']; 
                                        $total = $subtotal + $shipping;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                <div class="cartcupon-wrap">
                                    <ul class="d-flex">
                                        <li>
                                            <button>Update Cart</button>
                                        </li>
                                        <li><a href="shop.html">Continue Shopping</a></li>
                                    </ul>
                                    <h3>Cupon</h3>
                                    <p>Enter Your Cupon Code if You Have One</p>
                                    <div class="cupon-wrap">
                                        <input type="text" placeholder="Cupon Code">
                                        <button>Apply Cupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">

                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li><span class="pull-left">Subtotal </span>$ {{ $subtotal }} </li>
                                        <li><span class="pull-left">Shippping </span>$ {{ $shipping }} </li>
                                        <li><span class="pull-left"> Total </span> $ {{ $total }}</li>
                                    </ul>
                                    <a href="{{ url('checkout') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
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