<?php
     require './product.php';
     $productDetail = '';
     if(isset($_GET['id'])){
        foreach($products as $product){
            if($product['id']==$_GET['id']){
                $productDetail= $product;
            break;
            }
        }
        if($productDetail)
            echo "<p>${productDetail['name']}</p>";
        else{
            echo 'sản phẩm không tồn tại';
        }

     }else{
        //  echo "không tồn tại id";
        header('location:product-list.php');
     }
    