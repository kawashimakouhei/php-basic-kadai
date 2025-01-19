<?php

class Food
{
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // 各プロパティの値を取得するメソッド
    public function show_price()
    {
        echo $this->price.'<br>';
    }
}

class Animal
{
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // 各プロパティの値を取得するメソッド
    public function show_height()
    {
        echo $this->height.'<br>';
    }
}

$curry = new Food (
    'カレー', 
    1000,
);

$tiger = new Animal (
    '虎', 
    50,
    90
);

print_r($curry);
print_r($tiger);

$curry->show_price();
$tiger->show_height();

?>