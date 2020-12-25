<?php
    //新增佈告欄
    echo"
    <h1>新增佈告</h1>
    <form method=post action=bulletin_add.php>
    佈告標題：<input type=text name=title size=200><p>
    佈告內容：<p><textarea clos=100 rows=20 name=content></textarea><p>
    佈告類型：<input type=radio name=type value=1 checked>系上公告
    <input type=radio name=type value=2>招生訊息
    <input type=radio name=type value=3>企業徵才
    <p>
    發佈時間：<input type=date name=time><p>
    <input type=submit value=發佈公告>
    </form>"
    /*註解
    「<h1>」為htm的寫法「h1-h7」由大到小排列
    <h1>新增佈告</h1>

    點擊「發佈公告」後跳至「bulletin_add.php」
    <form method=post action=bulletin_add.php>
    
    產生出一個欄位200px
    佈告標題：<input type=text name=title size=200><p>
    
    產生出單選選單預設打勾為「系上公告」
    佈告類型：<input type=radio name=type value=1 checked>系上公告*/ 
?>