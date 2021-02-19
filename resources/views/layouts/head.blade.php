<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Mangement</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/common.css" />
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body>
    <main class="_main">
        <div class="">
            <!-- Side bar -->

            <!-- Side bar -->

            <!-- Side bar -->
            <div class="_1sidebar">
                <div class="_1sidebar_main _bg_default">
                    <div class="logo">
                        <a href="/admin">
                            <h3 class="logo_img">Result Mangement</h3>
                            <!-- <img class="logo_img" src="/img/logo.png" alt="" title=""> -->
                        </a>
                    </div>

                    <ul class="_navbar">
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>

                                <span class="nav_item_text">Clases</span>

                                <span class="nav_item_errow"><i class="fas fa-chevron-down"></i></span>
                            </div>

                            <ul class="nav">
                                <li class="nav_active"><a href="/admin/firstYear">Inter 1st year</a></li>
                                <li><a href="/admin/secondYear">Inter 2nd year </a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>

                                <a href="/admin/group">
                                    <span class="nav_item_text">Groups</span>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>

                                <a href="/admin/subject">
                                    <span class="nav_item_text">Subjects</span>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>

                                <a href="/admin/exam">
                                    <span class="nav_item_text">Exams</span>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>
                                <a href="/admin/results">
                                    <span class="nav_item_text">Results</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="nav_item">
                                <div class="nav_item_icon">
                                    <i class="fas fa-copy"></i>
                                </div>
                                <span class="nav_item_text">Logout</span>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side bar -->

            <!-- Content with menu -->
            <div class="_content">
                <!-- Menu -->
                <div class="_1menu _d_flex justify-content-between _bg_default">
                    <div class="">
                    <!-- <div class="_1menu_search"> -->
                        <!-- <p class="_1menu_search_icon"><i class="fas fa-search"></i></p> -->
                        <!-- <input type="text" placeholder="Serach"> -->
                    </div>

                    <div class="_1menu_list">

                        <li>
                            <div class="profile">
                                <img src="/img/mobile2.png" alt="" title="">
                            </div>

                            <div class="profile_drop">
                                <div class="profile_drop_mian">
                                    <p class="profile_drop_title"><i class="fas fa-crown"></i> Go Pro</p>


                                    <ul class="profile_drop_list">
                                        <li><a href="">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
                <!-- Menu -->

                <main class="_main">
                    @yield('content')
                </main>
                <!-- Menu -->



            </div>
            <!-- Content with menu -->
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>