<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書誌情報登録(1/2)</title>
</head>
<body>
  <h2>書誌情報登録(1/2)</h2>
  <form method="POST" action="./binput2.php"enctype="multipart/form-data">
    <table border="0">
      <tr><td>書名</td><td>:<input type="text" name="btitle" placeholder="図書館戦争" size="30"</td></tr>
      <tr><td>著者名</td><td>:<input type="text" name="bauthor" placeholder="有川浩" size="30"</td></tr>
      <tr><td>出版者</td><td>:<input type="text" name="bpublisher" size="30"</td></tr>
      <tr><td>出版日</td><td>:<input type="text" name="bpubdate" size="30"</td></tr>
      <tr><td>ISBN</td><td>:<input type="text" name="bisbn" size="30"</td></tr>
      <tr><td>書影URL</td><td>:<input type="text" name="bcover" size="30"</td></tr>
      <tr><td>備考</td><td>:<input type="text" name="bmemo" size="30"</td></tr>
</table>
<input type="submit" value="追加" />
</form>
</body>
</html>
