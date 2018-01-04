<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ $user_avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"> {{ Auth::user()->reg_no }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/home/dashboard"><i class="fa fa-line-chart"></i> <span>Dashboard</span></a></li>
        <li><a href="/home/profile"><i class="fa fa-user-md"></i> <span>Profile</span></a></li>
        {{-- <li><a href="/home/media"><i class="fa fa-file-image-o"></i> <span>Media Manager</span></a></li> --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>