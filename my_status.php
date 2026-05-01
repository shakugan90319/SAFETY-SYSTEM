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

$sql = "SELECT employee_id, status, comment ,report_time FROM safety_reports";
$result =$conn->query($sql);




?>











<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>自分の安否一覧</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
     <div class="card">
        <h2>自分の安否一覧</h2>
<?php
        echo "<table><tr><th>ID</th><th>status</th><th>comment</th><th>time</th></tr>";
while($row = $result->fetch(PDO::FETCH_ASSOC))  {
    echo "<tr>";
    echo "<td>" . $row["employee_id"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "<td>" . $row["comment"] . "</td>";
    echo "<td>" . $row["report_time"] . "</td>";

    echo "</tr>";
}
echo "</table>";
?>
    </div>
  
     <a href="dashboard.php">戻る</a>
</div>
</main>
</body>
</html>