<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('userDashboard')}}"><i class="icon fa fa-circle-o"></i>Dashboard</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Comments</a></li>
            
          </ul>
        </li>
        @if(Auth::user()->author ==true)
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Author</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>Dashboard</a></li>
            <li><a class="treeview-item" href="{{route('authorPosts')}}" rel="noopener"><i class="icon fa fa-circle-o"></i> Posts</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Comments</a></li>
           
          </ul>
        </li>
        @endif
         @if(Auth::user()->admin ==true)
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Admin</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('adminDashboard')}}"><i class="icon fa fa-circle-o"></i>Dashboard</a></li>
            <li><a class="treeview-item" href="{{route('adminPosts')}}" rel="noopener"><i class="icon fa fa-circle-o"></i> Posts</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Comments</a></li>
           
          </ul>
        </li>
        @endif
         <li><a class="app-menu__item active" href="{{route('adminUsers')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Users</span></a></li>
        
      </ul>
    </aside>