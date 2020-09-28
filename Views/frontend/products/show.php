<?php
view('partitions.frontend.header');

view('frontend.products._detail', ['product' => $product ?? null, 'products' => $products ?? [],'images' => $images ?? []]);
view('partitions.frontend.footer');