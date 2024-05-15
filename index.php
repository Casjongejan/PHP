<?php
    $cwd = getcwd();

    if (isset($_GET['cwd'])) {
        $cwd = $_GET['cwd'];
    }

    $all = scandir($cwd);

    $all = array_splice($all, 2);

    foreach ($all as $a) {
//        echo $a . "<br>";
        $full_path = $cwd . DIRECTORY_SEPARATOR . $a;
        if (is_file($full_path)) {
            echo '[F] <a href="index.php?cwd=' . $cwd . '&file=' . $a . '">' . $a . "</a><br>";

        } else {
            echo '[D] <a href="index.php?cwd=' . $full_path . '">' . $a . "</a><br>";
        }
    }

    if (isset($_GET['file'])) {
        $file = $_GET['file'];
        $full_path = $cwd . DIRECTORY_SEPARATOR . $file;

        $mime = explode("/", mime_content_type($full_path))[0];

//        echo $mime;
        if ($mime == "image") {
            $img_path = ltrim(str_replace(getcwd(), "", $full_path), DIRECTORY_SEPARATOR);
            echo '<img src="' . $img_path . '">';
        }
        if ($mime == "text") {
            $content = htmlentities(file_get_contents($full_path));
            echo '<textarea>' . $content . '</textarea>';
        }
    }
