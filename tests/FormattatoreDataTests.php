<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\lezione29\FormattatoreData;

class FormattatoreDataTest extends TestCase
{
    public function testOttieniDataCorrente()
    {
        $formattatore = new FormattatoreData(); // Istanza creata direttamente nel test
        $dataAttesa = date("Y-m-d");
        $this->assertEquals($dataAttesa, $formattatore->ottieniDataCorrente()); //Verifica che i due valori passati come argomenti siano uguali.
    }

    public function testOttieniDataFormato1()
    {
        $formattatore = new FormattatoreData(); // Istanza creata direttamente nel test
        $dataAttesa = date("Y/m/d");
        $this->assertEquals($dataAttesa, $formattatore->ottieniDataFormato1());
    }

    public function testOttieniDataFormato2()
    {
        $formattatore = new FormattatoreData(); // Istanza creata direttamente nel test
        $dataAttesa = date("y.m.d");
        $this->assertEquals($dataAttesa, $formattatore->ottieniDataFormato2());
    }

    public function testOttieniDataFormato3()
    {
        $formattatore = new FormattatoreData(); // Istanza creata direttamente nel test
        $dataAttesa = date("d-m-y");
        $this->assertEquals($dataAttesa, $formattatore->ottieniDataFormato3());
    }
}


//$formattatore1 = new FormattatoreDataTest();
