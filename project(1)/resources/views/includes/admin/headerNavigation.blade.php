 <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
          @if(Auth::user()->author == true)
          <a href="{{route('newPost')}}" class="btn btn-info">New Post</a>
          @endif
        <!--Notification Menu-->
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="{{route('userProfile')}}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <form id="logout-form" action="{{route('logout')}}" method="post">@csrf</form>
            <li><a onclick="document.getElementById('logout-form').submit()" class="dropdown-item" href="#"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>