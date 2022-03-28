<?php
require_once('funcs.php'); //require_onceで呼び出して使えるようにする

$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_camlist_table"); //myadwinで取得用に書いたやつと一緒
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC) ){  //$resultの中に取得した情報が1行1行入っていく
      $view .= '<div class="flex1">';
      $view .= '<div class="your_campaign">';
      $view .= '<div class="gazou">';
      $view .= h($result['cam_gazou']);
      $view .= '</div>';
      $view .= '<div class="nakami">';
      $view .= '<div class="atesaki">';
      $view .= "宛先：";
      $view .= h($result['cam_to']);
      $view .= '</div><br>';
      $view .= '<a href="campaign_list_detail.php?id=' . $result['id'] . ' class="title" class="title">';
      $view .= h($result['cam_title']);
      $view .= '</div><br>';
    // $view .= '<!-- <div class="my_name">'
    // $view .= 山崎賢人
    // $view .= '</div><br> -->'
    $view .= '</div>';
    $view .= '</div>';
    $view .= '</div>';

  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mypage.css">
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

    <h1 class="name">山田孝之</h1>
    <button class="hennsyuu">プロフィールを編集</button>

        <div>
            <a href="campaign.php"></a>
            <?= $view ?>
        </div>
        </div>

        <!-- 確認用 -->
        <!-- <div class="flex1">
            <div class="your_campaign">
                <div><img class="gazou" src="https://eiga.k-img.com/images/person/88484/cd1db3243f6427a1/320.jpg?1603327760" alt=""></div>
                <div class="nakami">
                    <div class="atesaki">宛先：松竹芸能</div><br>
                    <div class="title">タイトル</div><br>
                    <div class="my_name">山崎賢人</div><br> -->
                </div>
            </div>
        </div>

    <div class="yohaku"></div>


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