 <?php

function view($path, array $data = []){
    foreach($data as $key=> $value){
        $$key = $value;
    }
   return require ('./Views/'.str_replace('.', '/', $path). '.php');
}