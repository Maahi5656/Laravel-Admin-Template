@extends('layouts.page_blade_master')

@section('breadcrumb')
 Checkout
@endsection

@section('content')

    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-form form-style">
                        <h3>Billing Details</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Full Name *</p>
                                    <input type="text">
                                </div>
                                <div class="col-sm-12">
                                    <p>Phone No. *</p>
                                    <input type="text">
                                </div>
                                <div class="col-12">
                                    <p>Your Address *</p>
                                    <input type="text">
                                </div>
                                <div class="col-sm-12">
                                    <p>Town/City *</p>
                                    <input type="text">
                                </div>

<!--                                 <div class="col-12">
                                    <input id="toggle2" type="checkbox">
                                    <label class="fontsize" for="toggle2">Ship to a different address?</label>
                                    <div class="row" id="open2">
                                        <div class="col-12">
                                            <p>Country</p>
                                            <select id="s_country">
                                                <option value="1">Select a country</option>
                                                <option value="2">bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>
                                            </select>
                                        </div>
                                        <div class=" col-12">
                                            <p>First Name</p>
                                            <input id="s_f_name" type="text" />
                                        </div>
                                        <div class=" col-12">
                                            <p>Last Name</p>
                                            <input id="s_l_name" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Company Name</p>
                                            <input id="s_c_name" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Address</p>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                        <div class="col-12">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                        <div class="col-12">
                                            <p>Town / City </p>
                                            <input id="s_city" type="text" placeholder="Town / City" />
                                        </div>
                                        <div class="col-12">
                                            <p>State / County </p>
                                            <input id="s_county" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <p>Postcode / Zip </p>
                                            <input id="s_zip" type="text" placeholder="Postcode / Zip" />
                                        </div>
                                        <div class="col-12">
                                            <p>Email Address </p>
                                            <input id="s_email" type="email" />
                                        </div>
                                        <div class="col-12">
                                            <p>Phone </p>
                                            <input id="s_phone" type="text" placeholder="Phone Number" />
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-area">
                        <form action="">
                            <h3>Your Order</h3>
                            
                        </form>
                        
                        <ul class="total-cost">
                            @php
                                $subtotal = 0;
                                $shipping = 100;
                                $discount = ($subtotal + $shipping)*0.25;                                
                                $total = $subtotal + $shipping - $discount;
                                
                                $carts = session()->get('cart');
                            @endphp

                            @isset($carts)    
                                @foreach($carts as $cart)
                                    @php
                                        $products = App\Models\Product::findOrFail($cart['product_id']);
                                    @endphp
                       
                                <li>{{ $products->name}} <span>*{{ $cart['qty']}}</span> <span class="pull-right">$ {{ $cart['total'] }}</span>
                                    <input type="hidden" name="">
                                </li>
                                    @php
                                        $subtotal += $cart['total']; 
                                        $discount = $subtotal*0.25;                            
                                        $total = $subtotal + $shipping - $discount;                          
                                    @endphp                                                                   
                                @endforeach
                            @endisset    
                            <li>Subtotal <span class="pull-right">
                                <strong>
                                {{ $subtotal }}
                                <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                            </strong></span>
                            </li>
                            <li>Shipping <span class="pull-right">{{ $shipping }}</span>
                              <input type="hidden" name="shipping" value="{{ $shipping }}">
                            </li>
                            <li>Discount <span class="pull-right">{{ $discount }}</span>
                                <input type="hidden" name="discount" value="{{ $discount }}">
                            </li>
                            <li>Total<span class="pull-right">{{ $total }}
                                <input type="hidden" name="total" value="{{ $total }}">
                            </span>

                            </li>
                        </ul>
                        <ul class="payment-method">
                            <li>
                                <input id="card" type="checkbox" value="credit card">
                                <label for="card">Credit Card</label>
                            </li>
                            <li>
                                <input id="delivery" type="checkbox" value="cash">
                                <label for="delivery">Cash on Delivery</label>
                            </li>
                        </ul>
                        <button type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
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