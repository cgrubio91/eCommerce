<?php

function getFolderProject()
{
    if (strpos(__DIR__, '/') !== false){
        $root = str_replace('/opt/lampp/htdocs/','/', __DIR__);
    } else {
        $root = str_replace('e:\\Desarrollo\\xamp\\htdocs\\','/', __DIR__);
    }
    $root = str_replace('config','', $root);
    return $root;
}

function saveImage($files){
    $file_name = str_replace(' ','',$files['image']['name']);
    $file_tmp  = $files['image']['tmp_name'];
    /* move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . getFolderProject() . '/imagenesProductos/' . $file_name); */
    move_uploaded_file($file_tmp, getFolderProject() . '/imagenesProductos/' . $file_name);
    return $file_name;
}
?>