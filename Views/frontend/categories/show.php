<?php
view('partitions.frontend.header',['menus' => $menu ?? []]);

view('frontend.categories._detail', ['category' => $category, 'products' => $products,'menus' => $menu ?? [] ]);
view('partitions.frontend.footer');