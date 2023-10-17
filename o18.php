<?php
$inf = file_get_contents("opdracht17.txt");
/*    echo '*/
?>
<form action="o18.php" method="post">
<textarea name="txt17" ><?php print_r($inf) ?></textarea>
<button type="submit">overwrite</button> 
<?php
/*';*/
if(isset($_POST["txt17"])){
    file_put_contents("opdracht17.txt" , $_POST["txt17"]);
}?>


