<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand big-logo" href="/">CoinSeer</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

            <li><a href="/all-videos">Videos</a></li>
            <li><a href="/all-articles">Articles</a></li>
            <li><alarm-support>
                </alarm-support></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color:white;">
                    @if(Auth::user()->isAdmin())
                        <li><a href="/admin">Admin</a></li>

                    @endif

                        <li><a href="/settings">Settings</a></li>
                        <li><a href="/support-messages">Support</a></li>
                        <li>
                            <a href="/auth/facebook">
                                fb Sync </a>
                        </li>
                        <li><a href="/confirmation-request">Confirm Account</a></li>
                        <li>
                            <a href="/logout"
                               onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                </ul>
            </li>
            <li><img class="circ" src="{{ Gravatar::get(Auth::user()->email)  }}"></li>
        </ul>

        @include('layouts.blog-partials.search')

    </div>


</nav>