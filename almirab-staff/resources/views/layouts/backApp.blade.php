<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href = "{{ asset('frontend/images/favicon_io (1)/favicon-32x32.png') }}" type = "image/x-icon">
    <title>AlMirAb</title>
    <link href="//db.onlinewebfonts.com/c/dc833b3d7567051aee8d354dc75204f0?family=MagistralW08-Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('DataTables/table/table.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <style>
        .active{
            color: white;
            background: #321fdb !important;
        }
        .c-avatar{
            background: rgb(247, 244, 244)
        }
        .ok a{
            border-left: 1px solid rgba(0, 0, 0, 0.575);
        }
        .ok a:first-child{
            border: 0;
        }
    </style>
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        
          <h3 style="font-family:MagistralW08-Bold;">AlMirAb</h3>
      
        
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item @if(Request::segment(1) == 'home') {{ 'active' }} @endif">
            <a class="c-sidebar-nav-link" href="{{ route('home.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-home')}}"></use>
                </svg> Bosh saxifa 
            </a>
        </li>
        <li class="c-sidebar-nav-item @if(Request::segment(1) == 'index') {{ 'active' }} @endif">
            <a class="c-sidebar-nav-link" href="{{ route('Almirab.index', ['id'=>1]) }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-people')}}"></use>
                </svg> Xodimlar
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-menu')}}"></use>
            </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
           
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-menu')}}"></use>
            </svg>
        </button>
        <ul class="c-header-nav ml-auto mr-4">
         
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"> 
                     <svg class="c-icon ">
                        <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-user')}}"></use>
                    </svg> 
                </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                    <hr style="margin: 0;">
                    <a class="dropdown-item" href="{{ route('admin.edit') }}">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{asset('public/icons/sprites/free.svg#cil-user-follow')}}"></use>
                        </svg> Edit Account
                    </a>
                  
                  <hr style="margin: 0;">
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="margin: 0;">
                                         <svg class="c-icon mr-2">
                                            <use xlink:href="{{ asset('public/icons/sprites/free.svg#cil-account-logout') }}"></use>
                                        </svg> 
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
              

                </div>
            </li>
        </ul>
    </header>
    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('DataTables/table/jQurey.js')}}"></script>
<script src="{{asset('js/coreui.bundle.min.js')}}"></script>
<!--[if IE]><!-->
<script src="{{asset('js/svgxuse.min.js')}}"></script>
<!--<![endif]-->

<script src="{{asset('js/coreui-chartjs.bundle.js')}}"></script>
<script src="{{asset('js/coreui-utils.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('DataTables/table/table.js')}}"></script>
<script src="{{ asset('js/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script>
    // $.mask.definitions['~'] = "[+-]";
    $(".phone").mask("(99) 999 99-99");
</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
{{-- <script type="module">
    import Fancybox from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
</script> --}}

<script src="{{ asset('js/function.js') }}"></script>
</script>
</body>
</html>
