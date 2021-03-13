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

//tiidaとgoblinのHPが0になるまで繰り返す。
while ($tiida->hitPoint > 0 && $goblin->hitPoint > 0) {

    echo $tiida->name . ":" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
    echo $goblin->name . ":" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";
    echo "\n";

    $tiida->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($tiida);
    echo "\n";

}

echo "★ ★ ★ 戦闘終了 ★ ★ ★\n\n";
echo $tiida->name . ":" . $tiida->hitPoint . "/" . $tiida::MAX_HITPOINT . "\n";
echo $goblin->name . ":" . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";

// インスタンス化をするときはnew [クラス名]
// Humanクラスをインスタンス化→new Human()
// Humanクラスのインスタンスを$tiidaに代入
// イメージはHumanクラスのコピーが$tiidaに入るイメージ

// $tiidaにはHumanクラスにあるプロパティとメソッドを参照できる
// $tiidaにティーダ・$goblinにゴブリンと名前をつけた。
// MAX_HITPOINTはconstで定義→オブジェクト定数は::で参照する。
// $tiida->doAttack($goblin);について(メソッドにお互いのインスタンスを渡す)
// HumanクラスのdoAttackメソッドの引数には$goblinが入る。$goblinはEnemyクラスのインスタンス→nameプロパティ・tookDamageメソッドを持つ
// tookDamageメソッドの引数に、attackPointが入る。→主人公からゴブリンに攻撃力分のダメージが入る
