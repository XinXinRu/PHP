<?php
    //「error_reporting()」括弧內為零時將會遮蔽錯誤訊息
    error_reporting(0);
    //宣告「conn」存放「mysqli」的登入資訊
    if(!isset($_SESSION[id])){
        echo "請輸入帳號密碼";
        echo "<meta http-equiv='refresh' content='3;url=login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb");
        /*宣告「sql」存放四筆資料分別為「title標題，content內容，type類型，time時間」
          若為文字型態時在宣告「{$_POST[]}」時外層需要再加「''」來包裹住*/
        $sql="insert into bulletin(title, content, type, time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
        //echo $sql;直接印出「$sql」的資料
        //若無法將資料新增至「mysqli」內則顯示錯誤
        if(!mysqli_query($conn, $sql)){
        
            echo"新增佈告錯誤";
        }
        else{
            //成功新增時顯示「新增佈告成功」，「content='3;url=bulletin.php'」過三秒跳轉至「bulletin.php」
            echo"新增佈告成功";
        }
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>";
    }
?>