<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>GETでデータを送信する</h1>
    <p>お名前を入力して下さい</p>
    <form action="get_receive.php" method="GET">
      <label>お名前</label>
      <input type="text" name="name">
      <label>趣味</label>
      <input type="text" name="hobby">
      <input type="submit" value="送信する">
    </form>
  </body>
</html>