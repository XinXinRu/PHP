<?php

    //「error_reporting(0);」隱藏錯誤訊息
    error_reporting(0);

    //判斷「使用者」登入時帳號密碼是否正確
    if(($_Get[id] == "john") &&($_Get[pwd] =="john1234"))
        echo "welcome"; //正確時顯示「welcome」歡迎使用者
    else
        echo "login failure";   //錯誤時顯示「login failure」登入失敗

?>