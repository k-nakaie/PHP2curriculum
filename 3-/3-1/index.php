<?php
    class Enemy {
        public $name;
        public $stamina;
        public $attack;

        public function __construct($name,$stamina = 100,$attack = 10){
            $this->name = $name;
            $this->stamina = $stamina;
            $this->attack = $attack;
        }

        public function sayMyName(){
            echo $this->name.'があらわれた！';
        }

        public function powerUp(){
            $this->attack +=10;
            echo '攻撃力が'.$this->attack.'になった。</br>';
        }
    }

    //Enemyクラスからスライムを作る
    $slime = new Enemy('スライム');
    $slime->sayMyName();
    echo $slime->stamina;
    echo $slime->attack;
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();
    $slime->powerUp();

    echo '<br>';

    $kuribo = new Enemy('クリボー',200,50);
    echo $kuribo->stamina;
    echo $kuribo->attack;

    class Boss extends Enemy {
        public function specialAttack(){
            echo 'すごい強い一撃！';
        }

        public function sayMyName(){
            echo 'ボスの'.$this->name.'があらわれた！';
        }
    }

    $boss = new Boss('竜王');
    $boss->sayMyName();
    $boss->specialAttack();


?>
