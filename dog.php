<?php

/**
 * Class dog
 *
 * @package App\Http\Controllers
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:36
 */
class dog
{
    /**
     * 吃東西
     * @param \eat $eat
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:39
     */
    public function eat(eat $eat)
    {
        $eat->eat();
    }

    /**
     * 顏色
     * @param \color $color
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:39
     */
    public function color(color $color)
    {
        $color->color();
    }

    /**
     * 跑步
     * @param \run $run
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:40
     */
    public function run(run $run)
    {
        $run->run();
    }

    /**
     * 腳長
     * @param \foot $foot
     *
     * @Author  : ljs
     * @DateTime: 2020/8/12 下午 10:40
     */
    public function foot(foot $foot)
    {
        $foot->foot();
    }

}

/**
 * Interface eat
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface eat
{
    public function eat();
}

/**
 * Class pork
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class pork implements eat
{
    public function eat(){
        echo '吃豬肉';
    }
}

/**
 * Class feed
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class feed implements eat
{
    public function eat(){
        echo '吃飼料';
    }
}

/**
 * Interface color
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface color
{
    public function color();
}

/**
 * Class black
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class black implements color
{
    public function color(){
        echo '黑色';
    }
}

/**
 * Interface run
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface run
{
    public function run();
}

/**
 * Class fast
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class fast implements run
{
    public function run(){
        echo '快跑';
    }
}

/**
 * Interface foot
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
interface foot
{
    public function foot();
}

/**
 * Class short
 *
 * @Author  : ljs
 * @DateTime: 2020/8/12 下午 10:40
 */
class short implements foot
{
    public function foot(){
        echo '短腿';
    }
}
