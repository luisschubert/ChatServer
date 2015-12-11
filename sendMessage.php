<?php
/**
 * Created by PhpStorm.
 * User: lschubert
 * Date: 12/8/15
 * Time: 7:58 PM
 */
$message = filter_input(INPUT_POST, "message");
$myFile = "wall.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n$message\n";
fwrite($fh, $stringData);
fclose($fh);
?>
<html>
<body>
<p>
    Message has been sent!
</p>
<a href="index.html">Return to wall</a>
</body>
</html>

