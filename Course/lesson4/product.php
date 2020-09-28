<?php

$products = [];

for($i = 1; $i<=18; $i++ ){
    array_push($products, [
        'id' => $i,
        'name' => "Product ${i}",
        'price' =>number_format(rand(1,5000))
    ]);
}
