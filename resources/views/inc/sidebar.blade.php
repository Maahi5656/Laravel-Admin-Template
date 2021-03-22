            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">04</span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">Apps</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fab fa-buffer"></i>
                                    <span key="t-brand">Brand</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/brand') }}" key="t-wallet">Add New Brand</a></li>
                                    <li><a href="{{ url('/brand/all') }}" key="t-buy">View All Brands</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-list-alt"></i>
                                    <span key="t-brand">Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/category') }}" key="t-wallet">Add New Category</a></li>
                                    <li><a href="{{ url('/category/all') }}" key="t-buy">View All Category</a></li>
                                    <li><a href="{{ url('/category/all/json') }}" key="t-buy">json category</a></li>
                                </ul>
                            </li>                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-box"></i>
                                    <span key="t-ecommerce">Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/product')  }}" key="t-products">Add New Products</a></li>
                                    <li><a href="{{ url('/product/all') }}" key="t-product-detail">View All Products</a></li>
                                    <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                                    <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                                    <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-box"></i>
                                    <span key="t-ecommerce">Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/blog')  }}" key="t-products">Add New Blog</a></li>
                                    <li><a href="{{ url('/blog/all') }}" key="t-product-detail">View All Blogs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-box"></i>
                                    <span key="t-ecommerce">Comment</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ url('/comment/all') }}" key="t-product-detail">View All Comments</a>
                                    </li>
                                </ul>
                            </li>                                                        



                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-email">Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                                    <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <span class="badge badge-pill badge-success float-right" key="t-new">New</span>
                                            <span key="t-email-templates">Templates</span>
                                        </a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                            <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                            <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" key="t-user-grid">User Grid</a></li>
                                    <li><a href="contacts-list.html" key="t-user-list">User List</a></li>
                                    <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->