<?php

//継承する時の書き方
class Brave extends Human
{
    const MAX_HITPOINT = 120;
    public $hitPoint = self::MAX_HITPOINT;
    public $attackPoint = 30;

    
    public function doAttack($enemy)
    {
        //乱数を発生（ランダムにスキルを発動）
        if (rand(1,3) === 1){
            echo "『" . $this->name . "』のスキルが発動した！\n";
            echo "『ぜんりょくぎり』!!\n";
            echo $enemy->name . "に" . $this->attackPoint * 1.5 . "のダメージ!\n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        }else {
            parent::doAttack($enemy);
        }
        return true;
    }
}

//型と値が等しい時[===]はtrueとなる
//selfとparentとstaticがクラス定義の内部からプロパティ・メソッドにアクセス可能
//このコードのように継承先でメソッドを上書きしても継承元クラスのメソッドを呼ぶことができる
