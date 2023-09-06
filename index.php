<?php

echo "Hello world. <br>";
$name = 'Cas';
$age = 15;
echo 'Hallo mijn is: ' . $name . " en ik ben " . $age . " jaar oud. <br>";
$try1 = 0;
if ($try1 > 0)
{
    echo 'good <br>';
}
if ($try1 > 0 && $try1 < 10)
{
    echo 'good <br>';
} else
{
    echo 'number out of range <br>';
}
for ($i = 0; $i <= 10; $i = $i + 2)
{
    echo $i . "<br>";
}
$table = 10;
echo '------------------------<br>';
for ($j = 1; $j <= 10; $j = $j + 1)
{
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

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    print_r($_POST["Colourcode"]);
}
$colourcode = implode($_POST);
echo ' <form action="index.php" method="post">
    color: <input type="text" name="Colourcode"><br>
    <input type="submit">';
echo "<body style='background-color:$colourcode '>";
echo '<br>------------------------<br>';
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    print_r($_POST["name"]);
}

echo '<br><form action="index.php" method="post">
    Name: <input type="text" name="name"><br>
age: <input type="text" name="age"><br>
<input type="submit">
</form>';
for ($k = 0; $k <= $_POST["age"]- 1; $k = $k + 1)
{
    echo'<br>' ,$_POST["name"] ;
}
echo '<br>------------------------<br>';
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    print_r($_POST["Tabl"]);
}

echo ' <form action="index.php" method="post">
    Num: <input type="text" name="Tabl"><br>
    <input type="submit">';

/*$table1 = implode($_POST["Tabl"]);*/
for ($h = 1; $h <= 10; $h = $h + 1)
{
    echo $h * $_POST["Tabl"] /*$table1*/ . "<br>";
}