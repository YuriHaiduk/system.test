<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                    Tenders
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('tender.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Tenders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tender.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                    Offers
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('offer.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Offers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('offer.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                    Suppliers
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('supplier.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('supplier.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Logout</p>
            </a>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
