<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>管理者メニュー</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 管理者画面 -->
<div class="card">
    <h2>管理者メニュー</h2>
    <div class="status-box">
        <div class="status safe">社員一覧</div>
        <div class="status warning">社員登録</div>
        <div class="status danger">安否一覧</div>
    </div>
</div>

<div class="card">
    <h2>社員一覧</h2>
    <table class="table">
        <tr>
            <th>社員ID</th>
            <th>名前</th>
            <th>部署</th>
            <th>メールアドレス</th>
            <th>操作</th>
        </tr>
        <tr>
            <td>TIT001</td>
            <td>山田 太郎</td>
            <td>IT部</td>
            <td>taro@example.com</td>
            <td><button>編集</button></td>
        </tr>
        <tr>
            <td>TIT002</td>
            <td>佐藤 花子</td>
            <td>HR部</td>
            <td>hanako@example.com</td>
            <td><button>編集</button></td>
        </tr>
    </table>
</div>

<div class="card">
    <h2>社員登録</h2>
    <form action="employee_save.php" method="POST">
        <div class="form-group">
            <label>社員ID</label>
            <input type="text" name="employee_id" required>
        </div>

        <div class="form-group">
            <label>名前</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>部署</label>
            <select name="department" required>
                <option value="">選択してください</option>
                <option>IT部</option>
                <option>HR部</option>
                <option>総務部</option>
            </select>
        </div>

        <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" name="email" required>
        </div>

        <button type="submit">登録する</button>
    </form>
</div>

</body>
</html>
