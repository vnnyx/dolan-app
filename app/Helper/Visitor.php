<?php

namespace App\Helper;

class Visitor
{
    public static function convertVisitor(int $visitor) : string{
        if ($visitor >= 10000 && $visitor < 1000000){
            return round($visitor/1000) . "K";
        }elseif($visitor >= 1000000 && $visitor < 1000000000){
            return round($visitor/1000000) . "M";
        }elseif ($visitor >= 1000000000 && $visitor < 1000000000000){
            return round($visitor/1000000000) . "B";
        }else{
            return $visitor;
        }
    }
}
