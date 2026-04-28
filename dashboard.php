<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>安否報告</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
        <h2>安否報告</h2>

        <div class="status-box">
            <div class="status safe">無事</div>
            <div class="status warning">怪我</div>
            <div class="status danger">危険</div>
        </div>

        <div class="form-group">
            <label>コメント（任意）</label>
            <textarea rows="4"></textarea>
        </div>
<form action="my_status.php" method="POST">
    <button type="submit">送信する</button>
</form>
        <!-- <button >送信する</button> -->
    </div>







<!-- <div class="card">
    <h2>安否報告</h2>
    <a href="my_status.php">自分の安否一覧</a><br><br>
    <a href="admin_menu.php">管理者画面へ</a>
</div> -->
</body>
</html>