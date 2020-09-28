<?php
view('partitions.frontend.header',['menus' => $menu ?? []]);
// view('frontend.categories._detail');
// view('frontend.categories._detail', ['category' => $category, 'products' => $products,'menus' => $menu ?? [] ]);
view('frontend.carts._list',['products'  => $products ] ?? []);
view('partitions.frontend.footer');