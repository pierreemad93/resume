<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo"> <a href="dashboard/main/index.html"> <img src="admin/images/logo@2x.png"
                        width="120" alt="" /> </a> </div> <!-- logo collapse icon -->
            <div class="sidebar-collapse"> <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a> </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs"> <a href="#" class="with-animation">
                    <!-- add class "with-animation" to support animation --> <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="frontend/main/index.html">
                    <i class="entypo-monitor"></i>
                    <span class="title">Frontend</span>
                </a>
            </li>
            <li>
                <a href="{{route('slider.index')}}">
                    <i class="entypo-monitor"></i>
                    <span class="title">Slider</span>
                </a>
            </li>
            
            <li class="has-sub">
                <a href="index.html#">
                    <i class="entypo-flow-tree"></i>
                    <span class="title">Menu Levels</span></a>
                <ul>
                    <li> <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level
                                1.1</span></a> </li>
                    <li> <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level
                                1.2</span></a> </li>
                    <li class="has-sub"> <a href="index.html#"><i class="entypo-flow-line"></i><span
                                class="title">Menu Level 1.3</span></a>
                        <ul>
                            <li> <a href="index.html#"><i class="entypo-flow-parallel"></i><span
                                        class="title">Menu Level 2.1</span></a> </li>
                            <li class="has-sub"> <a href="index.html#"><i class="entypo-flow-parallel"></i><span
                                        class="title">Menu Level 2.2</span></a>
                                <ul>
                                    <li class="has-sub"> <a href="index.html#"><i
                                                class="entypo-flow-cascade"></i><span class="title">Menu Level
                                                3.1</span></a>
                                        <ul>
                                            <li> <a href="index.html#"><i class="entypo-flow-branch"></i><span
                                                        class="title">Menu Level 4.1</span></a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="index.html#"><i class="entypo-flow-cascade"></i><span
                                                class="title">Menu Level 3.2</span></a> </li>
                                </ul>
                            </li>
                            <li> <a href="index.html#"><i class="entypo-flow-parallel"></i><span
                                        class="title">Menu Level 2.3</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
