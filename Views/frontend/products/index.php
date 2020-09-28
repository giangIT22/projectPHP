<list-product>
    <div class="container">
        <div class="titlePrimary">
            List Products
        </div>
      <?php
        view('partitions.frontend.filter',['menus' => $menus ?? []]);
      ?>
      
        <div class="__product">
            <?php 
                if(!empty($products)) :
                    foreach($products as $product) : ?>
                    <div class="item">
                        <div class="image">
                            <a href="index.php?controller=product&action=show&id=<?= $product['id'] ?>">
                                <?php
                                    $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                ?>
                                <img src="./public/uploads/<?= $productImage ;?>" alt="<?=$product['name'];?>">
                            </a>
                            <div class="function">
                                <a href=""><i class="fal fa-heart"></i></a>
                                <a href="index.php?controller=product&action=show&id=<?= $product['id'] ?>"><i class="fal fa-eye"></i></a>
                                <a href="index.php?controller=cart&action=store&id=<?= $product['id']?>"><i class="fal fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <h1><?=$product['name']?></h1>
                        <h2>
                                <s><?= number_format($product['price']) ?> vnd</s>
                            <?php if(!empty($product['price_sale'])):?>
                                <span><?=number_format($product['price_sale']) ?> vnd</span></h2>
                            <?php endif;?>
                    </div>
            <?php endforeach; endif ?>
        </div>
    </div>
</list-product>