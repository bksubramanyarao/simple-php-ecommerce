<?php
//unset($_SESSION['user']);
//unset($_SESSION['totalprice']);

if (isset($_POST['productid'])) {
  $productid=$_POST['productid'];
  $query=mysqli_query($con, "SELECT * FROM products WHERE id='$productid'");
  $product=mysqli_fetch_assoc($query);
  $product['productquantity']=$_POST['productquantity'];
  $product['price']*=$product['productquantity'];
  if (is_array($product)) {
    $cart=1;
    $_SESSION['cart'][$product['id']]=$product;
    $_SESSION['totalprice'][]=$product['price'];
  } else {
    $cart=0;
  }
}

if (isset($_POST['updatecart'])) {
  unset($_SESSION['totalprice']);
  foreach ($_POST['updateproduct'] as $key => $value) {
    if (array_key_exists($key, $_SESSION['cart'])) {
      if ($value['quantity']=='0') {
        unset($_SESSION['cart'][$key]);
      } else {
        $oprice=$_SESSION['cart'][$key]['price'] / $_SESSION['cart'][$key]['productquantity'];
        $_SESSION['cart'][$key]['price']=$oprice;
        $_SESSION['cart'][$key]['price']*=$value['quantity'];
        $_SESSION['totalprice'][]=$_SESSION['cart'][$key]['price'];
        $_SESSION['cart'][$key]['productquantity']=$value['quantity'];
      }
    }
  }
  //debug($_POST);
}

include 'views/cart/cart.php';


?>
