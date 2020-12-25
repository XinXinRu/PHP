<?php
    /*確定沒問題「error_reporting();」裡面再放入「0」
    否則出現錯誤也無法顯示出來*/
    error_reporting();
    //「session_start();」啟動「$_SESSION」
    session_start();
    if(!isset($_SESSION["counter"]))
    {
        $_SESSION["counter"]=1;
    }
    else
    {
        $_SESSION["counter"]++;
    }
    echo "登入{$_SESSION["counter"]}人次";
?>