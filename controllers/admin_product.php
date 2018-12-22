<?php
require_once '../models/Product.php';

$product = new Product($_GET['product_id']);
$admin_page_title = $product->title;
$product_id = $product->id;

require_once "../models/Size.php";
$sizes = Size::getAll($product_id);

require_once "../views/admin_product.php";