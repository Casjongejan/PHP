<a href="eindopdracht.php">Home</a> <br>
<?php

$cwd = getcwd();

if (isset($_GET['cwd'])) {

    $cwd = $_GET['cwd'];
}

$all = scandir($cwd);
$all = array_splice($all, 2);

//print_r($all);

//echo $cwd;
echo " 1 = writeable 0 = not writeable <br> ";
foreach ($all as $a) {
//    echo $a . "<br>";
    $full_path = $cwd . DIRECTORY_SEPARATOR . $a;
    $dlm = date("F d Y H:i:s.", filemtime($full_path));
    $fperm = is_writable($full_path);
    $mt = mime_content_type($full_path);
    $check = " ";
    $check2 = " ";
    $test = file_get_contents($full_path);
    $ent = htmlentities($test);


    $semifull_path = substr($full_path, 20, 220);
    /*trim($full_path, "C:/"."xampp/"."htdocs/"."php/" );*/

    if (is_file($full_path)) {
        $fsize = filesize($full_path) / 1024 / 1024;
        if (str_contains($mt, "text")) {
            $check2 = "is text";


            echo '<form action="eindopdracht.php" method="post">' .
                '<textarea name="' . htmlentities($a) . '" rows="30" style="width: 700px; height: 200px;">' . htmlentities($ent) . ' </textarea>' .
                ' <button type="submit">overwrite</button> <br>';

        } else {
            $check = "isn't text";
        }
        if (str_contains($mt, "image")) {
            $check2 = "is img";
            echo '<img src="' . $semifull_path . '" height="100px">';
        } else {
            $check = "isn't img";
        }
        echo "[F] " . " " . $mt . " " . $a . "  " . $dlm . '  ' . $fperm . "  " . $fsize . "MB" . " " . $check . " " . $check2 . "<br>";

    } else {
        echo '[D] <a href="eindopdracht.php?cwd=' . $cwd . DIRECTORY_SEPARATOR . $a . '">' . $a . ' ' . $fperm . "</a><br>";
    }
}
?>

