<?php
    #連動資料庫(xampp(軟體)>admin)
    
    error_reporting(0);#把警告訊息關掉

    
    #如果沒有架設「資料庫」的情況下可以擇「MySQL」當練習的不錯選擇
    #「#conn」、「$result」、「$result」宣告物件承裝「等號」後面的資料

    #Php&MySQL連動，三步驟
    #1.MySQL_connect，需設定IP(本地端localhost)、帳號、密碼及連動的資料庫
    $conn = mysqli_connect("localhost","root","","mydb");

    #2.MySQL_query從表格找user挑選出資料
    $result = mysqli_query($conn,"select * from user");

    #3.MySQL_fetch_array從$擷取單筆資料
    #每fetch一次抓一次資料
    #echo呼叫(似Console.WriteLine)
    $row = mysqli_fetch_array($result);
    echo $row[id]." ".$row[pwd];

    echo "<br>";

    $row = mysqli_fetch_array($result);
    #「.」在寫網頁時為「加」號的意思，似「Console.WritLine("A" + " " + "B")」輸出「A B」
    echo $row[id]." ".$row[pwd];
?>