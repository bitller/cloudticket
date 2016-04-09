<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cloud Ticket</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body id="cloud_ticket">

<!-- BEGIN Wrapper -->
<div id="wrapper">

    <div id="header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/dashboard"><span class="glyphicon glyphicon-tag"></span>&nbsp;Cloud Ticket</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <!-- BEGIN Movies -->
                        <li>
                            <a href="/dashboard/movies"><span class="glyphicon glyphicon-film"></span>&nbsp;Filme</a>
                        </li>
                        <!-- END Movies -->
                        <!-- BEGIN Halls -->
                        <li>
                            <a href="/dashboard/halls"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Sali</a>
                        </li>
                        <!-- END Halls -->
                        <!-- BEGIN Cashiers -->
                        <li>
                            <a href="/dashboard/cashiers"><span class="glyphicon glyphicon-euro"></span>&nbsp;Casieri</a>
                        </li>
                        <!-- END Cashiers -->
                        <!-- BEGIN Statistics -->
                        <li>
                            <a href="/dashboard/statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistici</a>
                        </li>
                        <!-- END Statistics -->
                    </ul>

                    <!-- BEGIN Right content -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;John doe cinema
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!-- BEGIN Settings -->
                                <li>
                                    <a href="/dashboard/account-settings"><span class="glyphicon glyphicon-cog"></span>&nbsp;Setarile contului</a>
                                </li>
                                <!-- END Settings -->
                                <li class="divider"></li>
                                <!-- BEGIN Log out -->
                                <li>
                                    <a href="/dashboard/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Deconectare</a>
                                </li>
                                <!-- END Log out -->
                            </ul>
                        </li>
                    </ul>
                    <!-- END Right content -->

                </div>
            </div>
        </nav>
    </div>

    <div id="content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <div id="footer">
        footer
    </div>

    <script src="/js/app.js"></script>

</div>
<!-- END Wrapper -->

</body>

</html>