<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once('funcs.php'); //require_onceで呼び出して使えるようにする

$pdo = db_conn();

//２．データ取得SQL作成
// -> classというらしい
$stmt = $pdo->prepare("SELECT * FROM gs_camlist_table ");
$status = $stmt->execute();  


//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  while( $result = $stmt->fetchAll(PDO::FETCH_ASSOC) ){  //$resultの中に取得した情報が1行1行入っていく
    $view .= '<h1 class="title">';
    $view .= ($result['cam_title']);
    $view .= '</h1>';
  }

  }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="./css/campaign_top_media.css">
    <title>cam_list_detail</title>
</head>
<body>
    <header>
        <a href="top_page.php"><img class="logo" src="https://asobo-design.com/nex/wp-content/uploads/2018/08/fd743c1393f461d62b339bb2f0a5f248.jpeg" alt=""></a>
        <a href="campaign.php" class="head">キャンペーンを立ち上げる</a>
        <a href="mypage.php" class="head">マイページ</a>
        <a href="campaign_list.php" class="head">キャンペーン一覧</a>
        <a href="login.php" class="head">ログイン</a>
    </header>


    <h1 class="title"><?= $view ?></h1>
    <div class="flex_box">
        <!-- ここは左側 -->
        <div class="flex1">
            <div><?= $view ?></div>
            <div class="hassinsya">発信者名：山田孝之</div>
            <div class="atesaki">宛先：東京都世田谷区</div>
            <h3 class="naiyou"></h3>

            <h2>賛同者からのコメント</h2>
            <div class="comment">
                <div class="flex">
                    <div class="gazou">画像</div>
                    <div class="user_name">ユーザーネーム</div>
                </div>
                <div class="comment_naiyou">コメント内容</div>
            </div>
            <div class="comment">
                <div class="flex">
                    <div class="gazou">画像</div>
                    <div class="user_name">ユーザーネーム</div>
                </div>
                <div class="comment_naiyou">コメント内容</div>
            </div>
            <button class="motto">もっと見る</button>
            <div class="yohaku"></div>
        </div>

        <!-- ここから右側 -->
        <div class="flex2">
            <div class="kahi">キャンペーン成功！</div>
            <div class="ninzuu">2500人の賛同者によって成功に導かれました！</div>
            <button class="fb">フェイスブックでシェア</button><br>
            <button class="twitter">twitterでシェア</button><br>
            <button class="LINE">LINEでシェア</button><br>
            <button class="mail">メールでシェア</button><br>
        </div>
    </div>
    
    


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