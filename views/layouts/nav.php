<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://customloginsystem.gg:4000/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/products">Products</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
			<?php if (!is_logged_in()): ?>
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li>
			<?php endif; ?>
			<?php if ((isset($_SESSION['user']->permission)) && ($_SESSION['user']->permission == 'admin')): ?>
                <li class="nav-item">
                    <a href="/admin/orders" class="nav-link">All orders</a>
                </li>
			<?php endif; ?>
            <li class="nav-item">
                <a href="/cart" class="nav-link">Cart</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
			<?php if (is_logged_in()): ?>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
			<?php endif; ?>
        </ul>
    </div>
</nav>