<?php
    //將錯誤顯示關閉
    error_reporting(0);
    //使用「session」前需先將其清空
    session_start();
    /*「session_destroy()」將伺服器上所有session varibale清空
    若有其一使用者登出將會導致原先在網頁所跑的程式刪除*/
    unset($_SESSION["id"]);
    /*使用者登出後畫面顯示「登出中.....」
    「CONTENT='2;url=login.html'」兩秒後跳至「login.html」*/
    echo "登出中.....";
    echo "<meta http-equiv='refresh' CONTENT='2;url=login.html'>";


?>