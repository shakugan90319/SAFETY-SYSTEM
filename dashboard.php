<?php
// ログイン済みだった場合にしようする
//session_start();

// 仮データ
    $employee_id="TIT001";


// データベース接続

try {
    $conn = new PDO(
    "mysql:host=localhost;dbname=safety_system;charset=utf8",
   "root", "root");

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    echo($e);
}

// データベースに情報を渡す（POST）
if($_SERVER["REQUEST_METHOD"] === "POST"){
// 現在の日付
$now=date("Y-m-d H:i:s");
$stmt=$conn->prepare("INSERT INTO safety_reports(employee_id, status, comment, report_time) VALUES(?,?,?,?)");
$stmt->execute([
     $employee_id,
      $_POST["status"],
       $_POST["comment"],
       $now

]);

}


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>安否報告</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    </header>
    
    <main>

    <div class="card">
        <h2>安否報告</h2>
<form action="dashboard.php" method="POST">



        <div class="status-box">
            <div class="status safe">
                無事
                <input type="radio" name="status" values="safe"   >

            </div>
            <div class="status warning">怪我
                <input type="radio" name="status" values="injury"   >
            </div>
            <div class="status danger">危険
                <input type="radio" name="status" values="danger"   >
            </div>
        </div>

        <div class="form-group">
            <label>コメント（任意）</label>
          <input type="text" name="comment" id="comment"  placeholder="" >
              </div><!-- .col -->
            <!-- <textarea rows="4"></textarea> -->
        </div>



    <button type="submit">送信する</button>
</form>
        <!-- <button >送信する</button> -->
    </div>







<!-- <div class="card">
    <h2>安否報告</h2>
    <a href="my_status.php">自分の安否一覧</a><br><br>
    <a href="admin_menu.php">管理者画面へ</a>
</div> -->
</main>
</body>
</html>