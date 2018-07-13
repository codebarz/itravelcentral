<!DOCTYPE html>
<html>
<title>Dashboard - Welcome Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/main.css" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
<link rel="stylesheet" href="css/simple-line-icons.css">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/2.4.85/css/materialdesignicons.min.css">
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/masonry/masonry.pkgd.js"></script>
<body>
    <div class="dashboard-header">
        <ul>
            <li><i class="mdi mdi-bell-outline"></i></li>
            <li><i class="mdi mdi-message-outline"></i></li>
            <li class="user-details"><span><img src="img/logoemblem.png"></span>Administrator</li>
        </ul>
    </div>
    <div class="side-toggle">
        <ul>
            <li id="menu-toggle"><i class="mdi mdi-menu"></i></li>
            <li><i class="mdi mdi-home"></i></li>
            <li><i class="mdi mdi-account"></i></li>
            <li><i class="mdi mdi-chart-line-variant"></i></li>
            <li><i class="mdi mdi-domain"></i></li>
            <li><i class="mdi mdi-bell-ring"></i></li>
            <li><i class="mdi mdi-account-multiple-plus"></i></li>
            <li><i class="mdi mdi-clock-outline"></i></li>
            <li><i class="mdi mdi-cancle"></i></li>
            <li class="cenLogout"><i class="mdi mdi-logout"></i></li>
        </ul>
    </div>
    <div id="wrapper" class="active2">
        <div id="sidebar-wrapper">
        <ul class="sidebar-nav" id="sidebar">     
          <li><form action="" method="post"><input type="text" placeholder="Search Here..."></form></li>
          <li class="timestamp"><?php echo date('l jS \of F Y h:i:s A');?></li>
          <li>Main Site</li>
          <li class="timestamp"><i class="mdi mdi-account"></i>  200 New Users</li>
          <li class="timestamp"><i class="mdi mdi-airplane-takeoff"></i>  30 Departures</li>
          <li class="timestamp"><i class="mdi mdi-car-connected"></i> 3 New Terminals</li>
          <li><i class="mdi mdi-settings"></i> Settings</li>
          <li><img src="img/logoemblem.png"></li>
        </ul>
      </div>
        <!-- Page content -->
        <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="dashboard-tab">&nbsp; DASHBOARD <span>Overview</span></div>
                <!-- <div class="main-page-content">
                    <ul>
                        <li><span><i class="mdi mdi-account-group"></i></span></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> -->
                <div class="page-pointers">
                        <div class="slate">
                            <p><i class="mdi mdi-account-search"></i></p>
                            <p>Users</p>
                            <p class="explain">Manage Companies, Manage Company Settings, Manage Company Cities, Manage Company Services, Manage Company Terminals
Manage Company Routes, Manage Company Schedules, Manage Company Fares, Manage Company System Discount, Manage Company Route Discounts</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-chart-line-variant"></i></p>
                            <p>Reports</p>
                            <p class="explain">Manifest, Finances, Administration</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-domain"></i></p>
                            <p>Company</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-bell-ring"></i></p>
                            <p>Notifications</p>
                            <p class="explain">Email Notification, SMS Notification, Resend Failed Notification</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-map-marker"></i></p>
                            <p>Manage Places</p>
                            <p class="explain">Manage Countries, Manage States, Manage Cities</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-account-multiple-plus"></i></p>
                            <p>Customer</p>
                            <p class="explain">Register New Customer, Register Special Customer</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-ticket"></i></p>
                            <p>Ticket Management</p>
                            <p class="explain">Global Ticket Manager, Global Ticket Statistics</p>
                        </div>
                        <div class="slate">
                            <p><i class="mdi mdi-clock-outline"></i></p>
                            <p>Schedule Management</p>
                            <p class="explain">Manage Schedule</p>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>