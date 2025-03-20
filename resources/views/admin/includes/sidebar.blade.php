<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{url('/admin/index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link" href="{{url('/admin/users')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                      Manage Users
                    </a>

                    <a class="nav-link" href="{{url('/admin/vendors')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users-rectangle"></i></div>
                        Manage Vendors
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Manage Category
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('/admin/addcategory')}}">Add Category</a>
                            <a class="nav-link" href="{{url('/admin/viewcategory')}}">View Category</a>
                        </nav>
                    </div>

                 


                    <a class="nav-link" href="{{url('/admin/orders')}}">
                        <div class="sb-nav-link-icon"><i class="fa-brands fa-shopify"></i></div>
                        Manage Orders
                    </a>

                    {{-- <a class="nav-link" href="{{url('/admin/products')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-clock"></i></div>
                        Manage Products
                    </a> --}}
                    
                    
                    
                    
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>