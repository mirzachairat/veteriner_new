 <!-- Left Sidenav -->
 <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset("assets/images/banten.png")}}" alt="logo-png" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset("assets/images/banten.png")}}" alt="logo-large" class="logo-lg logo-light">
                        <span style="font-size:19px">LOVE BANTEN </span>{{-- <img src="{{asset("assets/images/logo-dark.png")}}" alt="logo-large" class="logo-lg logo-dark"> --}}
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    @if(Auth::user()->jabatan_id == 1)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>PEMOHON</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/pengirim"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Permohonan</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/view/billing"><i class="ti-control-record"></i>Billing</a></li> 
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 2)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>PENERIMA</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penerima"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penerima</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penerima"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                  
                    @if(Auth::user()->jabatan_id == 3)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>MANAGER</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/manager"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/manager"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 4)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>PENYELIA</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penyelia</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penyelia"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->jabatan_id == 5)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>PENGUJI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="true">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/penguji"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Penguji</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/cetak/penguji"><i data-feather="home" class="align-self-center menu-icon"></i>Dokumen</a></li>
                        </ul>
                    </li>
                    @endif
                    
                    <hr class="hr-dashed hr-menu">
                    @if(Auth::user()->jabatan_id == 6)
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>BENDAHARA</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/bendahara"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Bendahara</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>DAFTAR HARGA</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/harga"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel Bendahara</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>User Admin</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/user/view"><i data-feather="home" class="align-self-center menu-icon"></i>Tabel User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>MAP</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{env('APP_URL')}}/mapview"><i data-feather="home" class="align-self-center menu-icon"></i>Lihat Map</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
    
            </div>
        </div>
        <!-- end left-sidenav-->