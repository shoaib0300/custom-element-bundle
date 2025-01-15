<?php

namespace App\CustomElementsBundle\Classes;

use Contao\Frontend;

class CustomElement extends Frontend
{
    public static function print()
    {
        print_r('function print() in class');
    }
}
