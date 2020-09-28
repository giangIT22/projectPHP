<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css">
    <link rel="stylesheet" href="./public/frontend/css/stylesheet.css">
    <link rel="stylesheet" href="./public/frontend/css/jquery.fancybox.css">
    <link rel="stylesheet" href="./public/frontend/css/style.css">
</head>
<body>
<line-header>
    <div class="container">
        <div class="row row-column">
            <div class="left">⚡ HAPPY HOLIDAY DEALS ON EVERYTHING ⚡</div>
            <div class="right">
                <a href="">Shipping</a>
                <a href="">FAQ</a>
                <a href="">Contact</a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
</line-header>
<header>
    <div class="container">
        <div class="row rowAlign row-column">
            <a href="index.php" class="logo">
                Shopper
            </a>
            <div class="menu">
                <ul>
                    <?php 
                        if(!empty($menus)) :
                            foreach($menus as $menuItem) :?>
                            <li><a href="index.php?controller=category&action=show&id=<?= $menuItem['id']?>"><?= $menuItem['name'] ?></a></li>
                            <?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="subFunctional">
                <a href=""><i class="far fa-search"></i></a>
                <a href=""><i class="fal fa-heart"></i></a>
                <a href=""><i class="fal fa-user"></i></a>
                <a href=""><i class="fal fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</header>