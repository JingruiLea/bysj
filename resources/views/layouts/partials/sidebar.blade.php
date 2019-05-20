@inject('menuPresenter','App\Presenters\Admin\MenuPresenter','')
<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
          <div class="dropdown profile-element"> <span>
                  <img alt="image" class="img-circle" width="50px" height="50px" src="{{
                  \Illuminate\Support\Facades\Storage::url(
                      \App\userinfo::all()->
                      where('username',getUser()->username)->first()->photo
                  )
                  }}" />
                   </span>
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> <span class="block m-t-xs"> {{getUser()->name}} <strong class="font-bold"></strong>
                   </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                  <li><a href="profile.html">Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="login.html">Logout</a></li>
              </ul>
          </div>
          <div class="logo-element">
              ID
          </div>
      </li>
      {!!$menuPresenter->sidebarMenuList($sidebarMenu)!!}
    </ul>
  </div>
</nav>