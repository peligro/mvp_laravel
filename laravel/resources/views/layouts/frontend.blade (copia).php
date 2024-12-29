<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
    <meta name="keywords" content="php, java, javascript, typescript, ecmascript, js, html, html 5, php 7, cesar cancino, César Cancino, videotutoriales, spring boot, spring web mvc, struts, apache, mysql, web, programación, desarrollo web, desarrollo, css, laravel, codeigniter, synfony, Zend Framework 2, jsp, jstl, hibernate, jpa, curl, soap, ldap, cups, bootstrap, python, dhango, django 2, django 3, python2, python3, angular"
    />
    <meta name="description" content="Blog personal de César Cancino Zapata" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <title> MVP - @yield('title')</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" /> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/modernizr.min.js')}}"></script>
   
    @stack('css')
</head>
<body>
     <!-- Navigation Bar-->
     <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                    <!--UBold-->
                    <!--</a>-->
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('images/logo_dark.png') }}" alt="" height="20" class="logo-lg" />
                        <img src="{{ asset('images/logo_sm.png') }}" alt="" height="24" class="logo-sm" />
                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="md md-settings-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li >
                            <a href="{{ route('home_index') }}" title="Inicio"><i class="md md-dashboard"></i>Inicio</a>
                             
                        </li>

                       

                        <li class="has-submenu active">
                            <a href="#"><i class="md md-account-circle"></i>CRM</a>
                            <ul class="submenu">
                                <li><a href="crm-dashboard.html"> Dashboard </a></li>
                                <li><a href="crm-contact.html"> Contacts </a></li>
                                <li><a href="crm-opportunities.html"> Opportunities </a></li>
                                <li><a href="crm-leads.html"> Leads </a></li>
                                <li><a href="crm-customers.html"> Customers </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="md md-shopping-cart"></i>eCommerce</a>
                            <ul class="submenu">
                                <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>
                                <li><a href="ecommerce-products.html"> Products</a></li>
                                <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>
                                <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>
                                <li><a href="ecommerce-orders.html"> Orders</a></li>
                                <li><a href="ecommerce-sellers.html"> Sellers</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


  <!--contenido-->
      @yield('content')
      <!--/contenido-->


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    © Todos los derechos reservados - Desarrollado por <a href="https://www.cesarcancino.com" title="César Cancino" target="_blank">César Cancino</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
      
      <script src="{{asset('/js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('js/waves.js') }}"></script>
      <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

      <!-- App js -->
      <script src="{{ asset('js/jquery.core.js') }}"></script>
      <script src="{{ asset('js/jquery.app.js') }}"></script>
    @stack('scripts')
</body>
</html>