
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>
        <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius" class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box @if(Request::segment(1)=='') active @endif">
            <i class="fa fa-home"></i>
            <a href="{{url('/')}}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box @if(Request::segment(1)=='about') active @endif">
            <i class="fa fa-user"></i>
            <a href="{{url('about')}}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box @if(Request::segment(1)=='portfolio') active @endif">
            <i class="fa fa-briefcase"></i>
            <a href="{{url('portfolio')}}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box @if(Request::segment(1)=='contact') active @endif">
            <i class="fa fa-envelope-open"></i>
            <a href="{{url('contact')}}">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box @if(Request::segment(1)=='blog') active @endif">
            <i class="fa fa-comments"></i>
            <a href="{{url('blog')}}">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="@if(Request::segment(1)=='') active @endif"><a href="{{url('/')}}">
                    <i class="fa fa-home"></i><span>Home</span></a></li>
                <li class="@if(Request::segment(1)=='about') active @endif"><a href="{{url('about')}}"><i class="fa fa-user">
                    </i><span>About</span></a></li>
                <li class=" @if(Request::segment(1)=='portfolio') active @endif"><a href="{{url('portfolio')}}"><i class="fa fa-folder-open">
                    </i><span>Portfolio</span></a></li>
                <li class="@if(Request::segment(1)=='contact') active @endif"><a href="{{url('contact')}}"><i class="fa fa-envelope-open">
                    </i><span>Contact</span></a></li>
                <li class=" @if(Request::segment(1)=='blog') active @endif"><a href="{{url('blog')}}"><i class="fa fa-comments">
                    </i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
