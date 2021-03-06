<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-2 left-nav-box">

            <ul class="left-nav-first-list-group">
                <li>Overview <span class="sr-only">(current)</span></li>
                <li><a href="/admin"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span>
                        &nbsp; Support &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:white;">
                        <li><a href="/open-contacts"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; Open Contacts</a></li>
                        <li><a href="/closed-contacts"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; Closed Contacts</a></li>
                        <li><a href="/contact"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Contacts</a></li>
                        <li><a href="/contact/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
                        </ul>

                </li>
            </ul>

            <ul class="left-nav-list-group">
                <li>videos</li>
                <li><a href="/video"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Videos</a></li>
                <li><a href="/video/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
            </ul>

            <ul class="left-nav-list-group">
                <li>Posts</li>
                <li><a href="/post"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Posts</a></li>
                <li><a href="/post/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
            </ul>

            <ul class="left-nav-list-group">
                <li>Resources</li>
                <li><a href="/blogresource"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Resources</a></li>
                <li><a href="/blogresource/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
            </ul>

            <ul class="left-nav-list-group">
                <li>Influencers</li>
                <li><a href="/influencer"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Influencers</a></li>
                <li><a href="/influencer/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; Create Influencers</a></li>
            </ul>

            <ul class="left-nav-list-group">
                <li>Content</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span>
                        &nbsp; Content &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:white;">
                        <li><a href="/content"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Content</a></li>
                        <li><a href="/content/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>

                    </ul>
                </li>
            </ul>



            <ul class="left-nav-list-group">
                <li>Categories</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span>
                         &nbsp; Categories &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:white;">
                        <li><a href="/category"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Categories</a></li>
                        <li><a href="/category/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
                        <li><a href="/contact-topic"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Contact Topics</a></li>
                        <li><a href="/contact-topic/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
                        <li><a href="/resource-type"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Resource Types</a></li>
                        <li><a href="/resource-type/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
                        <li><a href="/level"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Level Types</a></li>
                        <li><a href="/level/create"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp;Create New</a></li>
                    </ul>
                        </li>
            </ul>

            <ul class="left-nav-list-group">
                <li>Users</li>
                <li><a href="/user"><span class="glyphicon glyphicon-list-alt" style="color:#9f9f9f;"></span> &nbsp; All Users</a></li>
            </ul>






        </div> <!-- end sidebar -->

        @yield('content')


        </div> <!-- end row -->


        </div>  <!-- end container -->

