<?php
    #連動資料庫(xampp(軟體)>admin)
    
    error_reporting(0);#把警告訊息關掉

    #Php&MySQL連動，三步驟
    #1.MySQL_connect，需設定IP(本地端localhost)、帳號、密碼及連動的資料庫
    $conn = mysqli_connect("localhost","root","","mydb");

    #2.MySQL_query從表格找user找出資料
    $result = mysqli_query($conn,"select * from user");

    #3.MySQL_fetch_array從$擷取單筆資料
    #每fetch一次抓一次資料
    #echo呼叫(似Console.WriteLine)
    #運用while迴圈來重複跑出迴圈(節省空間)
    #如果「$row」有資料的話則印出來
    #沒有資料則跳出迴圈
    while($row = mysqli_fetch_array($result))
    {

        echo $row[id]." ".$row[pwd];

    }
?>