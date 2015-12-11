<html>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: lschubert
 * Date: 12/8/15
 * Time: 8:11 PM
 */


//if(filesize($myFile) <= 0){
//    echo "No Messages yet","\n","<a href=index.html>Send a Message!</a>";
//}
//else{
//    echo "<a href=index.html>Send a Message!</a>";
//    $content = fread($fh, filesize($myFile));
//    echo $content;
//}

$myFile = "wall.txt";
if (filesize($myFile) <= 0) {
    echo "No Messages yet", "\n", "<a href=index.html>Send a Message!</a>";
} else {
    $fh = fopen($myFile, 'r') or die("can't open file");

    echo "<h3><a href=index.html>Send a new Message!</a></h3>";
    while (($line = fgets($fh)) !== false) {
        echo "<h3>$line</h3>";
    }
    fclose($fh);
}

?>

</body>
</html>
