  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon ">
            <img src="{{asset('images/gambar/logo2.png')}}" alt="logo-pateron" width="100">
          </div>
        </a>
        <hr class="sidebar-divider my-0">

          <li class="nav-item"> 
            <a class="nav-link" href="{{url('/home')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <hr class="sidebar-divider my-0">

          @if(Auth::user()->level == 'ADMIN')
          <li class="nav-item ">
            <a class="nav-link" href="{{route('fitur-tryout.index')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Fitur Paket Belajar</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/rangkuman-daftar-grup')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Daftar Rangkuman Upload</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/jenis-tryout')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Jenis Try Out</span>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/paket-belajar')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Paket Belajar </span>
            </a>
          </li>
          @endif
        
          
          
         
          @if(Auth::user()->level == 'ADMIN')
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/pembayaran')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Pembayaran</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/nilai_to')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Nilai Try Out</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          
          @endif
          
         @if(Auth::user()->level == 'USER')
           <li class="nav-item">
            <a class="nav-link" href="{{url('/modul')}}">
              <i class="fas fa-book"></i>
              <span>Modul Belajar Anda</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/hasiltryout')}}">
          <i class="fas fa-chart-line"></i>
            <span>Hasil Try Out</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/rangkuman-hasil')}}">
          <i class="fas fa-chart-line"></i>
            <span>Daftar Rangkuman Anda</span></a>
          </li>
          @endif


        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  </ul>
