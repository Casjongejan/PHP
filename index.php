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
for ($i =0; $i <= 10; $i = $i + 2){
    echo $i . "<br>" ;
}
$table = 10;
echo '------------------------<br>';
for ($j =1; $j <= 10; $j = $j + 1){
    echo $j * $table . "<br>" ;
}
echo '------------------------<br>';
$num1 = 0;
$num2 = 1;
for ($l =1; $l <= 1000; $l = $l + 1){
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3; "<br>" ;


}
echo $num3;
echo '<<br>------------------------<br>';
$colorcode = "white";
echo' <form action="welcome.php" method="post">
    Color: <input type="text" Colorcode="Colorcode">';
echo "<body style='background-color:$colorcode'>";