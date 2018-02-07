<?php
/**
 * Created by PhpStorm.
 * User: lilong
 * Date: 2018/2/7
 * Time: 14:18
 */

namespace utils;


class bonusCalculator
{
    public static function getRandomMoney(&$remainMoney, &$remainSize)
    {
		if($remainSize == 1) {
			$remainSize--;
			return round($remainMoney * 100) / 100;
		}
		
		$r = rand(0,1);
		$min = 0.01;
		$max = $remainMoney / $remainSize * 2;
		$money = $r * $max;
		$money = $money <= $min ? 0.01 : $money;
		$money = floor($money * 100) / 100;
		$remainSize--;
		$remainMoney -= $money;
		return $money;
    }
	
	public static function getArray($sumMoney, $n)
	{
		$result = [];

		while($n > 0){
			$result[] = self::getRandomMoney($sumMoney, $n);
		}
		
		return $result;
	}
}

var_dump(bonusCalculator::getArray(100, 20));