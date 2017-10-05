<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
          <label>名前：<input type="text" name="name"></label><br>
          <label>lid：<input type="text" name="lid"></label><br>
          <label>lpw：<input type="text" name="lpw"></label><br>
          <p>管理者権限：</p>
          <select size="2" name="kanri_flg">
              <option value="normal">0:管理者</option>
              <option value="super">1:スーパー管理者</option>
              </select><br>
          <p>使用状況：</p>
          <select size="2" name="life_flg">
              <option value="using">0:使用中</option>
              <option value="not_using">1:使用しなくなった</option>
          </select><br>
<!--          <label>管理：<input type="text" name="kanri_flg"></label><br>-->
<!--          <label>life：<input type="text" name="life_flg"></label><br>-->
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
