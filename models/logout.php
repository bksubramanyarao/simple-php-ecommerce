<?php


unset($_SESSION['user']);
unset($_SESSION['cart']);
unset($_SESSION['totalprice']);
header("Location: {$home_url}/products");
?>
