<?php
view('partitions.backend.header');
view('partitions.backend.sidebar');
view('backend.categories._form',['errors' => $errors ?? []]);
view('partitions.backend.footer');