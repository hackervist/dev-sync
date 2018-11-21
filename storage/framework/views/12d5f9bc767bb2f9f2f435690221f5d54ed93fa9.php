<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Dev-Sync </a>
        </div>


        <div id="navbar" class="navbar-collapse collapse pull-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                
                <?php if(Auth::check() && Auth::user()->isAdmin()): ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            Users<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user">Users </a></li>
                            <li><a href="/profile">Profiles </a></li>
                        </ul>
                    </li>

                <?php endif; ?>
            <?php if(Auth::check()): ?>
                <li class="dropdown"><a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">Content <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/widget/collab">Collaborate</a></li>
                        <li><a href="/widget">Documents</a></li>
                         <li><a href="/forums">Forum</a></li>

                        <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                            <li><a href="/marketing-image">Banner Images</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
               
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php if(Auth::user()->isAdmin()): ?>
                                <li><a href="/admin">Admin</a></li>
                            <?php endif; ?>
                            <li><a href="/my-profile">Profile</a></li>
                            <li><a href="/settings">Settings</a></li>
                           <li> <a href="/auth/facebook">
                                <i class="fa fa-facebook"></i>&nbsp;&nbsp; Facebook Sync </a>
                            </li>

                            <li><a href="/auth/github">
                                <i class="fa fa-github"></i>&nbsp;&nbsp; Github Sync </a>
                            </li>

                            <li>
                                <a href="/logout"
                                   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                    <li><img class="circ" src="
                   <?php echo e(Gravatar::get(Auth::user()->email)); ?>"></li>
                <?php else: ?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li>
                        <a href="/auth/facebook">
                            <i class="fa fa-facebook"></i>&nbsp;&nbsp; Sign in </a>

                    </li>
                    <li><a href="/auth/github"><i class="fa fa-github"></i>&nbsp;&nbsp;  Sign in</a></li>

                <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
