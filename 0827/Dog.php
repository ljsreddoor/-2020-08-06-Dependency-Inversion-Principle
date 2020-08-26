<?php

/**
 * Class DogV2
 *
 * @package App\Http\Controllers
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:36
 */
abstract class Dog
{
    /**
     * 吃
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
     * @param \Action $Action
     *
     * @Author  : a0204
     * @DateTime: 2020/8/26 下午 09:18
     */
    public function Action(Action $Action)
    {
        $Action->do();
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
 * 杜賓狗
 * Class Doberman
 *
 * @Author  : a0204
 * @DateTime: 2020/8/26 下午 08:27
 */
class Doberman extends Dog{
}

/**
 * 吉娃娃
 * Class Doberman
 *
 * @Author  : a0204
 * @DateTime: 2020/8/26 下午 08:27
 */
class Chihuahua extends Dog{
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
 * 動作
 * Interface Action
 *
 * @Author  : a0204
 * @DateTime: 2020/8/26 下午 09:16
 */
interface Action
{
    public function do();
}

/**
 * 坐下
 * Class SitDown
 *
 * @Author  : a0204
 * @DateTime: 2020/8/26 下午 09:17
 */
class SitDown implements Action
{
    public function do()
    {
        echo '坐下';
    }
}

class LieDown implements Action
{
    public function do()
    {
        echo '躺下';
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
 * Class Black
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class White implements Color
{
    public function setColor()
    {
        echo '設定為白色';
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

/**
 * Class LongFoot
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class LongFoot implements Foot
{
    public function setFootLength()
    {
        echo '長腿';
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
//黑色
$Black = new Black();
//白色
$White = new White();
//快速
$FastSpeed = new FastSpeed();
//慢速
$SlowSpeed = new SlowSpeed();
//短腳
$ShortFoot = new ShortFoot();
//長腳
$LongFoot = new LongFoot();
//坐下
$SitDown = new SitDown();
//躺下
$LieDown = new LieDown();
//杜賓狗
$Doberman = new Doberman();
//吉娃娃
$Chihuahua = new Chihuahua();

//貴賓狗
$Doberman->eat($Pork);
echo('<br>');
$Doberman->setColor($Black);
echo('<br>');
$Doberman->setRunSpeed($FastSpeed);
echo('<br>');
$Doberman->setFootLength($LongFoot);
echo('<br>');
$Doberman->setFootColor($ShortFoot,$Black);
echo('<br>');
$Doberman->Action($LieDown);
echo('<br>');
echo('----------------------');
echo('<br>');
//吉娃娃
$Chihuahua->eat($Feed);
echo('<br>');
$Chihuahua->setColor($White);
echo('<br>');
$Chihuahua->setRunSpeed($SlowSpeed);
echo('<br>');
$Chihuahua->setFootLength($ShortFoot);
echo('<br>');
$Chihuahua->Action($SitDown);