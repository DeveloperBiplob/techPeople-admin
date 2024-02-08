<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard')}}" class="brand-link">
      <img src="{{ asset('Frontend')}}/assets/img/logo/pavicon.icon" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Tech People</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="fa-solid fa-house mr-1"></i>
              <p>Dashboard <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{ route('slider.index') }}" class="nav-link {{ Route::is('slider.index') || Route::is('slider.edit') ? 'active' : '' }}">
              <i class="fa-brands fa-slideshare mr-1"></i>
              <p>Slider <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link {{ Route::is('about.index') || Route::is('about.create') || Route::is('about.show') || Route::is('about.edit') || Route::is('companyView') ? 'active' : '' }}">
              <i class="fa-solid fa-address-card mr-1"></i>
              <p>About <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('service.index') }}" class="nav-link {{ Route::is('service.index') || Route::is('service.create') || Route::is('service.show') || Route::is('service.edit') || Route::is('process.create') || Route::is('process.show') || Route::is('process.edit') ? 'active' : '' }}">
              <i class="fa-solid fa-briefcase mr-1"></i>
              <p>Service <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('overview.index') }}" class="nav-link {{ Route::is('overview.index') || Route::is('overview.edit')  ? 'active' : '' }}">
              <i class="fa-solid fa-trophy mr-1"></i>
              <p>Project Overview <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link {{ Route::is('category.index') || Route::is('category.edit')  ? 'active' : '' }}">
              <i class="fa-solid fa-list mr-1"></i>
              <p>Category <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('portfolio.index') }}" class="nav-link {{ Route::is('portfolio.index') || Route::is('portfolio.create') || Route::is('portfolio.edit') || Route::is('portfolio.show')  ? 'active' : '' }}">
              <i class="fa-solid fa-address-card mr-1"></i>
              <p>Portfolio <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('testimonial.index') }}" class="nav-link {{ Route::is('testimonial.index') || Route::is('testimonial.create') || Route::is('testimonial.edit') || Route::is('testimonial.show')  ? 'active' : '' }}">
              <i class="fa-solid fa-handshake mr-1"></i>
              <p>Testimonial <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('brand.index') }}" class="nav-link {{ Route::is('brand.index') || Route::is('brand.edit')  ? 'active' : '' }}">
              <i class="fa-brands fa-artstation mr-1"></i>
              <p>Brand <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contactContent') }}" class="nav-link {{ Route::is('contactContent') || Route::is('contactShow')  ? 'active' : '' }}">
              <i class="fa-solid fa-envelope-open-text mr-1"></i>
              <p>Message <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Route::is('blogcategory.index') || Route::is('tag.index') ? 'menu-open' : '' }}">
            <a class="nav-link">
              <i class="fa-solid fa-blog mr-1"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogcategory.index') }}" class="nav-link {{ Route::is('blogcategory.index') ? 'active' : '' }}">
                  <i class="fa-solid fa-list mr-1"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link {{ Route::is('tag.index') ? 'active' : '' }}">
                  <i class="fa-solid fa-tags mr-1"></i>
                  <p>Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="fa-brands fa-blogger-b mr-1"></i>
                  <p>Posts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('configer.index') }}" class="nav-link {{ Route::is('configer.index') || Route::is('configer.edit')  ? 'active' : '' }}">
              <i class="fa-solid fa-screwdriver-wrench mr-1"></i>
              <p>Configuration <i class="right fas fa-angle-right"></i></p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>