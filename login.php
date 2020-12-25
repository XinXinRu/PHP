<?php
    //此程式碼抓取「20201127」所撰寫的程式

    //將錯誤顯示關閉，若想要顯示則撰寫成此「error_reporting();」
    error_reporting(0);

    $conn = mysqli_connect("localhost","root","","mydb");

    $result = mysqli_query($conn,"select * from user");

    /*預先設置「login」為「false」重複判斷帳號密碼是否有輸入正確
      正確則將「login」轉為「true」 */
    $login = false;
    while($row = mysqli_fetch_array($result))
    {
        if($_POST["id"]==$row["id"] && $_POST["pwd"]==$row["pwd"])
        $login = true;
    }
    if($login == true) {
        //echo "歡迎登入";
        //隱藏帳號
        session_start();
        $_SESSION["id"] = $_POST["id"];
        //更新頁面並且跳轉到「bulletin.php」
        echo "<meta http-equiv = 'refresh' content='0;url=bulletin.php'>";
    }
    else {
        echo "帳號或密碼錯誤請重新嘗試";
        
        /*HTML meta 標籤可以用來提供網頁內容的資訊給瀏覽器或是搜尋引擎
        每個 meta 使用 name 的時候，都會搭配 content 來呈現資訊內容
        簡單來說，name 代表資訊項目，content 代表資訊值*/
        #「http-equive」更新頁面的方式為「refresh」刷新(類似重新整理)
        #「content='3; url=login.html'」頁面滯留「3秒」，歸零時跳轉到「login.html」網址
        echo "<meta http-equiv= 'refresh' content='3; url=login.html'>";
    }
?>