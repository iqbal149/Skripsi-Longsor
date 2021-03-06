<div class="sidebar" data-color="orange" data-background-color="black">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            <img src="{{ asset('logo-umkm.png') }}" style="max-width: 230px;">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li> --}}
            {{-- <li class="nav-item{{ $activePage == 'usaha' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('usaha.index') }}">
          <i class="material-icons">shop</i>
            <p>{{ __('UMKM') }}</p>
        </a>
      </li> --}}
            {{-- <li class="nav-item{{ $activePage == 'longsor' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('longsor.index') }}">
          <i class="material-icons">shop</i>
            <p>{{ __('LONGSOR') }}</p>
        </a>
      </li> --}}
            <li class="nav-item{{ $activePage == 'tahun' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('tahun.index') }}">
                    <i class="fa-solid fa-list-check"></i>
                    <p>{{ __('Data Longsor') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'rekap' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('rekap.index') }}">

                    <i class="fa-solid fa-list-check"></i>
                    <p>{{ __('Data Rekap Kejadian') }}</p>
                </a>
            </li>
            @if (auth()->user()->admin == 1)
                <li class="nav-item{{ $activePage == 'perhitungan' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('perhitungan.index') }}">
                        <i class="fa fa-calculator"></i>
                        <p>{{ __('Perhitungan') }}</p>
                    </a>
                </li>

                <li class="nav-item {{ $activePage == 'matriks' || $activePage == 'kabupaten' ? ' active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="true">
                        <i class="fa-solid fa-server"></i>
                        <p>{{ __('Master Data') }}
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="master">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'kabupaten' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('kabupaten.index') }}">
                                    <i class="fa fa-server"></i>
                                    <p>{{ __('Data Kabupaten') }}</p>
                                </a>
                            </li>
                            <li class="nav-item{{ $activePage == 'matriks' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('matriks.index') }}">
                                    <i class="fa-brands fa-dropbox"></i>
                                    <p>{{ __('Data Matriks') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
            <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">supervised_user_circle</i>
                    <p>{{ __('Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        @if (auth()->user()->admin == 1)
                            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    <span class="sidebar-mini"> UM </span>
                                    <span class="sidebar-normal"> {{ __('User Management') }} </span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            @if (auth()->user()->admin == 1)
                <li class="nav-item {{ $activePage == 'slider' || $activePage == 'setting' ? ' active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#plugin" aria-expanded="true">
                        <i class="material-icons">settings_applications</i>
                        <p>{{ __('Plugin Website') }}
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="plugin">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'slider' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('slider.index') }}">
                                    <span class="sidebar-mini"> SL </span>
                                    <span class="sidebar-normal">{{ __('Slider') }} </span>
                                </a>
                            </li>
                            <li class="nav-item{{ $activePage == 'setting' ? ' active' : '' }}">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> ST </span>
                                    <span class="sidebar-normal"> {{ __('Setting') }} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif


            {{-- <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> --}}
        </ul>
    </div>
</div>
