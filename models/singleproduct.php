<?php









$query=mysqli_query($con, "SELECT * FROM products WHERE slug='$q'");
$product=mysqli_fetch_assoc($query);
if (is_array($product)) {
  include 'views/products/singleproduct.php';
} else {
  include 'views/404.php';
}



?>
