    <!-- Side Menu Area Start -->
                    <nav id="sidebar" class="nav-sidebar">
                        <ul class="list-unstyled components" id="accordion">
                            <li>
                                <a href="/dashboard" class="wave-effect"><i class="fa fa-home mr-2"></i>Dashboard</a>
                            </li>
                                                        <li>
    <a href="#menu1" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-flag"></i>Manage Country
    </a>
    <ul class="collapse list-unstyled" id="menu1" data-parent="#accordion">
       
        <li>
            <a href="/manage-tax"><span>Manage Tax</span></a>
        </li>
        <li>
            <a href="/manage-special-discount"><span>Manage Special Discount</span></a>
        </li>
        <li>
            <a href="/shipping-charges"><span>Shipping Charges</span></a>
        </li>
    </ul>
</li>
{{-- <li>
    <a href="/admin-section" class=" wave-effect"><i class="fas fa-user-secret"></i>Sections</a>
</li> --}}
@if(Auth::guard('admin')->User()->orders==1 || Auth::guard('admin')->User()->user_type=='admin')
<li>
        <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i>Orders</a>
        <ul class="collapse list-unstyled" id="order" data-parent="#accordion" >
               <li>
                <a href="/admin-orders"> All Orders</a>
            </li>
            <li>
                <a href="/admin-pending-orders"> Pending Orders</a>
            </li>
            <li>
                <a href="/admin-completed-orders"> Completed Orders</a>
            </li>
            <li>
                <a href="/admin-declined-orders"> Declined Orders</a>
            </li>
            <li>
                <a href="/admin-refund-orders"> Refund Orders</a>
            </li> 

        </ul>
    </li>
