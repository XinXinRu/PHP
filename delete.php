<?php
    //顯示錯誤訊息
    error_reporting();
    //登入「MySQL」
    $conn=mysqli_connect("localhost","root","","mydb");
    //刪除來自於「bulletin」的資料
    $sql="delete from bulletin where bid={$_GET[bid]}";
    //echo $sql;
    if(!mysqli_query($conn, $sql)){
        echo "刪除錯誤";
    }
    elseP
    {
        //這樣撰寫則會直接刪除資料，且不會跳出通知
        echo "刪除成功；回前頁中...";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>";
    }
?>