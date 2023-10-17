<?php

echo "Hello world. <br>";
$name = 'Cas';
$age = 15;
echo 'Hallo mijn is: ' . $name . " en ik ben " . $age . " jaar oud. <br>";
$try1 = 0;
if ($try1 > 0) {
    echo 'good <br>';
}
if ($try1 > 0 && $try1 < 10) {
    echo 'good <br>';
} else {
    echo 'number out of range <br>';
}
for ($i = 0; $i <= 10; $i = $i + 2) {
    echo $i . "<br>";
}
$table = 10;
echo '------------------------<br>';
for ($j = 1; $j <= 10; $j = $j + 1) {
    echo $j * $table . "<br>";
}
echo '------------------------<br>';
$num1 = 0;
$num2 = 1;
for ($l = 1; $l <= 999; $l = $l + 1) //999 cuz start at 0 :p
{
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    "<br>";
}
echo $num3;
echo '<br>------------------------<br>';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST["Colourcode"]);
}
$colourcode = implode($_POST);
echo ' <form action="index.php" method="post">
    color: <input type="text" name="Colourcode"  value="White"><br>
    <input type="submit">';
if (isset($_POST['Colourcode'])) {
    echo "<body style='background-color:$colourcode '>";
}
echo '<br>------------------------<br>';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST["name"]);
}

echo '<br><form action="index.php" method="post">
    Name: <input type="text" name="name"  value=" "><br>
age: <input type="text" name="age" value="0"><br>
<input type="submit">
</form>';
if (isset($_POST['age'])) {

    $test = $_POST['age'];
    for ($k = 0; $k <= $test - 1; $k = $k + 1) {
        echo '<br>', $_POST["name"];
    }
}
echo '<br>------------------------<br>';
echo ' <form action="index.php" method="post">
    Num: <input type="text" name="Tabl" value="6"><br>
    <input type="submit">';
if (isset($_POST['Tabl'])) {


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        print_r($_POST["Tabl"]);
    }

    for ($h = 0; $h <= 10; $h = $h + 1) {
        echo $h * $_POST["Tabl"] . "<br>";
    }
    echo '<br>------------------------<br>';

    $alles = scandir("img/back");
    $alles = array_splice($alles, 2);
    print_r($alles);

}
?>
<br>

<a href="img/back/back_blue.png">blue</a><br>
<a href="img/back/back_purple.png">purple</a><br>
<a href="img/back/back_green.png">green</a><br>
<a href="img/back/back_gray.png">gray</a><br>
<?php
echo'
<form action="index.php" method="get">
    blue: <input type="radio" name="File_img" value="img/back/back_blue.png"><br>
    purple: <input type="radio" name="File_img" value="img/back/back_purple.png"><br>
    green: <input type="radio" name="File_img" value="img/back/back_green.png"><br>
    gray: <input type="radio" name="File_img" value="img/back/back_gray.png"><br>
    <button type="submit">Send</button>';
if (isset($_GET['FilePath'])) {
    echo $_GET['FilePath'];
}
?>



