<?php
if (isset ($_POST['filename'])) 
{
    $filename = $_POST["txt1"];
    echo strlen($filename)."<br/>";
    echo strtoupper($filename)."<br/>";
    echo strtolower($filename)."<br/>";
    echo ucfirst($filename)."<br/>";
    echo strtoupper($filename)."<br/>";
    $myString = $filename;
    echo strrev($myString);
}
?>
<html>
    <form method="post">
        Enter Name:<input type="text" name="txt1"/><br/>
        <input type="submit" name="filename" value="submit"/>
</form>
</html>