<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Vmenu</title>



    <!--external css-->
    <link href="{{asset('/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style-responsive.css')}}" rel="stylesheet">

   <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      @if (!Auth::guest())
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b><img src="{{asset('img/logHI.jpeg')}}" alt="logo" class="img-rounded"> Vmenu</b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{url('/auth/logout')}}">Salir</a></li>
                </ul>
            </div>

        </header>

      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="#"><img src="{{asset('/img/default-img.png')}}" class="img-circle" width="100"></a></p>

                  <h5 class="centered">{!! Auth::user()->name !!}</h5>

                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span>Categorias</span>
                      </a>
                      <ul class="sub">
                          <li>{!!link_to('categories',' Ver',['class'=>'glyphicon glyphicon-eye-open'])!!}</li>
                          <li>{!!link_to('categories/create',' Añadir',['class'=>'glyphicon glyphicon-plus'])!!}</li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-cutlery"></i>
                          <span>Platillos</span>
                      </a>
                      <ul class="sub">
                          <li>{!!link_to('dishes',' Ver',['class'=>'glyphicon glyphicon-eye-open'])!!}</li>
                          <li>{!!link_to('dishes/create',' Añadir',['class'=>'glyphicon glyphicon-plus'])!!}</li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-stats"></i>
                          <span>Estatus de orden</span>
                      </a>
                      <ul class="sub">
                         <li>{!!link_to('statuses',' Ver',['class'=>'glyphicon glyphicon-eye-open'])!!}</li>
                          <li>{!!link_to('statuses/create',' Añadir',['class'=>'glyphicon glyphicon-plus'])!!}</li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-usd"></i>
                          <span>Forma de Pago</span>
                      </a>
                    <ul class="sub">
                           <li>{!!link_to('payments',' Ver',['class'=>'glyphicon glyphicon-eye-open'])!!}</li>
                          <li>{!!link_to('payments/create',' Añadir',['class'=>'glyphicon glyphicon-plus'])!!}</li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-shopping-cart"></i>
                          <span>Ordenes</span>
                      </a>
                      <ul class="sub">
                          <li>{!!link_to('carts',' Ver',['class'=>'glyphicon glyphicon-eye-open'])!!}</li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
        @endif

     <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper site-min-height">

         <div class="container-fluid">
           @yield('content')
         </div>



        </section>

      </section><!-- /MAIN CONTENT -->


<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             ©Holiday Inn 2015
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{asset('/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('/js/jquery.nicescroll.js')}}" type="text/javascript"></script>

    <script src="{{asset('/js/app.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    @yield('extra_scripts')


  </body>
</html>
