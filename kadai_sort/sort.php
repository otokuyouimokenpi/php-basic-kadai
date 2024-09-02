<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    function sort_2way(&$array, $order) {
      if ($order) {
        // 昇順ソート
        sort($array);
        echo "昇順にソートします。<br>";
      } else {
        // 降順ソート
        rsort($array);
        echo "降順にソートします。<br>";
      }

      foreach ($array as $value) {
        echo $value . "<br>";
      }
    }

    // ソート対象の配列
    $nums = [15, 4, 18, 23, 10];

    // 昇順ソート
    sort_2way($nums, TRUE);

    // 降順ソート
    sort_2way($nums, FALSE);
    ?>
    </p>
</body>

</html>