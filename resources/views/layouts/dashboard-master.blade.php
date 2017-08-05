
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPadi | @yield('title')</title>
    @include('includes.css-global-links')
    
    
</head>
<body>
    <div class="wrapper">
    <section class="sidebar">
        <div class="logo">
            <img src="{{ asset('dashboard/img/mypadi-logo2.png')}}" alt="">
        </div>
        <div class="profile-info_container text-center">
            <img src="{{ asset('dashboard/img/profile-pic.jpg')}}" alt="profile-pic" class="profile-pic">
            <h4 class="profile-name">Joshua Edigbe</h4>
        </div>
        <div class="sidebar-nav_container">
            <ul class='sidebar-nav-cont'>
                <li>
                    <a href="">
                        <span><i class="dashboard icon"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="setting icon"></i></span>
                        <span>Account Settings</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a href="">
                        <span><i class="home icon"></i>    </span>
                        <span>Hostel Listing</span>
                        <span><i class="chevron down icon"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span><i class="list icon"></i></span>
                                <span>View Listing</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="home icon"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="home icon"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a href="">
                        <span><i class="home icon"></i></span>
                        <span>Hostel Listing</span>
                        <span><i class="chevron down icon"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <span><i class="home icon"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="home icon"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="home icon"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <span><i class="alarm outline icon"></i></span>
                        <span>Notifications</span>
                        <span class="notify-badge">3</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="credit card alternative icon"></i></span>
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
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>