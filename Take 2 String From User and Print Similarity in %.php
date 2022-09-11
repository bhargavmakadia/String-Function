<?php
if (isset ($_POST['button'])) 
{
    $a = $_POST["txt1"];
    $b = $_POST["txt2"];

    echo similar_text("$a",
    "$b",$per); 
    echo "<br>Same Value in % $per";
}
?>
<html>
    <form method="post">
        Enter Name:<input type="text" name="txt1"/><br/>
        Enter Second Name:<input type="text" name="txt2"/><br/>
        <input type="submit" name="button" value="Click Me"/>
</form>
</html>