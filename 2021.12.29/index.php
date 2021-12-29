<?php
// Sukukite ArrayHelper klasę su 2 statiniais metodais, kurie galetų apskaičiuoti duoto masyvo sumą arba vidurkį.
// Panaudokite vieną statinį metodą kitame.


class ArrayHelper 
{
    public static $arr = [7, 9, 24, 19];

    public static function Sum() {
        $sum = array_sum(self::$arr);
        return $sum;
    }

    public static function Avg() {
        $avg = self::Sum() / count(self::$arr);
        return $avg;
    }
}

var_dump(ArrayHelper::Sum());

var_dump(ArrayHelper::Avg());