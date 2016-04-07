<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="@if(Request::segment(1) == 'dashboard') start active open @endif">
                <a href="javascript:;">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow @if(Request::segment(1) == 'dashboard') open @endif"></span>
                </a>
            </li>
            <li @if(Request::segment(1) == 'complain')  start active open @endif>
                <a href="javascript:;">
                    <i class="icon-pencil"></i>
                    <span class="title">Complains</span>
                    <span class="selected"></span>
                    <span class="arrow  @if(Request::segment(1) == 'complain')  open @endif"></span>
                </a>
                <ul class="sub-menu">
                    <li class="active">
                        <a href="{!! URL::route('all-complains') !!}">
                            <i class="icon-pencil"></i>
                            All</a>
                    </li>
                    <li>
                        <a href="{!! URL::route('inprocess') !!}">
                            <i class="icon-pencil"></i>
                            In process</a>
                    </li>
                    <li>
                        <a href="{!! URL::route('incomplete') !!}">
                            <i class="icon-pencil"></i>
                            Incomplete</a>
                    </li>
                    <li>
                        <a href="{!! URL::route('completed') !!}">
                            <i class="icon-pencil"></i>
                            Completed</a>
                    </li>

                </ul>
            </li>

            <li class="start active open">
                <a href="{!! URL::route('Search') !!}">
                    <i class="icon-home"></i>
                    <span class="title">Search</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->