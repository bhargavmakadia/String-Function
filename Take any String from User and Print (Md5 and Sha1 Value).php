<?php
if (isset ($_POST['filename'])) 
{
    $filename = $_POST["txt1"];
    echo md5($filename)."<br/>";
    $myString = $filename;
    $newString = sha1($myString);
    echo $newString;
}
?>
<html>
    <form method="post">
        Enter Name:<input type="text" name="txt1"/><br/>
        <input type="submit" name="filename" value="submit"/>
</form>
</html>