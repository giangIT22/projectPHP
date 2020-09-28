<list-product>
    <div class="container">
        <div class="titlePrimary">
            <?php echo $category['name'] ?? null ?>
        </div>
        <?php
              view('partitions.frontend.filter',['category' => $category ?? null]);
        ?>
        <div class="__product">
            <?php if(!empty($products)) :?>
                   <?php foreach($products as $product) :?>
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
                    <h1><?= $product['name']?></h1>
                    <h2><s><?=number_format($product['price'])?></s><span><?= number_format($product['price_sale'])?></span></h2>
                </div>
                    <?php endforeach;?>
            <?php else: ?>
                <p >Không có sản phẩm</p>
            <?php endif; ?>
        </div>
                    
    </div>
</list-product>