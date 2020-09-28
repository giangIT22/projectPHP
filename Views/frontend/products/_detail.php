
<div class="detailProduct">
    <div class="container">
        <div class="item">
            <div class="gallery">

            <div class="previews">
                    <?php if (!empty($images)):
                        foreach ($images as $image): ?>
                        <a href="#" data-full="./public/uploads/<?= $image['name'] ?>">
                            <img src="./public/uploads/<?= $image['name'] ?>" alt="<?= $product['image'] ?>" />
                        </a>
                    <?php endforeach; endif; ?>
                </div>

                <div class="full">
                    <img src="./public/uploads/<?= !empty($product['image']) ? $product['image'] : 'no-image.jpg' ?>" />
                </div>
            </div>
            <div class="detail">
                <h6>Offer will end through</h6>
                <h1><?= $product['name'] ?></h1>
                <h2><?= number_format($product['price']) ?></h2>
                <ul>
                    <li>SKU: <span><?= $product['sku'] ?></span></li>
                    <li>Availability: <span>Many in stock</span></li>
                    <li>Vendor: <span>Guess</span></li>
                    <li>Product Type: <span>Bags</span></li>
                    <li>Barcode: <span>0123456789</span></li>
                    <li>Tags: <span>Awesome</span></li>
                </ul>
                <a href = "index.php?controller=cart&action=store&id=<?= $product['id']?>" class = "cart-product">Thêm vào giỏ hàng</a>
                <img src="https://cdn.shopify.com/s/files/1/0062/5642/7093/files/trust_badge_desk_571x.png?v=1546508672"
                     alt="">
            </div>
        </div>
    </div>
</div>
<div style="clear: both"></div>

<div class="container">
    <div class="moreProduct">
       Sản phẩm liên quan
    </div>

</div>

<list-product>
    <div class="container">
        <?php if(!empty($products)): ?> 
            <div class="__product">
                <?php foreach($products as $product) :?>
                <div class="item">
                    <div class="image">
                        <a href=""><img src="./public/frontend/images/product-12.jpg" alt=""></a>
                        <div class="function">
                            <a href=""><i class="fal fa-heart"></i></a>
                            <a href="index.php?controller=product&action=show&id=<?= $product['id']?>"><i class="fal fa-eye"></i></a>
                            <a href="index.php?controller=cart&action=store&id=<?= $product['id']?>"><i class="fal fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <h1><?= $product['name']?></h1>
                    <h2><?= $product['price']?></h2>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else :?>
            <br>
            <h1 style="text-align :center;">Không có sản phẩm nào</h1>
            <?php endif;?>
    </div>
</list-product>

<style>
    .cart-product{
        background: #ff6f61;
        font-family: inherit;
        font-weight: 600;
        color: #fff;
        text-align :center;
        padding:10px 18px;
        width: 40%;
        font-size: 20px;
        margin-top: 20px;

        display : inline-block;

}

</style>
