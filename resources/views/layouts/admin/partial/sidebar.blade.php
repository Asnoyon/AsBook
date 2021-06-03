<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('admin.dashboard') }}">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>{{ Auth::user()->name }}</span>
                    </a></div>
                <li class="label">Main</li>
                <li><a class="" href="{{ route('admin.dashboard') }}"><i class="ti-home"></i>
                        Dashboard </span></a>

                </li>

                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Category <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('admin/category/index') }}">All Category</a></li>
                        <li><a href="{{ url('admin/category/create') }}">Create Category</a></li>
                    </ul>
                </li>



                <li><a href="{{ url('admin/location/index') }}"><i class="ti-calendar"></i> Locations </a></li>
                <li><a href="{{ url('admin/book/index') }}"><i class="ti-email"></i> Books</a></li>
                <li><a href="{{ url('admin/book/user-post') }}"><i class="ti-user"></i> User Pending Post</a></li>
                <li><a href="{{ url('admin/order/orders') }}"><i class="ti-layout-grid2-alt"></i> Order List</a></li>
                <li><a href="{{ url('admin/message/messages') }}"><i class="ti-user"></i> Message List</a></li>
                <li><a href="{{ url('admin/logout') }}" ><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->
