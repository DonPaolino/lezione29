<?php declare(strict_types=1);

namespace Paolo\lezione29;

class FormattatoreData
{
    public static function ottieniDataCorrente()
    {
        return date("Y-m-d");
    }

    public static function ottieniDataFormato1()
    {
        return date("Y/m/d");
    }

    public static function ottieniDataFormato2()
    {
        return date("y.m.d");
    }

    public static function ottieniDataFormato3()
    {
        return date("d-m-y");
    }
}

