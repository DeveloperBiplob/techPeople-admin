<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a target="_blank" href="" class="btn btn-block btn-success ">View Website</a>
      </li>
    </ul>

   <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i> <span>User</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          @auth('web')
          <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
              @csrf
              <button class="btn btn-block btn-danger" type="submit" style="margin-top: 7px">Logout</button>
          </form>
          @endauth
        </div>
      </li>
    </ul>
  </nav>