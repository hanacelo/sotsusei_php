<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="./css/campaign.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="top_page.php"><img class="logo" src="https://asobo-design.com/nex/wp-content/uploads/2018/08/fd743c1393f461d62b339bb2f0a5f248.jpeg" alt=""></a>
        <a href="campaign.php" class="head">キャンペーンを立ち上げる</a>
        <a href="mypage.php" class="head">マイページ</a>
        <a href="campaign_list.php" class="head">キャンペーン一覧</a>
        <a href="login.php" class="head">ログイン</a>
    </header>

    <form method="post" action="insert.php">
        <div class="big">
            <h1 class="setsumei">キャンペーンのタイトルを入力してください</h1>
            <h2 class="setsumei2">あなたが「変えたい」と思うことをわかりやすく伝えましょう。</h2>
            <div class="form"><input type="text" name="cam_title"></div>
        </div>

        <div class="big">
            <h1 class="setsumei">あなたが知ってほしい思いや、エピソードを入力してください</h1>
            <h2 class="setsumei2">解決したい問題や、なぜそれがあなたにとって大事なのかを説明しましょう。</h2>
            <div class="form"><input type="text" name="cam_episode"></div>
        </div>

        <div class="big">
            <h1 class="setsumei">画像をアップロードしてください</h1>
            <h2 class="setsumei2">写真のあるキャンペーンの方が集客できます</h2>
            <div class="form"><input type="file" accept=".png, .jpg, .jpeg" name="cam_gazou"></div>
        </div>

        <div class="big">
            <h1 class="setsumei">宛先</h1>
            <h2 class="setsumei2">どの団体に提出しますか。入力してください</h2>
            <div class="form"><input type="text" name="cam_to"></div>
        </div>

        <input type="submit" value="キャンペーンを作成する" class="button">

        <div class="big"></div>

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