  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
      <a href="/dashboard"><img src="{{asset('admin/gambar/logo-logo.png')}}"  class="img-responsive logo" width="100px" height="100px"></a>
    </div>
    
    <div class="container-fluid">
      <div class="navbar-btn">
        <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
    </div>
        
      <form class="navbar-form navbar-left" method="GET" action="/karyawan">
        <div class="input-group">
          <input type="Search" name="cari" class="form-control" placeholder="Search...">
          <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button></span>
        </div>
      </form>
       
      <div id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
     
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/default.jpg')}}" class="img-circle')}}" alt="Avatar"> <span>Yusril Mahendri_1800018397</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
        <ul class="dropdown-menu">
          <li><a href="/karyawan/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
          <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
        </ul>
        </li>
     
        </ul>
      </div>
      </div>
  </nav>