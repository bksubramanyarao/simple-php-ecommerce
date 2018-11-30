<?php


$routes=[
  'GET'=>[
    '/'=>'models/home',
    '/register'=>'models/register',
    '/login'=>'models/login',
    '/logout'=>'models/logout',
    '/products'=>'models/products',
    '/checkout'=>'models/checkout',
    '/products/'.$q=>'models/singleproduct',
    '/cart'=>'models/cart',
    '/products/create'=>'models/productscreate'
  ],
  'POST'=>[
    '/login'=>'models/login',
    '/register'=>'models/register',
    '/cart'=>'models/cart',
    '/checkout'=>'models/checkout',
  ]
];

if ((isset($_SESSION['user']['permission'])) && ($_SESSION['user']['permission']=='admin')) {
  $routes['GET']['/admin/orders']='models/orders';
  $routes['GET']['/admin/orders/'.$q]='models/singleorder';
}



?>