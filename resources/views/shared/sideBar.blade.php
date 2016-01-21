<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">
        
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">

                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <li class="heading">
                <h3 class="uppercase">菜单</h3>
            </li>

            @foreach($actions as $action)
                @if($action->children->isEmpty())
                    <li @if(Request::url() == action($action->action)) class="nav-item start active" @endif >
                        <a href="{{ action($action->action) }}" class="nav-link nav-toggle">
                            <i class="{{ $action->prefix_class }}"></i>
                            <span class="title">{{ $action->action_name }}</span>
                            <!-- <span class="arrow"></span> -->
                            @if(Request::url() == action($action->action)) <span class="selected"></span> @endif
                        </a>
                        
                    </li>
                    
                @else
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="{{ $action->prefix_class }}"></i>
                            <span class="title">{{ $action->action_name }}</span>
                            <span class="arrow"></span>
                            
                        </a>
                        <ul class="sub-menu">
                            @foreach($action->children as $subaction)
                            <li @if($subaction->action && Request::url() == action($subaction->action)) class="nav-item start active" @else class="nav-item" @endif>
                                <a href="{{ action($subaction->action) }}" class="nav-link ">
                                    
                                    <span class="title">{{ $subaction->action_name }}</span>
                                    
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    
                @endif
            @endforeach

        </ul>
    </div>
</div>