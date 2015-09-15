<?php
namespace liw\captcha;

class Captcha
{
    static private $issues = [
        1 => ["ночь"  , "уголь" , "шахтер", "темнота", "неученье", "негр", "зола"],
        2 => ["ученье", "лебедь", "снег",   "зима", "вьюга"],
        3 => ["весна" , "трава" , "сопля",  "лист клена", "тоска"],
        4 => ["пожар" , "огонь" , "магма", "кровь", "труселя Михалыча",],
        5 => ["луна"  , "осень" , "солома", "одуванчик",],
        6 => ["море"  , "небо"  , "алкаш", "гомосексуалист", "фингал",]
    ];

    static public function init()
    {
        $i = 1;
        $str = '';
        $answer = '';
        while($i < 5){
            $j = rand(1, 6); //генерируем номер цвета случайно
            $colorWord[$i][0] = array_rand(self::$issues[$j]);
            /*$colorWord[$i][1] = self::$issues[$j][$colorArr[$i][0]];
            $str .= $i . ' - ' . $colorArr[$i][1] . "; ";*/
            $i++;
        }
        return $str;
    }

    static private function genXchar($length){
        $chars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLMNBVCXZ123654789_$-?!@#%&=';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

    private function genCollorArr($colorWord)
    {
        for($i = 1; $i<7; $i++){

        }
    }
}
