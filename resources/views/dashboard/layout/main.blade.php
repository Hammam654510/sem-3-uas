<!DOCTYPE html>
<html lang="en">

<head>
   <title>Quantum Able Bootstrap 4 Admin Dashboard Template</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
     @include('layout.navbar')
     @include('layout.sidebar')
     
      <!-- Sidebar chat start -->
      <div id="sidebar" class="p-fixed header-users showChat">
         <div class="had-container">
            <div class="card card_main header-users-main">
               <div class="card-content user-box">
                  <div class="md-group-add-on p-20">
                     <span class="md-add-on">
                                    <i class="icofont icofont-search-alt-2 chat-search"></i>
                                 </span>
                     <div class="md-input-wrapper">
                        <input type="text" class="md-form-control" name="username" id="search-friends">
                        <label>Search</label>
                     </div>

                  </div>
                  <div class="media friendlist-main">

                     <h6>Friend List</h6>

                  </div>
                  <div class="main-friend-list">
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                           <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Michael Scofield</div>
                           <span>3 hours ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Irina Shayk</div>
                           <span>1 day ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                           <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Sara Tancredi</div>
                           <span>2 days ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="showChat_inner">
         <div class="media chat-inner-header">
            <a class="back_chatBox">
               <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
         </div>
         <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
               <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
               <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
         </div>
         <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
            <div class="media-right photo-table">
               <a href="#!">
                  <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                  <div class="live-status bg-success"></div>
               </a>
            </div>
         </div>
         <div class="media chat-reply-box">
            <div class="md-input-wrapper">
               <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
               <label>Share your thoughts</label>
               <span class="highlight"></span>
               <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

               <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>
            </div>

         </div>
      </div>
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            @yield('content')
            <!-- 2-1 block end -->
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
         <div class="fixed-button">
            <a href="#!" class="btn btn-md btn-primary">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
            </a>
         </div>
      </div>
   </div>


   <!-- Warning Section Starts -->
   <!-- Older IE warning message -->
   <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
   <!-- Warning Section Ends -->

   <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
