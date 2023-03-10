<ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{ asset("assets/images/faces/face15.jpg") }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
            <span>{{ Auth::user()->level }}</span>
          </div>
        </div>
       
        
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    @if (auth()->user()->level == "admin")   
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('arsip')}}">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Arsip</span>
      </a>
    </li>
    @endif

    @if (auth()->user()->level == "admin")
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('crud') }}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Form Elements</span>
      </a>
    </li>
    @endif
    
  </ul>