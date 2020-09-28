<h2>List Product</h2>
<?php
    require 'product.php';

    $productsDeleted = $_GET['deleted'] ??'';
    $deleteArray = explode(',',$productsDeleted);
    array_push($deleteArray,$productsDeleted);
   
    echo '<ul>';
    foreach ($products as $product) {
            if(!in_array($product['id'],$deleteArray)){
                echo '<li>';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>' . $product['price'] . '</p>';
                echo '<a href="product-detail.php?id='. $product['id'] .'">Chi tiết</a>';
                echo '<a href="product-list.php?deleted='. $product['id'] .'"> | Delete</a>';
            }
            echo '</li>';
    }
    echo '</ul>';
?>

<style>
    ul {
        margin: 0px;
        padding: 0px;
        list-style-type: none;
    }

    li {
        float: left;
        width: 200px;
        height: 220px;
        background: #CCC;
        margin-right: 5px;
        margin-bottom: 5px;
        padding-left: 10px;
    }
</style>