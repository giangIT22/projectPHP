<?php
view('partitions.backend.header');
view('partitions.backend.sidebar');
view('backend.categories._form',['errors' => $errors ?? [], 'category' => $category ?? [] ]);
view('partitions.backend.footer');