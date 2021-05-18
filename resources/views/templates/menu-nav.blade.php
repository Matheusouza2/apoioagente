<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="/"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
      <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <i class="fal fa-bars"></i>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        @if(Auth::check())
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                @if (Auth::user()->foto != null)
                  <img src="{{ asset('images/avatar.png') }}" width="50%" class="rounded-circle" alt="">
                  <!--<img src="{{ asset('storage/images/'.Auth::user()->id.'/'.Auth::user()->foto) }}" width="40%" class="rounded-circle" alt="">-->
                @else
                  <img src="{{ asset('images/avatar.png') }}" width="50%" class="rounded-circle" alt="">
                @endif
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                @php
                  $nomeExp = explode(" ",Auth::user()->nome);
                  if(count($nomeExp) >= 2){
                    $nome = $nomeExp[0].' '.$nomeExp[1];
                  }else{
                    $nome = $nomeExp[0];
                  }
                @endphp
                <p class="mb-1 text-black">{{ $nome }}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('profile') }}">
                <i class="fal fa-user mr-2 text-info"></i> Perfil </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="fal fa-sign-out mr-2 text-danger"></i> Sair </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="fal fa-expand" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fal fa-bell"></i>
              <span class="count-symbol bg-info"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="{{route('logout')}}" title="Sair do Sistema">
              <i class="fal fa-power-off text-danger"></i>
            </a>
          </li>
        @endif
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <i class="fal fa-bars"></i>
      </button>
    </div>
  </nav> 