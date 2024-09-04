<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>16章課題</title>
</head>

<body>
  <p>
  <?php
    // Foodクラスの定義
    class Food {
      // プロパティの定義
      private $name;
      private $price;

      // メソッド作成
      public function show_price() {
        echo $this->price;
      }

      // コンストラクタ作成
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animalクラスの定義
    class Animal {
      // プロパティの定義
      private $name;
      private $height;
      private $weight;

      // メソッド作成
      public function show_height() {
        echo $this->height;
      }

      // コンストラクタ作成
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // Food インスタンス作成
    $food = new Food("potato", 250);

    // Animal インスタンス作成
    $animal = new Animal("dog", 60, 5000);

    // インスタンス出力
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドにアクセス
    $food->show_price();
    echo "<br>";
    $animal->show_height();

  ?>

  </p>
</body>

</html>