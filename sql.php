<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
 <?php
    require "conn.php";//db接続
    $records=$db->query("select * from list");//recordsにすべてのレコードが代入される
  ?>
</head>
<body>
  <?php
    while($record=$records->fetch()){//各データを取り出して、false()になるまでrecordに代入
      print($record["name"]);?><br><?php
    }
    $db=null;
  ?>
</body>
</html>
