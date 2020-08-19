<?php

/**
 * Class DogV2
 *
 * @package App\Http\Controllers
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:36
 */
class DogV2
{
    /**
     * 吃東西
     * @param \Food $Food
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:39
     */
    public function eat(Food $Food)
    {
        $Food->eat();
    }

    /**
     * 顏色
     * @param \Color $Color
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:39
     */
    public function setColor(Color $Color)
    {
        $Color->setColor();
    }

    /**
     * 設定跑速
     * @param \RunSpeed $RunSpeed
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:40
     */
    public function setRunSpeed(RunSpeed $RunSpeed)
    {
        $RunSpeed->setRunSpeed();
    }

    /**
     * 設定腳長
     * @param \Foot $Foot
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:40
     */
    public function setFootLength(Foot $Foot)
    {
        $Foot->setFootLength();
    }

    /**
     * @param \App\Http\Controllers\Foot  $Foot
     * @param \App\Http\Controllers\Color $Color
     *
     * @Author  : a0204
     * @DateTime: 2020/8/19 下午 10:02
     */
    public function setFootColor(Foot $Foot,Color $Color){

        $Foot->setFootColor($Color);
    }

}

/**
 * Interface eat
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface Food
{
    public function eat();
}

/**
 * Class Pork
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class Pork implements Food
{
    public function eat()
    {
        echo '吃豬肉';
    }
}

/**
 * Class Feed
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class Feed implements Food
{
    public function eat()
    {
        echo '吃飼料';
    }
}

/**
 * Interface color
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface Color
{
    public function setColor();
}

/**
 * Class Black
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class Black implements Color
{
    public function setColor()
    {
        echo '設定為黑色';
    }
}

/**
 * Interface run
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface RunSpeed
{
    public function setRunSpeed();
}

/**
 * 快速
 * Class FastSpeed
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class FastSpeed implements RunSpeed
{
    public function setRunSpeed()
    {
        echo '快跑';
    }
}

/**
 * 慢速
 * Class SlowSpeed
 *
 * @Author  : a0204
 * @DateTime: 2020/8/19 下午 09:39
 */
class SlowSpeed implements RunSpeed
{
    public function setRunSpeed()
    {
        echo '慢跑';
    }
}

/**
 * Interface Foot
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface Foot
{
    //設定腳長
    public function setFootLength();
    //設定腳顏色
    public function setFootColor(Color $Color);
}

/**
 * Class ShortFoot
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class ShortFoot implements Foot
{
    public function setFootLength()
    {
        echo '短腿';
    }

    public function setFootColor(Color $Color)
    {
        echo $Color->setColor();
    }
}

//豬肉
$Pork = new Pork();
//飼料
$Feed = new Feed();
//顏色
$Black = new Black();
//快速
$FastSpeed = new FastSpeed();
//慢速
$SlowSpeed = new SlowSpeed();
//腳
$ShortFoot = new ShortFoot();
//狗
$DogV2 = new DogV2();

$DogV2->eat($Pork);
echo('<br>');
$DogV2->eat($Feed);
echo('<br>');
$DogV2->setColor($Black);
echo('<br>');
$DogV2->setRunSpeed($FastSpeed);
echo('<br>');
$DogV2->setRunSpeed($SlowSpeed);
echo('<br>');
$DogV2->setFootLength($ShortFoot);
echo('<br>');
$DogV2->setFootColor($ShortFoot,$Black);
