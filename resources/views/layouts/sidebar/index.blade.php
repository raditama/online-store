<div class="sidebar pe-4 pb-3">
    <nav class="navbar">
        <div class="navbar-nav w-100" id="sidebar-menu">
            <a href="/" class="nav-item nav-link {{ Request::path() === '/' ? 'active' : '' }}">
                <i class="fa fa-home-alt me-3"></i>Home
            </a>
            <a href="/cart" class="nav-item nav-link {{ Request::path() === "cart" ? 'active' : '' }}">
                <i class="fa fa-cart-shopping me-3"></i>Cart
            </a>
            <a href="/user" class="nav-item nav-link {{ Request::path() === "user" ? 'active' : '' }}">
                <i class="fa fa-user me-3"></i>User
            </a>
            <a href="/product" class="nav-item nav-link {{ Request::path() === "product" ? 'active' : '' }}">
                <i class="fa fa-folder me-3"></i>Product
            </a>
            <a href="/order" class="nav-item nav-link {{ Request::path() === "order" ? 'active' : '' }}">
                <i class="fa fa-bag-shopping me-3"></i>Order
            </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="far fa-file-alt me-2"></i>Order
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/process" class="dropdown-item">Process</a>
                    <a href="/history" class="dropdown-item">History</a>
                </div>
            </div>
        </div>
    </nav>
</div>