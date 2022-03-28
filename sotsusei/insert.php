<?php

require_once('funcs.php');

//1. POSTデータ取得
$cam_title = $_POST['cam_title'];
$cam_episode = $_POST['cam_episode'];
$cam_gazou = $_POST['cam_gazou'];
$cam_to = $_POST['cam_to'];


$pdo = db_conn();


//３．データ登録SQL作成

// 1. SQL文を用意
//INSERT＝記録する
//いきなりSQLの中に誰が書いたかわかんない物を入れるのは憚れるので、:nameなど:変数で置いている？らしい
$stmt = $pdo->prepare("INSERT INTO gs_camlist_table(id, cam_title, cam_episode, cam_gazou, cam_to)VALUES(NULL, :cam_title, :cam_episode, :cam_gazou, :cam_to)");

//  2. バインド変数を用意
$stmt->bindValue(':cam_title', $cam_title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':cam_episode', $cam_episode, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':cam_gazou', $cam_gazou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':cam_to', $cam_to, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)


//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status == false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: top_page.php');
  echo "登録完了！";
}
?>