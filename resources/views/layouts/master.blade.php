
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPadi | @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/manage-users.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/styles.css')}}">
    
    
</head>
<body>
    <div class="wrapper">
    <section class="sidebar">
        <div class="logo">
            <img src="../assests/img/mypadi-logo2.png" alt="">
        </div>
        <div class="profile-info_container text-center">
            <img src="../assests/img/profile-pic.jpg" alt="profile-pic" class="profile-pic">
            <h4 class="profile-name">Joshua Edigbe</h4>
        </div>
        <div class="sidebar-nav_container">
            <ul class='sidebar-nav-cont'>
                <li>
                    <a href="">
                        <span><i class="zmdi zmdi-chart"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="zmdi zmdi-settings"></i></span>
                        <span>Account Settings</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a href="">
                        <span><i class="zmdi zmdi-home"></i>    </span>
                        <span>Hostel Listing</span>
                        <span><i class="zmdi zmdi-chevron-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="./listing.html">
                                <span><i class="zmdi zmdi-eye"></i></span>
                                <span>View Listing</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="fa fa-home"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="fa fa-home"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a href="">
                        <span><i class="zmdi zmdi-home"></i></span>
                        <span>Hostel Listing</span>
                        <span><i class="zmdi zmdi-chevron-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span><i class="zmdi zmdi-home"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="zmdi zmdi-home"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="zmdi zmdi-home"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <span><i class="zmdi zmdi-notifications-active"></i></span>
                        <span>Notifications</span>
                        <span class="notify-badge">3</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="zmdi zmdi-receipt"></i></span>
                        <span>Transactions</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="page-content_container">
        <a href="javascript:;" class="btn toogle-btn" id="sidebar-toggle-btn">Menu</a>
        @yield('content')            
    </section>
</div>


<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="./dashboard.js"></script>
<script>
    $(function(){
        $('ul.sidebar-nav-cont > li > a').on('click',function(e) {
            e.preventDefault();
        	$('.sidebar-nav-cont li').removeClass('active');
            $(this).closest('li').addClass('active');	
            var checkElement = $(this).next();
            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('ul.sidebar-nav-cont ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if($(this).closest('li').find('ul').children().length == 0) {
                return true;
            } else {
                return false;	
            }
        });

        $('#sidebar-toggle-btn').on('click', function(e){
            e.preventDefault()
            $('.sidebar').toggleClass('open')
          })
    })
</script>


</body>
</html>