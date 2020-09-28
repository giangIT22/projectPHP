 
 <form action="" method="get" class="filter">
            <div class="item">
                <input type="text" placeholder = "Tên sản phẩm" name="product_name" class = "keyword-search">
            </div>
            <div class="item">
                <select  id="" name="start_price">
                    <option value="">Chọn giá</option>
                    <option value="100000">100.000</option>
                    <option value="200000">200.000</option>
                    <option value="300000">300.000</option>
                    <option value="400000">400.000</option>
                    <option value="500000">500.000</option>
                    <option value="600000">600.000</option>
                   
                </select>
            </div>
            <div class="item">
                <select id="" name="end_price">
                    <option value="">Chọn giá</option>
                    <option value="100000">100.000</option>
                    <option value="200000">200.000</option>
                    <option value="300000">300.000</option>
                    <option value="400000">400.000</option>
                    <option value="500000">500.000</option>
                    <option value="600000">600.000</option>
                </select>
            </div>
            <div class="item">
                <select id="" name="category_id" >
                    <option value="">Chọn danh mục</option>
                    <?php if(!empty($menus)): ?>
                        <?php foreach($menus as $category) :?>
                        <option value="<?= $category['id']?>"> <?= $category['name'] ?></option>
                        <?php endforeach; ?>
                    <?php else :?>
                        <option value="<?= $category['id']?>"> <?= $category['name'] ?></option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="item">
                
                <button>Tìm kiếm</button>
            </div>
</form>

<style>
    input.keyword-search{
        padding:10px;
        border:none;
        border-radius:10px;
    }
</style>