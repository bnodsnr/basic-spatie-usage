   <!-- partial:partials/_sidebar.html -->
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
        <li class="nav-item">
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}" style="color:#fff"><img src="{{ asset('assets/images/rsz_brand1.png') }}" alt="logo" style="width:175px;" /> </a>
          <a class="navbar-brand brand-logo" href="{{route('dashboard')}}" style="color:#fff"><img src="{{ asset('assets/images/rsz_brand1.png') }}" alt="logo" style="width:175px;" /> </a>
        </li>
        <li class="nav-item">
         <div class="profile">
          <img src="{{ asset('assets/images/avatardefault_92824.png') }}" alt="profile_picture">
          <p>ज्वालामूखी गाउँपालिका</p>
         </div>

        </li>
        <li class="nav-item">
         <a class="nav-link font-weight-bold active" href="{{route('dashboard')}}">
           <img src="{{asset('assets/images/shakha/dashboard/favicon-16x16.png')}}" alt="">&nbsp; ड्यासबोर्ड
         </a>
        </li>
        @can('view-user')
        <li class="nav-item">
          <a class="nav-link font-weight-bold" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages">
            <img src="{{asset('assets/images/shakha/user/favicon-16x16.png')}}" alt=""> &nbsp; प्रयोगकर्ता व्यवस्थापन
            &nbsp;<i class="fa fa-angle-down"></i>
          </a>
          <div class="collapse" id="pages">
            <ul class="nav flex-column sub-menu">

            @can('view-role')
              <li class="nav-item"> <a class="nav-link" href="{{ URL :: to('/roles') }}"><i class="fa fa-hand-o-right"></i>&nbsp; भूमिका </a></li>
            @endcan
            @can('view-permission')
              <li class="nav-item"> <a class="nav-link" href="{{ route('modules') }}"><i class="fa fa-hand-o-right"></i>&nbsp; Permission </a></li>
            @endcan
            @can('view-user')
              <li class="nav-item"> <a class="nav-link" href="{{ URL :: to('/users') }}"> <i class="fa fa-hand-o-right"></i>&nbsp; प्रयोगकर्ता </a></li>
            @endcan
            </ul>
          </div>
        </li>
      @endcan
      <li class="nav-item">
        <hr>
        <form method="POST" action="{{URL::to('logout')}}">
          @csrf
          <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-power-off"></i> &nbsp; बाहिर जानुहोस</button>
        </form>
      </li>
     </ul>
     <hr>
   </nav>