<category>
    <div class="row row-column">
    <?php foreach($categoryHome as $categoryHomeItem) :?>
        <div class="item">
            <div class="info">
                <p><?= $categoryHomeItem['name']?></p>
                <a href="index.php?controller=category&action=show&id=<?= $categoryHomeItem['id']?>">Xem ngay <i class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>
    <?php endforeach; ?>   
    </div>
</category>