<?php 
$menu=CoreCustomController::getAvailableMenus();


?>
<!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index.html" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="{{asset('admin/img/placeholders/avatars/avatar2.jpg')}}" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">John Doe</div>
                                <div class="sidebar-user-links">
                                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">General Navigation</span>
                                </li>
                                <li>
                                    <a href="{{url('dashboard')}}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="{{url('crud')}}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">CRUD Settings</span></a>
                                </li>
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                    <span class="sidebar-header-title">Widget Kit</span>
                                </li>
                                
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                                    <ul>
                                        @if(count($menu)>0)
                                            @foreach($menu as $mn)    
                                            <li>
                                                <a href="{{url($mn->route_link)}}">{{$mn->name}}</a>
                                            </li>
                                            @endforeach
                                        @endif
                                        <li>
                                            <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                        </li>
                
                                    </ul>
                                </li>
                                
                                
                            </ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->