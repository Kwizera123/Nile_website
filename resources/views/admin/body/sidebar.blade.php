

<div class="vertical-menu">

  <div data-simplebar class="h-100">

    @php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
@endphp

      <!-- User details -->
      <div class="user-profile text-center mt-3">
          <div class="">
              <img src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="" class="avatar-md rounded-circle">
          </div>
          <div class="mt-3">
              <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
              <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
          </div>
      </div>

      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                  <a href="index.html" class="waves-effect">
                      <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                      <span>Dashboard</span>
                  </a>
              </li>

  
              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-mail-send-line"></i>
                      <span>Manage Home Slide</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('all.home.slide') }}">Home Slide Data</a></li>
                      {{-- <li><a href="{{ route('edit.home.slide') }}">Home Slide Data</a></li> --}}
                      
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-layout-3-line"></i>
                      <span>About Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li>
                          <a href="{{ route('all.about') }}">All About Page</a>                         
                          <a href="{{ route('add.about') }}">New About Us<span class="text text-danger">Only if doesn't exist</span>.</a> 
                      </li>
                  </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Manage Product</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('all.product') }}">All Products</a> 
                        <a href="{{ route('add.product') }}">Add Product</a> 
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Manage Banner</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('all.banner') }}">Left Banner</a> 
                        <a href="{{ route('right.banner') }}">Right Banner</a> 
                    </li>
                </ul>
            </li>

            <!-- Statistics -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Manage Statistics</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('all.statistics') }}">Statistics Data</a> 
                        {{-- <a href="{{ route('right.banner') }}">Right Banner</a>  --}}
                    </li>
                </ul>
            </li>

            <!-- services -->

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Manage Services</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('all.Services') }}">Services Data</a> 
                        {{-- <a href="{{ route('right.banner') }}">Right Banner</a>  --}}
                    </li>
                </ul>
            </li>

             <!-- Features -->

             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Manage Features</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('all.features') }}">Features Data</a> 
                        {{-- <a href="{{ route('right.banner') }}">Right Banner</a>  --}}
                    </li>
                </ul>
            </li>



              <li class="menu-title">Pages</li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-account-circle-line"></i>
                      <span>Authentication</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="auth-login.html">Login</a></li>
                      <li><a href="auth-register.html">Register</a></li>
                      <li><a href="auth-recoverpw.html">Recover Password</a></li>
                      <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-profile-line"></i>
                      <span>Utility</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="pages-starter.html">Starter Page</a></li>
                      <li><a href="pages-timeline.html">Timeline</a></li>
                      <li><a href="pages-directory.html">Directory</a></li>
                      <li><a href="pages-invoice.html">Invoice</a></li>
                      <li><a href="pages-404.html">Error 404</a></li>
                      <li><a href="pages-500.html">Error 500</a></li>
                  </ul>
              </li>


          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>