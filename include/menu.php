<header class="d-flex justify-content-center py-3 stick-top bg-light border-bottom shadow-sm">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo $base_url ?>/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_url ?>/product-list.php">Product List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_url ?>/cart.php">Cart (<?php echo count($_SESSION['cart'] ?? []); ?>) </a>
        </li>
    </ul>
</header>