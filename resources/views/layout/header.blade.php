 <div class="header">
               <div class="container-fluid">
                  <div class="d-flex justify-content-between">
                     <a class="admin-logo" href="https://ecom.viduradi.com" target="_blank">
                     <img src="assets/images/1640748851viduradilogo.png" alt="">
                     </a>
                     <div class="menu-toggle-button">
                        <a class="nav-link" href="javascript:;" id="sidebarCollapse">
                           <div class="my-toggl-icon">
                              <span class="bar1"></span>
                              <span class="bar2"></span>
                              <span class="bar3"></span>
                           </div>
                        </a>
                     </div>
                     <div class="right-eliment">
                        <ul class="list">
                           <input type="hidden" id="all_notf_count" value="admin/all/notf/count">
                           <li class="bell-area">
                              <a id="notf_conv" class="dropdown-toggle-1" target="_blank" href="https://ecom.viduradi.com">
                              <i class="fas fa-globe-americas"></i>
                              </a>
                           </li>
                           <li class="bell-area">
                              <a id="notf_conv" class="dropdown-toggle-1" href="javascript:;">
                              <i class="far fa-envelope"></i>
                              <span id="conv-notf-count">0</span>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="dropdownmenu-wrapper" data-href="admin/conv/notf/show" id="conv-notf-show">
                                 </div>
                              </div>
                           </li>
                           <li class="bell-area">
                              <a id="notf_product" class="dropdown-toggle-1" href="javascript:;">
                              <i class="icofont-cart"></i>
                              <span id="product-notf-count">0</span>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="dropdownmenu-wrapper" data-href="admin/product/notf/show" id="product-notf-show">
                                 </div>
                              </div>
                           </li>
                           <li class="bell-area">
                              <a id="notf_user" class="dropdown-toggle-1" href="javascript:;">
                              <i class="far fa-user"></i>
                              <span id="user-notf-count">0</span>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="dropdownmenu-wrapper" data-href="admin/user/notf/show" id="user-notf-show">
                                 </div>
                              </div>
                           </li>
                           <li class="bell-area">
                              <a id="notf_order" class="dropdown-toggle-1" href="javascript:;">
                              <i class="far fa-newspaper"></i>
                              <span id="order-notf-count">2</span>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="dropdownmenu-wrapper" data-href="admin/order/notf/show" id="order-notf-show">
                                 </div>
                              </div>
                           </li>
                           <li class="login-profile-area">
                              <a class="dropdown-toggle-1" href="javascript:;">
                                 <div class="user-img">
                                    <img src="assets/images/admins/1568863396user-admin.png" alt="">
                                 </div>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="dropdownmenu-wrapper">
                                    <ul>
                                       <h5>{{Auth::guard('admin')->User()->name}}</h5>
                                       <li>
                                          <a href="admin/profile"><i class="fas fa-user"></i> Edit Profile</a>
                                       </li>
                                       <li>
                                          <a href="admin/password"><i class="fas fa-cog"></i> Change Password</a>
                                       </li>
                                       <li>
                                          <a href="admin-logout"><i class="fas fa-power-off"></i> Logout</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>