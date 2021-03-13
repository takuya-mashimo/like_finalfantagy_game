<?php

// echo "処理のはじまりはじまり〜！\n\n";

//ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');


//インスタンス化
$tiida = new Human();
$goblin = new Enemy();

$tiida->name = "ティーダ";
$goblin->name = "ゴブリン";

echo $tiida->name . "\n";
echo $goblin->name . "\n";

//インスタンス化をするときはnew [クラス名]
//Humanクラスをインスタンス化→new Human()
//Humanクラスのインスタンスを$tiidaに代入
//イメージはHumanクラスのコピーが$tiidaに入るイメージ

//$tiidaにはHumanクラスにあるプロパティとメソッドを参照できる
//$tiidaにティーダ・$goblinにゴブリンと名前をつけた。
