<?php
$files = scandir("img/back/");
$files = array_splice($files, 2);

//print_r($files);
foreach ($files as $file) {
    echo '<a href="img/back/' . $file . '">' . $file . '</a><br>';
}