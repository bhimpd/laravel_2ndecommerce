<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{url('/user')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Products
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('/vendor/addproduct')}}">Add Product</a>
                            <a class="nav-link" href="{{url('/vendor/viewproduct')}}">View Product</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="{{url('/vendor/orders')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-clock"></i></div>
                        Orders
                    </a>
                    
                   
                    <a class="nav-link" href="{{url('/vendor/users')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                        Users
                    </a>
                    <a class="nav-link" href="{{url('/vendor/profile')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                      Profiles
                    </a>
                    
                    
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                User Name
            </div>
        </nav>
    </div>