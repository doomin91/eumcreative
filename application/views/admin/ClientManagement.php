<body class="bg-1">

<!-- Preloader -->
<div class="mask">
    <div id="loader"></div>
</div>
<!--/Preloader -->

<!-- Wrap all page content here -->
<div id="wrap">

    <!-- Make page fluid -->
    <div class="row">

        <!-- Fixed navbar -->
        <div
            class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top"
            role="navigation"
            id="navbar">

            <!-- Branding -->
            <div class="navbar-header col-md-2">
                <a class="navbar-brand" href="index.html">
                    <strong>MIN</strong>IMAL
                </a>
                <!-- <div class="sidebar-collapse">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div> -->
            </div>
            <!-- Branding end -->

            <!-- .nav-collapse -->
            <div class="navbar-collapse">
                <!-- Quick Actions -->
                <ul class="nav navbar-nav quick-actions">

                    <li class="dropdown divided user" id="current-user">
                        <div class="profile-photo">
                            <img src="/assets/images/profile-photo.jpg" alt="alt"/>
                        </div>
                        <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                            ADMIN
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu arrow settings">

                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    Profile</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-power-off"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#mmenu">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li>
                </ul>
                <!-- /Quick Actions -->

                <!-- Sidebar -->
                <ul class="nav navbar-nav side-nav" id="sidebar">

                    <li class="collapsed-content">
                        <ul>
                            <li class="search">
                                <!-- Collapsed search pasting here at 768px -->
                            </li>
                        </ul>
                    </li>

                    <li class="navigation" id="navigation">
                        <a href="#" class="sidebar-toggle" data-toggle="#navigation">Navigation
                            <i class="fa fa-angle-up"></i>
                        </a>

                        <ul class="menu">
                            <li class="dropdown open active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-th-large"></i>
                                    Client & Youtube
                                    <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="active">
                                        <a href="/admin/client">
                                            <i class="fa fa-caret-right"></i>
                                            Manage Client 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/youtube">
                                            <i class="fa fa-caret-right"></i>
                                            Manage Youtube Contents
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>

                    <li class="summary" id="order-summary">
                        <a href="#" class="sidebar-toggle underline" data-toggle="#order-summary">Orders Summary
                            <i class="fa fa-angle-up"></i>
                        </a>

                        <div class="media">
                            <a class="pull-right" href="#">
                                <span id="sales-chart"></span>
                            </a>
                            <div class="media-body">
                                This week sales
                                <h3 class="media-heading">26, 149</h3>
                            </div>
                        </div>

                        <div class="media">
                            <a class="pull-right" href="#">
                                <span id="balance-chart"></span>
                            </a>
                            <div class="media-body">
                                This week balance
                                <h3 class="media-heading">318, 651</h3>
                            </div>
                        </div>

                    </li>

                    <li class="settings" id="general-settings">
                        <a href="#" class="sidebar-toggle underline" data-toggle="#general-settings">General Settings
                            <i class="fa fa-angle-up"></i>
                        </a>

                        <div class="form-group">
                            <label class="col-xs-8 control-label">Switch ON</label>
                            <div class="col-xs-4 control-label">
                                <div class="onoffswitch greensea">
                                    <input
                                        type="checkbox"
                                        name="onoffswitch"
                                        class="onoffswitch-checkbox"
                                        id="switch-on"
                                        checked="">
                                    <label class="onoffswitch-label" for="switch-on">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-8 control-label">Switch OFF</label>
                            <div class="col-xs-4 control-label">
                                <div class="onoffswitch greensea">
                                    <input
                                        type="checkbox"
                                        name="onoffswitch"
                                        class="onoffswitch-checkbox"
                                        id="switch-off">
                                    <label class="onoffswitch-label" for="switch-off">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </li>

                </ul>
                <!-- Sidebar end -->

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- Fixed navbar end -->

        <!-- Page content -->
        <div id="content" class="col-md-12">

            <!-- page header -->
            <div class="pageheader">

                <h2>
                    <i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>
                    DataTables
                    <span>// Place subtitle here...</span></h2>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li>You are here</li>
                        <li>
                            <a href="index.html">Minimal</a>
                        </li>
                        <li>
                            <a href="tables.html">Tables</a>
                        </li>
                        <li class="active">DataTables</li>
                    </ol>
                </div>

            </div>
            <!-- /page header -->

            <!-- content main container -->
            <div class="main">

                <!-- row -->
                <div class="row">

                    <!-- col 12 -->
                    <div class="col-md-12">

                        <!-- tile -->
                        <section class="tile color transparent-black">

          <!-- tile header -->
          <div class="tile-header">
            <h1><strong>Client Management</strong> </h1>
            <div class="controls">
              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
            </div>
          </div>
          <!-- /tile header -->

          <!-- tile body -->
          <div class="tile-body nopadding">
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>프로필 이미지</th>
                  <th>이름</th>
                  <th>홈페이지 URL</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="col-md-1"><img src="http://img.youtube.com/vi/VUXg53Reqr4/1.jpg"/></td>
                  <td class="col-md-1">배돈 TV</td>
                  <td class="col-md-1">http://img.youtube.com/vi/VUXg53Reqr4/1.jpg</td>
                  <td class="col-md-2">
                      <button id="deleteBtn" class="btn btn-xs btn-blue"><i class="fa fa-pencil"></i><span>Modify</span></button>
                      <button id="deleteBtn" class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i><span>Delete</span></button>
                    </td>
                </tr>

              </tbody>
            </table>

          </div>
          <!-- /tile body -->

                        </section>
                        <!-- /tile -->

                    </div>
                    <!-- /col 12 -->

                </div>
                <!-- /row -->

            </div>
            <!-- /content container -->

        </div>
        <!-- Page content end -->

        <div id="mmenu" class="right-panel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified">
                <li class="active">
                    <a href="#mmenu-users" data-toggle="tab">
                        <i class="fa fa-users"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#mmenu-history" data-toggle="tab">
                        <i class="fa fa-clock-o"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#mmenu-friends" data-toggle="tab">
                        <i class="fa fa-heart"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#mmenu-settings" data-toggle="tab">
                        <i class="fa fa-gear"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="mmenu-users">
                    <h5>
                        <strong>Online</strong>
                        Users</h5>

                    <ul class="users-list">

                        <li class="online">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/ici-avatar.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Ing. Imrich
                                        <strong>Kamarel</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Ulaanbaatar, Mongolia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="online">
                            <div class="media">

                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/arnold-avatar.jpg" alt="alt">
                                </a>
                                <span class="badge badge-red unread">3</span>

                                <div class="media-body">
                                    <h6 class="media-heading">Arnold
                                        <strong>Karlsberg</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Bratislava, Slovakia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>

                            </div>
                        </li>

                        <li class="online">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/peter-avatar.jpg" alt="alt">

                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Peter
                                        <strong>Kay</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Kosice, Slovakia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="online">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/george-avatar.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">George
                                        <strong>McCain</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Prague, Czech Republic</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="busy">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar1.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Lucius
                                        <strong>Cashmere</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Wien, Austria</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="busy">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar2.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Jesse
                                        <strong>Phoenix</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Berlin, Germany</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <h5>
                        <strong>Offline</strong>
                        Users</h5>

                    <ul class="users-list">

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar4.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Dell
                                        <strong>MacApple</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Paris, France</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">

                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar5.jpg" alt="alt">
                                </a>

                                <div class="media-body">
                                    <h6 class="media-heading">Roger
                                        <strong>Flopple</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Rome, Italia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>

                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar6.jpg" alt="alt">

                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Nico
                                        <strong>Vulture</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Kyjev, Ukraine</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar7.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Bobby
                                        <strong>Socks</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Moscow, Russia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar8.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Anna
                                        <strong>Opichia</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Budapest, Hungary</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="tab-pane" id="mmenu-history">
                    <h5>
                        <strong>Chat</strong>
                        History</h5>

                    <ul class="history-list">

                        <li class="online">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/ici-avatar.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Ing. Imrich
                                        <strong>Kamarel</strong>
                                    </h6>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="busy">
                            <div class="media">

                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/arnold-avatar.jpg" alt="alt">
                                </a>
                                <span class="badge badge-red unread">3</span>

                                <div class="media-body">
                                    <h6 class="media-heading">Arnold
                                        <strong>Karlsberg</strong>
                                    </h6>
                                    <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur</small>
                                    <span class="badge badge-outline status"></span>
                                </div>

                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/peter-avatar.jpg" alt="alt">

                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Peter
                                        <strong>Kay</strong>
                                    </h6>
                                    <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit
                                    </small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="tab-pane" id="mmenu-friends">
                    <h5>
                        <strong>Friends</strong>
                        List</h5>
                    <ul class="favourite-list">

                        <li class="online">
                            <div class="media">

                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/arnold-avatar.jpg" alt="alt">
                                </a>
                                <span class="badge badge-red unread">3</span>

                                <div class="media-body">
                                    <h6 class="media-heading">Arnold
                                        <strong>Karlsberg</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Bratislava, Slovakia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>

                            </div>
                        </li>

                        <li class="offline">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar8.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Anna
                                        <strong>Opichia</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Budapest, Hungary</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="busy">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/random-avatar1.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Lucius
                                        <strong>Cashmere</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Wien, Austria</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                        <li class="online">
                            <div class="media">
                                <a class="pull-left profile-photo" href="#">
                                    <img class="media-object" src="/assets/images/ici-avatar.jpg" alt="alt">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Ing. Imrich
                                        <strong>Kamarel</strong>
                                    </h6>
                                    <small>
                                        <i class="fa fa-map-marker"></i>
                                        Ulaanbaatar, Mongolia</small>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="tab-pane pane-settings" id="mmenu-settings">
                    <h5>
                        <strong>Chat</strong>
                        Settings</h5>

                    <ul class="settings">

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Show Offline Users</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-offline"
                                            checked="">
                                        <label class="onoffswitch-label" for="show-offline">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Show Fullname</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-fullname">
                                        <label class="onoffswitch-label" for="show-fullname">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">History Enable</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-history"
                                            checked="">
                                        <label class="onoffswitch-label" for="show-history">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Show Locations</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-location"
                                            checked="">
                                        <label class="onoffswitch-label" for="show-location">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Notifications</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-notifications">
                                        <label class="onoffswitch-label" for="show-notifications">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="col-xs-8 control-label">Show Undread Count</label>
                                <div class="col-xs-4 control-label">
                                    <div class="onoffswitch greensea">
                                        <input
                                            type="checkbox"
                                            name="onoffswitch"
                                            class="onoffswitch-checkbox"
                                            id="show-unread"
                                            checked="">
                                        <label class="onoffswitch-label" for="show-unread">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- tab-pane -->

            </div>
            <!-- tab-content -->
        </div>

    </div>
    <!-- Make page fluid-->

</div>
<!-- Wrap all page content end -->

<section class="videocontent" id="video"></section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed
-->
<script src="/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
<script
    src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
<script
    type="text/javascript"
    src="/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
<script
    type="text/javascript"
    src="/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script
    type="text/javascript"
    src="/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script
    type="text/javascript"
    src="/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
<script
    type="text/javascript"
    src="/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
<script type="text/javascript" src="/assets/js/vendor/blockui/jquery.blockUI.js"></script>\

<script src="/assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/js/vendor/datatables/ColReorderWithResize.js"></script>
<script src="/assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
<script src="/assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
<script
    src="/assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="/assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

<script src="/assets/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="/assets/js/minimal.min.js"></script>

<script>

</script>
</body>
</html>