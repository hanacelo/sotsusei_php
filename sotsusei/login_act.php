<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

$lid = $_POST['id'];
$lpw = $_POST['pw'];

//DB接続します
require_once('funcs.php');
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM login_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
// $stmt->bindValue(':pw', $pw, PDO::PARAM_STR);
$status = $stmt->execute();

//SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//抽出データ数を取得
$val = $stmt->fetch();

if($val['id'] != '' && password_verify($pw,$val['pw'])){
    //login成功時
    $_SESSION['chk_ssid'] = session_id(); 
    $_SESSION['kanri_flg'] = $val['kanri_flg']; 
    $_SESSION['name'] = $val['name'];
    header('Location: top_page.php');
}else{
    //login失敗時
    echo "失敗！";
    // header('Location: login.php');
};

exit();