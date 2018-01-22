<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="line-height:15px!important;">LytesApp<br>
                <span style="font-size:0.5em; font-weight:200; margin-bottom:-8em !important;">Join the rest of the world. Let's get online.</span>
            </a>

        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/{{$business->business_slug}}">
                        <i class="material-icons">store</i> Store
                    </a>
                </li>
                <li>
                    <a href="/{{$business->business_slug}}/shelves">
                        <i class="material-icons">storage</i> Shelves
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products &nbsp<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/{{$business->business_slug}}/new"> <i class="material-icons">shopping_basket</i> &nbspNew Product </a></li>
                        <li><a href="/{{$business->business_slug}}/products"> <i class="material-icons">edit</i>&nbsp Edit Products </a></li>
                    </ul>

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings &nbsp<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/change">Change Password</a></li>
                        <li><a href="#">Edit Profile</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/logout">
                        <i class="material-icons">exit_to_app</i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>