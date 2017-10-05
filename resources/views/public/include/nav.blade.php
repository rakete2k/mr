<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! url('/') !!}">MR Bauunternehmung</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href='{!! url('/index') !!}'>Startseite</a>
                </li>
                <li>
                    <a href='{!! url('/services') !!}'>Service</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projekte<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{!! url('/projects') !!}">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="{!! url('/projects') !!}">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="{!! url('/projects') !!}">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="{!! url('/projects') !!}">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="{!! url('/projects') !!}">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Referenzen<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{!! url('/references') !!}">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="{!! url('/references') !!}">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="{!! url('/references') !!}">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{!! url('/contact') !!}">Kontakt</a>
                </li>
                <li>
                    <a href="{!! url('/disclaimer') !!}">Impressum</a>
                </li>
                <li>
                    <a href="{!! url('/acp') !!}">Login</a>
                </li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>