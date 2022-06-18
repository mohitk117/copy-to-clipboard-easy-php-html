<?php
//echo "complete";
//echo $_POST["clipboard"];
$clipboard = $_POST["clipboard"];

//if($_POST["clipboard"]){
    addClipboardToFile($clipboard);
    //echo "complete";

//}

function addClipboardToFile($text){
   file_put_contents("clipboard.txt", $text);
    echo "success";
}
?>