@endif


    @if(Auth::guard('admin')->User()->products==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-cart"></i>Products
        </a>
        <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
            <li>
                <a href="/add-new-product"><span>Add New Product</span></a>
            </li>
            <li>
                <a href="/all-product"><span>All Products</span></a>
            </li>
           
            <li>
                <a href="/admin-section"><span>Sections</span></a>
            </li>
            <li>
                <a href="/add-category"><span>Add Category</span></a>
            </li>
        </ul>
    </li>
@endif

@if(Auth::guard('admin')->User()->customers==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-user"></i>Customers
        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
            <li>
                <a href="/admin-users"><span>Customers List</span></a>
            </li>
            <li>
                <a href="/admin-users-withdraws"><span>Withdraws</span></a>
            </li>
            <li>
                <a href="/admin-user-default-image"><span>Customer Default Image</span></a>
            </li>
        </ul>
    </li>
@endif
<!-- @if(Auth::guard('admin')->User()->vendors==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#vendor" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="icofont-ui-user-group"></i>Vendors
        </a>
        <ul class="collapse list-unstyled" id="vendor" data-parent="#accordion">
            <li>
                <a href="/vendors-list"><span>Vendors List</span></a>
            </li>
            <li>
                <a href="/vendors-withdraw"><span>Withdraws</span></a>
            </li>
            <li>
                <a href="/vendors-subscription"><span>Vendor Subscriptions</span></a>
            </li>
            <li>
                <a href="/default-background"><span>Default Background</span></a>
            </li>

        </ul>
    </li>
@endif

    <li>
        <a href="#vendor1" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="icofont-verification-check"></i>Vendor Verifications
        </a>
        <ul class="collapse list-unstyled" id="vendor1" data-parent="#accordion">
            <li>
                <a href="/
                "><span>All Verifications</span></a>
            </li>
            <li>
                <a href="/pending-verificatons"><span>Pending Verifications</span></a>
            </li>
        </ul>
    </li>
 -->
<!-- @if(Auth::guard('admin')->User()->vendor_subscription_plans==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="/vendor-subscriptions-plans" class=" wave-effect"><i class="fas fa-dollar-sign"></i>Vendor Subscription Plans</a>
    </li>
@endif -->
@if(Auth::guard('admin')->User()->categories==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#menu5" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-sitemap"></i>Manage Brands</a>
        <ul class="collapse list-unstyled
        " id="menu5" data-parent="#accordion" >
                <li class="">
                    <a href="/brands"><span>Add Brands</span></a>
                </li>
                
        </ul>
    </li>
@endif


    

    @if(Auth::guard('admin')->User()->set_coupons==1 || Auth::guard('admin')->User()->user_type=='admin')

    <li>
        <a href="/admin-coupon" class=" wave-effect"><i class="fas fa-percentage"></i>Set Coupons</a>
    </li>
    <li>
        <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-fw fa-newspaper"></i>Blog
        </a>
        <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
            <li>
                <a href="/blog-category"><span>Categories</span></a>
            </li>
            <li>
                <a href="/blog-post"><span>Posts</span></a>
            </li>
        </ul>
    </li>
@endif

   
    <li>
        <a href="#homepage" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-edit"></i>Home Page Settings
        </a>
        <ul class="collapse list-unstyled" id="homepage" data-parent="#accordion">
           <li>
                <a href="/admin-slider"><span>Sliders</span></a>
            </li>
            <li>
                <a href="/admin-service"><span>Services</span></a>
            </li>
            <li>
                <a href="/admin-footer-link"><span>Footer Link</span></a>
            </li>
            <li>
                <a href="/homepage-customization"><span>Home Page Customization</span></a>
            </li>
        </ul>
    </li>
    @if(Auth::guard('admin')->User()->general_setting==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#emails" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-at"></i>Email Settings
        </a>
        <ul class="collapse list-unstyled" id="emails" data-parent="#accordion">
            <li><a href="admin/email-templates"><span>Email Template</span></a></li>
            <li><a href="admin/email-config"><span>Email Configurations</span></a></li>
            <li><a href="admin/groupemail"><span>Group Email</span></a></li>
        </ul>
    </li>
    @endif
    @if(Auth::guard('admin')->User()->payment_setting==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="#payments" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-file-code"></i>Payment Table
        </a>
        <ul class="collapse list-unstyled" id="payments" data-parent="#accordion">
            <li><a href="/order-payment"><span>Order Payments</span></a></li>
            <li><a href="/payment-getway-setting"><span>Payment Gateway Setting</span></a></li>
        </ul>
    </li>
    @endif
    <li>
        <a href="#socials" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-paper-plane"></i>Social Settings
        </a>
        <ul class="collapse list-unstyled" id="socials" data-parent="#accordion">
                <li><a href="/admin-social"><span>Social Links</span></a></li>
                <li><a href="/admin-social-facebook"><span>Facebook Login</span></a></li>
                <li><a href="/admin-social-google"><span>Google Login</span></a></li>
        </ul>
    </li>
   <!--  <li>
        <a href="#langs" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-language"></i>Language Settings
        </a>
        <ul class="collapse list-unstyled" id="langs" data-parent="#accordion">
                <li><a href="admin/languages"><span>Website Language</span></a></li>
                <li><a href="admin/adminlanguages"><span>Admin Panel Language</span></a></li>

        </ul>
    </li>
    <li>
        <a href="#seoTools" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-wrench"></i>SEO Tools
        </a>
        <ul class="collapse list-unstyled" id="seoTools" data-parent="#accordion">
            <li>
                <a href="admin/products/popular/30"><span>Popular Products</span></a>
            </li>
            <li>
                <a href="admin/seotools/analytics"><span>Google Analytics</span></a>
            </li>
            <li>
                <a href="admin/facebook/pixel"><span>Facebook Pixel</span></a>
            </li>
            <li>
                <a href="admin/seotools/keywords"><span>Website Meta Keywords</span></a>
            </li>
        </ul>
    </li> -->
    @if(Auth::guard('admin')->User()->manage_staff==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="admin/staff" class=" wave-effect"><i class="fas fa-user-secret"></i>Manage Staffs</a>
    </li>
@endif
@if(Auth::guard('admin')->User()->subscribers==1 || Auth::guard('admin')->User()->user_type=='admin')
    <li>
        <a href="/admin-subscribers" class=" wave-effect"><i class="fas fa-users-cog mr-2"></i>Subscribers</a>
    </li>
@endif
@if( Auth::guard('admin')->User()->user_type=='admin')
        <li>
            <a href="/manage-roles" class=" wave-effect"><i class="fas fa-user-tag"></i>Manage Roles</a>
        </li>
        @endif
        <li>
            <a href="/cache/clear" class=" wave-effect"><i class="fas fa-sync"></i>Clear Cache</a>
        </li>
        <li>
            <a href="#sactive" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-cog"></i>System Activation
            </a>
            <ul class="collapse list-unstyled" id="sactive" data-parent="#accordion">

                <li><a href="admin/activation"> Activation</a></li>
                <li><a href="admin/generate/backup"> Generate Backup</a></li>
            </ul>
        </li>                           
                        </ul>
                                        <p class="version-name"> Version: 2.1</p>
                                        </nav>