<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
       <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>{{ config('app.name') }}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" sizes="228x228" href="{{ asset('assets/img/favicon/coast-228x228.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <!-- custom css/page -->
    @yield('css')
    

</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-teal">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">PERPUSTAKAAN - SMK BPI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                   
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/profile/user.jpg')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                          
                            <li><a href="{!! route('logout') !!}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}">
                        <a href="{{ url('home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="{{ Request::segment(1) === 'karyawan' ? 'active' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>Karyawan</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::path() ==  'karyawan' ? 'active' : ''  }}">
                                <a href="{{ url('karyawan') }}">Lihat Data</a>
                            </li>
                            <li class="{{ Request::path() ==  'karyawan/create' ? 'active' : ''  }}">
                                <a href="{{ url('karyawan/create') }}">Tambah Data</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="{{ Request::segment(1) === 'member' ? 'active' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_box</i>
                            <span>Member</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::path() ==  'member' ? 'active' : ''  }}">
                                <a href="{{ url('member') }}">Lihat Data</a>
                            </li>
                            <li class="{{ Request::path() ==  'member/create' ? 'active' : ''  }}">
                                <a href="{{ url('member/create') }}">Tambah Data</a>
                            </li>
                            
                        </ul>
                    </li>

                  
                    <li class="{{ Request::segment(1) === 'buku' ? 'active' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">book</i>
                            <span>Buku</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{ Request::path() ==  'buku' ? 'active' : ''  }}">
                                <a href="{{ url('buku') }}">Lihat Data</a>
                            </li>
                            <li class="{{ Request::path() ==  'buku/create' ? 'active' : ''  }}">
                                <a href="{{ url('buku/create') }}">Tambah Data</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="{{ Request::path() ==  'kategori' ? 'active' : ''  }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">library_add</i>
                            <span>Jenis & Genre</span>
                        </a>
                        <ul class="ml-menu js-sweetalert">
                            <li>
                                <a href="#" data-type="Ajenis">Add Jenis</a>
                                
                            </li>
                            <li>
                                <a href="#" data-type="Agenre">Add Genre</a>
                            </li>
                            <li class="{{ Request::path() ==  'kategori' ? 'active' : ''  }}">
                                <a href="{{ url('kategori') }}">Lihat Data</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="{{ Request::segment(1) === 'transaksi' ? 'active' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">credit_card</i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="ml-menu js-sweetalert">
                            <li class="{{ Request::path() ==  'peminjaman' ? 'active' : ''  }}">
                                <a href="{{ route('admin-index-peminjaman') }}" data-type="Apinjam">Peminjaman</a>
                            </li>
                            <li class="{{ Request::path() ==  'peminjaman/create' ? 'active' : ''  }}">
                            </li>
                            <li class="{{ Request::path() ==  'transaksi/pengembalian' ? 'active' : ''  }}">
                                <a href="{{ url('transaksi/pengembalian') }}" >Pengembalian</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">Made with <i class="material-icons">favorite</i> in SMK BPI</a>.
                </div>
                <div class="version">
                    <b>design by </b> Admin BSB
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

    <section class="content">
        <div class="container-fluid">
            
            @yield('content')
           
            
          

            
        </div>

            
    </section>
 
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>



    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>  

<!-- Data Table -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js"></script>



    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
     <script src="{{asset('plugins/waitme/waitMe.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>
    <script src="{{asset('js/pages/ui/dialogs.js')}}"></script>
    <script src="{{asset('js/pages/cards/basic.js')}}"></script>
     <!-- SweetAlert Plugin Js -->
    <script src="{{asset('plugins/sweetalert/sweetalert-dev.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('js/demo.js')}}"></script>
    <!-- barcode -->
     <script src="{{asset('js/jquery-barcode.js')}}"></script>
    <!-- custom js -->

    @yield('js')
</body>

</html>