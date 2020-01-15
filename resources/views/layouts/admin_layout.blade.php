<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/admin_css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/admin_css/light-bootstrap-dashboard.css?v=1.4.1') }}" rel="stylesheet"/>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/admin_css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>
    <div id="app">




      <div class="wrapper">
          <!-- -->
          <div class="sidebar" data-color="purple" data-image="images/admin_images/full-screen-image-3.jpg">
              <!--

                  Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                  Tip 2: you can also add an image using data-image tag

              -->

              <div class="logo">
                  <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                      Ct
                  </a>

            			<a href="/" class="simple-text logo-normal">
            			  Scholar4U
            			</a>
              </div>

          	<div class="sidebar-wrapper">
                  <div class="user">
      				<div class="info">
      					<div class="photo">
      	                    <img src="images/admin_images/default-avatar.png" />
      	                </div>

      					<a data-toggle="collapse" href="#collapseExample" class="collapsed">
      						<span>
      							{{ auth()->user()->name }}
      	                        <b class="caret"></b>
      						</span>
                          </a>

      					<div class="collapse" id="collapseExample">
      						<ul class="nav">
      							<li>
      								<a href="#pablo">
      									<span class="sidebar-mini">MP</span>
      									<span class="sidebar-normal">My Profile</span>
      								</a>
      							</li>

      							<li>
      								<a href="#pablo">
      									<span class="sidebar-mini">EP</span>
      									<span class="sidebar-normal">Edit Profile</span>
      								</a>
      							</li>

      							<li>
      								<a href="#pablo">
      									<span class="sidebar-mini">S</span>
      									<span class="sidebar-normal">Settings</span>
      								</a>
      							</li>
      						</ul>
                          </div>
      				</div>
                  </div>

      			<ul class="nav">
      				<li class="active">
      					<a href="dashboard.html">
      						<i class="pe-7s-graph"></i>
      						<p>Dashboard</p>
      					</a>
      				</li>
      				<li>
      					<a data-toggle="collapse" href="#componentsExamples">
                              <i class="pe-7s-plugin"></i>
                              <p>Components
                                 <b class="caret"></b>
                              </p>
                          </a>
      					<div class="collapse" id="componentsExamples">
      						<ul class="nav">
      							<li>
      								<a href="components/buttons.html">
      									<span class="sidebar-mini">B</span>
      									<span class="sidebar-normal">Buttons</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/grid.html">
      									<span class="sidebar-mini">GS</span>
      									<span class="sidebar-normal">Grid System</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/panels.html">
      									<span class="sidebar-mini">P</span>
      									<span class="sidebar-normal">Panels</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/sweet-alert.html">
      									<span class="sidebar-mini">SA</span>
      									<span class="sidebar-normal">Sweet Alert</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/notifications.html">
      									<span class="sidebar-mini">N</span>
      									<span class="sidebar-normal">Notifications</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/icons.html">
      									<span class="sidebar-mini">I</span>
      									<span class="sidebar-normal">Icons</span>
      								</a>
      							</li>
      							<li>
      								<a href="components/typography.html">
      									<span class="sidebar-mini">T</span>
      									<span class="sidebar-normal">Typography</span>
      								</a>
      							</li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<a data-toggle="collapse" href="#formsExamples">
                              <i class="pe-7s-note2"></i>
                              <p>Forms
                                 <b class="caret"></b>
                              </p>
                          </a>
      					<div class="collapse" id="formsExamples">
      						<ul class="nav">
      							<li>
      								<a href="forms/regular.html">
      									<span class="sidebar-mini">Rf</span>
      									<span class="sidebar-normal">Regular Forms</span>
      								</a>
      							</li>
      							<li>
      								<a href="forms/extended.html">
      									<span class="sidebar-mini">Ef</span>
      									<span class="sidebar-normal">Extended Forms</span>
      								</a>
      							</li>
      							<li>
      								<a href="forms/validation.html">
      									<span class="sidebar-mini">Vf</span>
      									<span class="sidebar-normal">Validation Forms</span>
      								</a>
      							</li>
      							<li>
      								<a href="forms/wizard.html">
      									<span class="sidebar-mini">W</span>
      									<span class="sidebar-normal">Wizard</span>
      								</a>
      							</li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<a data-toggle="collapse" href="#tablesExamples">
                              <i class="pe-7s-news-paper"></i>
                              <p>Tables
                                 <b class="caret"></b>
                              </p>
                          </a>
      					<div class="collapse" id="tablesExamples">
      						<ul class="nav">
      							<li>
      								<a href="tables/regular.html">
      									<span class="sidebar-mini">RT</span>
      									<span class="sidebar-normal">Regular Tables</span>
      								</a>
      							</li>
      							<li>
      								<a href="tables/extended.html">
      									<span class="sidebar-mini">ET</span>
      									<span class="sidebar-normal">Extended Tables</span>
      								</a>
      							</li>
      							<li>
      								<a href="tables/bootstrap-table.html">
      									<span class="sidebar-mini">BT</span>
      									<span class="sidebar-normal">Bootstrap Table</span>
      								</a>
      							</li>
      							<li>
      								<a href="tables/datatables.net.html">
      									<span class="sidebar-mini">DT</span>
      									<span class="sidebar-normal">DataTables.net</span>
      								</a>
      							</li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<a data-toggle="collapse" href="#mapsExamples">
                              <i class="pe-7s-map-marker"></i>
                              <p>Maps
                                 <b class="caret"></b>
                              </p>
                          </a>
      					<div class="collapse" id="mapsExamples">
      						<ul class="nav">
      							<li>
      								<a href="maps/google.html">
      									<span class="sidebar-mini">GM</span>
      									<span class="sidebar-normal">Google Maps</span>
      								</a>
      							</li>
      							<li>
      								<a href="maps/vector.html">
      									<span class="sidebar-mini">VM</span>
      									<span class="sidebar-normal">Vector maps</span>
      								</a>
      							</li>
      							<li>
      								<a href="maps/fullscreen.html">
      									<span class="sidebar-mini">FSM</span>
      									<span class="sidebar-normal">Full Screen Map</span>
      								</a>
      							</li>
      						</ul>
      					</div>
      				</li>
      				<li>
                          <a href="charts.html">
                              <i class="pe-7s-graph1"></i>
                              <p>Charts</p>
                          </a>
                      </li>

                      <li>
                          <a href="calendar.html">
                              <i class="pe-7s-date"></i>
                              <p>Calendar</p>
                          </a>
                      </li>
      				<li>
      					<a data-toggle="collapse" href="#pagesExamples">
                              <i class="pe-7s-gift"></i>
                              <p>Pages
                                 <b class="caret"></b>
                              </p>
                          </a>
      					<div class="collapse" id="pagesExamples">
      						<ul class="nav">
      							<li>
      								<a href="pages/user.html">
      									<span class="sidebar-mini">UP</span>
      									<span class="sidebar-normal">User Page</span>
      								</a>
      							</li>
      							<li>
      								<a href="pages/login.html">
      									<span class="sidebar-mini">LP</span>
      									<span class="sidebar-normal">Login Page</span>
      								</a>
      							</li>
      							<li>
      								<a href="pages/register.html">
      									<span class="sidebar-mini">RP</span>
      									<span class="sidebar-normal">Register Page</span>
      								</a>
      							</li>
      							<li>
      								<a href="pages/lock.html">
      									<span class="sidebar-mini">LSP</span>
      									<span class="sidebar-normal">Lock Screen Page</span>
      								</a>
      							</li>
      						</ul>
      					</div>
      				</li>
      			</ul>
          	</div>
          </div> <!-- /sidebar -->


          <div class="main-panel">
      		<nav class="navbar navbar-default">
      			<div class="container-fluid">
      				<div class="navbar-minimize">
      					<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
      						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
      						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
      					</button>
      				</div>
      				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse">
      						<span class="sr-only">Toggle navigation</span>
      						<span class="icon-bar"></span>
      						<span class="icon-bar"></span>
      						<span class="icon-bar"></span>
      					</button>
      					<!-- <a class="navbar-brand" href="#">Dashboard PRO</a> -->
      				</div>
      				<div class="collapse navbar-collapse">

      					<ul class="nav navbar-nav navbar-right">
      						<!-- <li>
      							<a href="charts.html">
      								<i class="fa fa-line-chart"></i>
      								<p>Stats</p>
      							</a>
      						</li> -->

      						<!-- <li class="dropdown">
      							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      								<i class="fa fa-gavel"></i>
      								<p class="hidden-md hidden-lg">
      									Actions
      									<b class="caret"></b>
      								</p>
      							</a>
      							<ul class="dropdown-menu">
      								<li><a href="#">Create New Post</a></li>
      								<li><a href="#">Manage Something</a></li>
      								<li><a href="#">Do Nothing</a></li>
      								<li><a href="#">Submit to live</a></li>
      								<li class="divider"></li>
      								<li><a href="#">Another Action</a></li>
      							</ul>
      						</li> -->

      						<li class="dropdown">
      							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      								<i class="fa fa-bell-o"></i>
      								<span class="notification">5</span>
      								<p class="hidden-md hidden-lg">
      									Notifications
      									<b class="caret"></b>
      								</p>
      							</a>
      							<ul class="dropdown-menu">
      								<li><a href="#">Notification 1</a></li>
      								<li><a href="#">Notification 2</a></li>
      								<li><a href="#">Notification 3</a></li>
      								<li><a href="#">Notification 4</a></li>
      								<li><a href="#">Another notification</a></li>
      							</ul>
      						</li>

      						<li class="dropdown dropdown-with-icons">
      							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      								<i class="fa fa-list"></i>
      								<p class="hidden-md hidden-lg">
      									More
      									<b class="caret"></b>
      								</p>
      							</a>
      							<ul class="dropdown-menu dropdown-with-icons">
      								<li>
      									<a href="#">
      										<i class="pe-7s-mail"></i> Messages
      									</a>
      								</li>
      								<li>
      									<a href="#">
      										<i class="pe-7s-help1"></i> Help Center
      									</a>
      								</li>
      								<li>
      									<a href="#">
      										<i class="pe-7s-tools"></i> Settings
      									</a>
      								</li>
      								<li class="divider"></li>
      								<li>
      									<a href="#" class="text-danger">
      										<i class="pe-7s-close-circle"></i>
      										Log out
      									</a>
      								</li>
                      <!-- Loout -->
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
      							</ul>
      						</li>

      					</ul>
      				</div>
      			</div>
      		</nav>

              <div class="main-content">
                  <div class="container-fluid">

                   @yield('content')

                  </div>
              </div>


              <footer class="footer">
                  <div class="container-fluid">
                      <nav class="pull-left">
                          <ul>
                              <li>
                                  <a href="#">
                                      Home
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      Company
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                      Portfolio
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                     Blog
                                  </a>
                              </li>
                          </ul>
                      </nav>
                      <p class="copyright pull-right">
                          &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                      </p>
                  </div>
              </footer>

          </div>
      </div>






    </div>

    <!--   Core JS Files  -->
    <script src="{{ asset('js/admin_js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/admin_js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/admin_js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>


  <!--  Forms Validations Plugin -->
  <script src="{{ asset('js/admin_js/jquery.validate.min.js') }}"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="{{ asset('js/admin_js/moment.min.js') }}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{ asset('js/admin_js/bootstrap-datetimepicker.min.js') }}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{ asset('js/admin_js/bootstrap-selectpicker.js') }}"></script>

  <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="{{ asset('js/admin_js/bootstrap-switch-tags.min.js') }}"></script>

  <!--  Charts Plugin -->
  <script src="{{ asset('js/admin_js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/admin_js/bootstrap-notify.js') }}"></script>

    <!-- Sweet Alert 2 plugin -->
  <script src="{{ asset('js/admin_js/sweetalert2.js') }}"></script>

    <!-- Vector Map plugin -->
  <script src="{{ asset('js/admin_js/jquery-jvectormap.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

  <!-- Wizard Plugin    -->
    <script src="{{ asset('js/admin_js/jquery.bootstrap.wizard.min.js') }}"></script>

    <!--  Datatable Plugin    -->
    <script src="{{ asset('js/admin_js/bootstrap-table.js') }}"></script>

    <!--  Full Calendar Plugin    -->
    <script src="{{ asset('js/admin_js/fullcalendar.min.js') }}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
  <script src="{{ asset('js/admin_js/light-bootstrap-dashboard.js?v=1.4.1') }}"></script>

  <!-- Main js project -->
  <script src="{{ asset('js/admin_js/main.js') }}"></script>

    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

  </body>

  </html>