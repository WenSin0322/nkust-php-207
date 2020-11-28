<?php
    require("dbinfo.php");
    $id=$_GET["id"];
    echo "你要刪除的是" .$id ."嗎?";
    $sql = "DELETE FROM news WHERE id='$id'";
$conn->query($sql);
$conn->close();
    

    header("Location: /nkust-php-207");
?>