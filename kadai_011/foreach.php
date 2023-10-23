<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>課題１１章</title>
</head>

<body>
  <p>
    <?php
    $stock = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach($stock as $key => $value) {
      echo "{$key} : {$value}";
      echo '<br>';
    }
    ?>
  </p>

</body>