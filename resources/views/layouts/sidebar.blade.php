<div class="se-pre-con"></div>
    <div class="wrapper">
<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <center><a href="index.html"><img src="{{ asset('images/LGN.png') }}" width="100%" style="position: relative; top: 18px;"></a></center>
                </h1>
                <span>
               <img src="{{ asset('images/logobt.png') }}" width="100%" style="position: relative; top: 18px;">
            </span>
            </div>
            <br/>
            <hr/>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{ url('/home') }}">
                        <i class="fas fa-th-large"></i>
                       Dasboard
                    </a>
                </li>
                <hr>
                <p>Data</p>
                <hr>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Master Data
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ url('/tamu') }}">
                            <i class="fas fa-database"></i>
                            Data Kunjungan</a>
                        </li>
                        <li>
                            <a href="{{ url('/paket') }}">
                            <i class="fas fa-database"></i>
                            Data Paket</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/chart') }}">
                        <i class="fas fa-chart-pie"></i>
                        Charts
                    </a>
                </li>
               
                <hr>
                <p>Print Data</p>
                <hr>
                <li>
                    <a href="#cetak" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-print"></i>
                        Cetak Data
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="cetak">
                        <li>
                            <a href="{{ url('tamu-pdf') }}">
                            <i class="fas fa-print"></i>
                            Cetak Data Kunjungan</a>
                            
                        </li>
                        <li>
                            <a href="{{ url('paket-pdf') }}">
                            <i class="fas fa-print"></i>
                            Cetak Data Paket</a>
                        </li>
                    </ul>
                </li>
                <hr>
                <p>Manage Account</p>
                <hr>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Users
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                      
                        <li>
                            <a href="{{ url('/auth') }}">
                            <i class="fas fa-user-plus"></i>
                            kelola users</a>
                        </li>
                        
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt "></i>
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!-- Page Content Holder -->
        <div id="content">