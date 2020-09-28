<?php
view('partitions.frontend.header',['menus' => $menu ?? []]);
view('partitions.frontend.category_choose', ['categoryHome' => $categoryHome ?? []]);
view('partitions.frontend.shipping');
view('frontend.products.index',[
    'products' => $products ?? [], 
    'menus' => $menu ?? []
    ]);
view('partitions.frontend.footer');