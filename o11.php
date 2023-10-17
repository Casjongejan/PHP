<?php
$files = scandir("img/back/");
$files = array_splice($files, 2);

//print_r($files);
foreach ($files as $file) {
    echo '<a href="o11.php?img=' . $file . '">' . $file . '</a><br>';
}

if (isset($_GET['img'])) {
    $img = $_GET['img'];
    echo '<img src="img/back/' . $img . '" height="100px">';
}