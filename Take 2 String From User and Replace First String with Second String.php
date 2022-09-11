<?php
if (isset ($_POST['button'])) 
{
    $a = $_POST["txt1"];
    $b = $_POST["txt2"];

    echo str_replace($a,$b,$a);
}
?>
<html>
    <form method="post">
        Name:<input type="text" name="txt1"/><br/>
        Name To Change:<input type="text" name="txt2"/><br/>
        <input type="submit" name="button" value="Click Me"/>
</form>
</html>