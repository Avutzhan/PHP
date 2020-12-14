<?php

include_once("client.php");

$form = getProductForm();
loadProductData($form);
renderProduct($form);