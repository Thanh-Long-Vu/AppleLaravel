{{-- start aside  --}}
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <!-- Start================ Dashboard ===================== -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item ">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <!-- End================ Dashboard ===================== -->
        <!-- Start================ Data ===================== -->
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Data</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#Warehouse" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Warehouse</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Warehouse">
                    <li class="nav-item dropdown">
                        <a href="#Staff" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Warehouse</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Staff">
                            <li class="nav-item">
                                <a href="{{route('warehouse.index')}}" class="nav-link">
                                    <span class="ml-3 item-text">List Warehouse</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('warehouse.create')}}" class="nav-link">
                                    <span class="ml-3 item-text">Add Warehouse</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('historyWareHouse')}}" class="nav-link">
                                    <span class="ml-3 item-text">History Warehouse</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Warehouse">
                    <li class="nav-item dropdown">
                        <a href="#Category" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Category</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Category">
                            <li class="nav-item">
                                <a href="{{route('home.listcategory')}}" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">List Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('home.createcategory')}}"  aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Add Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('historyCategory')}}" class="nav-link">
                                    <span class="ml-3 item-text">History Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Warehouse">
                    <li class="nav-item dropdown">
                        <a href="#ProductType" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Product Type</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="ProductType">
                            <li class="nav-item">
                                <a href="{{route('producttype.index')}}" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">List Product Type</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('createProductType')}}" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Add Product Type</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('historyProductType')}}" class="nav-link">
                                    <span class="ml-3 item-text">History Product TYpe</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Warehouse">
                    <li class="nav-item dropdown">
                        <a href="#Products" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Product </span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Products">
                            <li class="nav-item">
                                <a href="{{route('product.index')}}" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">List Product</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('createProduct')}}" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Add Product </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Warehouse">
                    <li class="nav-item">
                        <a href="#Sales" data-toggle="collapse" aria-expanded="false" class="nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Sales</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="nav-item w-100">
          <a class="nav-link" href="widgets.html">
            <i class="fe fe-layers fe-16"></i>
            <span class="ml-3 item-text">Widgets</span>
            <span class="badge badge-pill badge-primary">New</span>
          </a>
        </li> -->
            <li class="nav-item dropdown">
                <a href="#Blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Blog</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Blog">
                    <li class="nav-item dropdown">
                        <a href="#Blogs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Blogs</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Blogs">
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">List Blogs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Add Blogs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Edit Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Blog">
                    <li class="nav-item dropdown">
                        <a href="#Blogs_detail" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Blogs Detail</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Blogs_detail">
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">List Blogs Detail</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Add Blogs Detail</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-toggle="collapse" aria-expanded="false" class="nav-link">
                                    <span class="ml-3 item-text">Edit Blogs Detail</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="Blog">
                    <li class="nav-item">
                        <a href="#Comments" data-toggle="collapse" aria-expanded="false" class="nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Comments</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#Trancastion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">Trancastion</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Trancastion">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-pie-chart fe-16"></i></i><span
                                class="ml-1 item-text">Orders</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-pie-chart fe-16"></i><span
                                class="ml-1 item-text">Goods Issue</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-pie-chart fe-16"></i><span
                                class="ml-1 item-text">Goods receipt</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><i class="fe fe-pie-chart fe-16"></i><span
                                class="ml-1 item-text">Inventory </span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#Statistic" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">Statistic</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Statistic">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline
                                Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-chartjs.html"><span
                                class="ml-1 item-text">Chartjs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-apexcharts.html"><span
                                class="ml-1 item-text">ApexCharts</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#System" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">System</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="System">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline
                                Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-chartjs.html"><span
                                class="ml-1 item-text">Chartjs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-apexcharts.html"><span
                                class="ml-1 item-text">ApexCharts</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Contacts</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
                    <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
                    <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="calendar.html">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Calendar</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profile</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                    <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
                    <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
                    <a class="nav-link pl-3" href="./profile-notification.html"><span
                            class="ml-1">Notifications</span></a>
                </ul>
            </li>
        </ul>

        <!-- End================ Data ===================== -->
    </nav>
</aside>
{{-- end aside  --}}
