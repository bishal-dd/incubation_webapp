

<style>
    .navbar-image {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-45%);
    }
</style>
        
        <!-- Start header -->
        <header id="header" class="site-header header-style-3">
            <nav class="navigation navbar navbar-default" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="{{asset('logo2.png')}}" ></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="/">Home</a>
                                
                            </li>
                            <li><a href="/about">About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">committee</a>
                                <ul class="sub-menu">
                                    <li><a href="/advisory">Advisory</a></li>
                                    <li><a href="/stakeholder">Stakeholder/Ecosystem</a></li>
                                    <li><a href="/mentor">Mentors</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Incubation</a>
                                <ul class="sub-menu">
                                    <li><a href="/incubates">Profile of Manager</a></li>
                                    <li><a href="/incubates">Incubation </a></li>
                                    <li><a href="/facilities">Facilities/Services</a></li>
                                </ul>
                            </li>
                            <li><a href="/application_process">Application Process</a></li>
                           
                            <li><a href="/event">Events</a></li>
                            <li><a href="/login">Login</a></li>

                            <div class="navbar-image">
                                <a href="#"><img src="{{asset('jnec_logo.png')}}" alt="Your Image" style="width: 80px;"></a>
                            </div>
                        </ul>
                        
                    </div><!-- end of nav-collapse -->
                    
                    
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

