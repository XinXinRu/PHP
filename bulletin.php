<?php
    //製作登入系統
    error_reporting(0);
    session_start();
    if(!isset($_SESSION["id"]))
    {
        //帳密輸入錯誤時跳至「login.html」，請使用者重新登入
        echo "請登入系統";
        echo "<meta http-equiv = 'refresh' content='3; url=login.html'>";

    }
    else{
        /*正確登入時顯示布告欄，且可以隨時新增佈告欄，新增時點擊「新增佈告欄」，將跳轉至「bulletin_add_form.php」*/
        echo "歡迎 {$_SESSION["id"]} 登入 [<a href = logout.php>登出 </a>]<p>[<a href=bulletin_add_form hph>新增佈告</a>]<p>";
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        /*從撈取資料並且顯示公告*/
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>";
            //新增修改/刪除鍵
            /*亦可使用此方式
            echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a>";
            echo "<a href=delete.php?bid={$row[bid]}>刪除</a>";*/
            echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a> <a href=delete.php?bid={$row[bid]}>刪除</a>";
            echo "</td><td>";
            echo $row[bid];
            echo "</td><td>";
            echo $row[type];
            echo "</td><td>"; 
            echo $row[title];
            echo "</td><td>";
            echo $row[content]; 
            echo "</td><td>";
            echo $row[time];
            echo "</td></tr>";
    }
        echo "</table>";
    }
?>
