<?php
view('partitions.backend.header');
view('partitions.backend.sidebar');
view('backend.products._form',['errors' => $errors ?? [], 'categories' => $categories ?? [], 'product' => $product ?? []]);
view('partitions.backend.footer');