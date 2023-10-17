<?php
echo '
<form action="o17.php" method="post">
<textarea name="txt17"></textarea>
<button type="submit">overwrite</button> 

';
if(isset($_POST["txt17"])){
    file_put_contents("opdracht17.txt" , $_POST["txt17"]);
}
