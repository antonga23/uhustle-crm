
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation">
        <div class="list-group panel">
            {{-- <p class=" list-group-item siderbar-top" title=""><img src="{{url('images/SVG_Images/logo.svg')}}" alt=""></p> --}}
            <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                        class="glyphicon sidebar-icon glyphicon-dashboard"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/work station icon active.svg')}}"/></span> </a>

                        <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                            class="glyphicon sidebar-icon glyphicon-dashboard"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/dashboard icon.svg')}}"/></span> </a>

                            <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                                class="glyphicon sidebar-icon glyphicon-social"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/social board icon.svg')}}"/></span> </a>

                                <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                                    class="glyphicon sidebar-icon glyphicon-edu"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/education icon.svg')}}"/></span> </a>

                                    <a href="{{route('dashboard', \Auth::id())}}" class=" list-group-item" data-parent="#MainMenu"><i
                                        class="glyphicon sidebar-icon glyphicon-call-history"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/call history icon.svg')}}"/></span> </a>

                        <a href="{{ route('logout') }}" class=" list-group-item impmenu" data-parent="#MainMenu"><i
                            class="glyphicon sidebar-icon glyphicon-log-out"></i><span id="menu-txt"><img src="{{url('images/SVG_Images/menu/SVG/offline.svg')}}"/></span> </a>
        </div>
    </nav>
