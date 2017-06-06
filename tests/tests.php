<?php
/**
 * tests.php
 *
 * %DESC BLOCK%
 *
 * @author Nicolas DUPRE
 * @release 02/06/2017
 * @version 1.0.0
 * @package Index
 */
/**
 * Version : 1.0.0 - Release : 02/06/2017 - Author : Nicolas DUPRE
 *
 * ### Version 1.0.0 :: xx.xx.2017
 *
 * • Première Release
 *
 *
 * ### Description Fonctionnelle
 *
 *
 * ### Détail de la fonction
 *
 * @param void
 *
 * @return void
 */
use Astronomical\Astronomical;

require_once "src/Astronomical/Astronomical.php";

class AstronomicalTest extends PHPUnit_Framework_TestCase
{
    public function testX()
    {
        $as = new Astronomical();
        $this->assertEquals(true, $as->hello());
        $this->assertEquals(false, $as->hello(false));
    }
}