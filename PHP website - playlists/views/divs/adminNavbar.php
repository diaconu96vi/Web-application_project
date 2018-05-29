<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="/home">
                <img alt="Brand" src="/views/divs/images/logo1.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/admin/search"> Search </a>
                </li>
                <li><a href="/admin/browse"> Browse </a>
                <li><a href="/admin/about"> About </a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Admin, <?php echo htmlspecialchars($_SESSION['name']); ?></b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul>
                            <li><a href="/admin/commands">My panel</a></li>
                            <!-- <li><a href="/user/upgrade">Upgrade account</a></li> -->
                            <li><a href="/admin/logout">Logout</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>