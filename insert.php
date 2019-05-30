<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

// index.phpから送られてきたデータを変数で受け取る
$bookname = $_POST["bookname"];
$author = $_POST["author"];
$bookcategory = $_POST["bookcategory"];
$bookurl = $_POST["bookurl"];
$finishdate = $_POST["finishdate"];
$bookcomment = $_POST["bookcomment"];
$rating = $_POST["rating"];


//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db_2;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// $name = $name;
// $email = $email;
// $naiyou = $naiyou;
// exit();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, bookname, author, bookcategory, bookurl, finishdate, bookcomment, rating, indate )VALUES(NULL, :bookname, :author, :bookcategory, :bookurl, :finishdate, :bookcomment, :rating, sysdate())");
$stmt->bindValue(':bookname', $bookname,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)rating
$stmt->bindValue(':author', $author,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookcategory', $bookcategory,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookurl', $bookurl, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':finishdate', $finishdate, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookcomment', $bookcomment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':rating', $rating, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
//５．index.phpへリダイレクト　この処理がないと画面が切り替わらない
 header("Location: select.php");
 exit;
}
?>


