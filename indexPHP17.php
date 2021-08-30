<!DOCTYPE html>
<html lang = "ja">

<head>
    <meta charset = "UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel = "stylesheet" type = "text/css" href = "stylePHP17.css">

</head>
<body>
    <?php


    mb_internal_encoding("utf8");
    $pdo =new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt =$pdo->query("select * from 4each_keijiban");

    ?>

    <img src ="4eachblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    
    </header>
    <main>
        <div class ="left_side">
            <h1>プログラミングに役立つ掲示板</h1>

            <form method ="POST" action ="insertPHP17.php">
                <h3>入力フォーム</h3>

                <div>
                    <label>ハンドルネーム</labal>
                    <br>
                    <input type ="text" name ="handlename" size ="60">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type ="text" name ="title" size ="60">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea name ="comments" cols ="100" rows ="10"></textarea> 
                </div>
                <div>
                    <input type ="submit" value ="投稿する"> 
                </div>

            </form>
           <?php

           while($row =$stmt->fetch()){
           
           echo "<div class ='kiji'>";
           echo "<h3>".$row['title']."</h3>";
           echo "<div class ='contents'>";
           echo $row['comments'];
           echo "<div class ='handlename'>posted by".$row['handlename']."</div>";     
           echo "</div>";
           echo "</div>";
           }

           ?>

        </div>

        <div class ="right_side">
            <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>

            <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

            <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
        </div>
    
    </main>
    <footer>
       copyright(c)internous|4each blog the which provides A to Z about programming
    </footer>
    
</body>

</html>