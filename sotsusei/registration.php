<?php




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registration.css">
    <title>アカウント登録</title>
</head>
<body>
    <header>
        <a href="top_page.php"><img class="logo" src="https://asobo-design.com/nex/wp-content/uploads/2018/08/fd743c1393f461d62b339bb2f0a5f248.jpeg" alt=""></a>
        <a href="campaign.php" class="head">キャンペーンを立ち上げる</a>
        <a href="mypage.php" class="head">マイページ</a>
        <a href="campaign_list.php" class="head">キャンペーン一覧</a>
        <a href="login.php" class="head">ログイン</a>
    </header>

    <h1>アカウント登録</h1>
    <form name="form1" action="login_act.php" method="post">
        &emsp; &emsp;  &thinsp; &thinsp; &thinsp; &thinsp; 氏名：<input class="name" type="text" placeholder="山田　花子"><br>
        メールアドレス：<input class="mail" type="text" placeholder="example@mail.com"><br>
        &emsp; &emsp; &emsp; &emsp; &ensp;ID：<input class="id" type="text" name="id" placeholder="ID"/><br>
        &emsp; &thinsp; パスワード：<input class="pw" type="password" name="pw" placeholder="８文字以上で入力してください"/><br>
        <input class="button" type="submit" value="LOGIN" />
    </form>


    <footer>
        <div class="foot">Change.orgについて<br>
            <p>Change.orgについて</p><br>
            <p>インパクト</p><br>
            <p>求人募集</p><br>
            <p>スタッフ</p><br>
        </div>

        <div class="foot">コミュニティについて<br>
            <p>日本チームからのお知らせ</p><br>
            <p>プレスルーム</p><br>
        </div>

        <div class="foot">サポート<br>
            <p>お問い合わせ</p><br>
            <p>キャンペーンガイド</p><br>
            <p>プライバシー</p><br>
            <p>ポリシー</p><br>
            <p>クッキー</p><br>
        </div>

        <div class="foot">フォローする<br>
            <p>twitter</p><br>
            <p>Facebook</p><br>
            <p>Instagram</p><br>
        </div>
    </footer>
        
</body>
</html>