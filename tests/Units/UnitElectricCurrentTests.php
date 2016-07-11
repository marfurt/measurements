<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCurrent;

class UnitElectricCurrentTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_amperes_as_base_unit()
	{
		$this->assertTrue(UnitElectricCurrent::baseUnit() == UnitElectricCurrent::amperes(), "Electric current should define amperes as its base unit.");
	}

	/** @test */
	public function it_converts_electric_currents()
	{
		$base = new Measurement(1, UnitElectricCurrent::baseUnit());

		$megaamperes = $base->convertTo(UnitElectricCurrent::megaamperes());
		$kiloamperes = $base->convertTo(UnitElectricCurrent::kiloamperes());
		$amperes = $base->convertTo(UnitElectricCurrent::amperes());
		$milliamperes = $base->convertTo(UnitElectricCurrent::milliamperes());
		$microamperes = $base->convertTo(UnitElectricCurrent::microamperes());

		$this->assertTrue($megaamperes->value() == 1E-6, "{$base} converted to megaamperes should be equal to 1E-6 MA instead of {$megaamperes}.");
		$this->assertTrue($kiloamperes->value() == 0.001, "{$base} converted to kiloamperes should be equal to 0.001 kA instead of {$kiloamperes}.");
		$this->assertTrue($amperes->value() == 1.0, "{$base} converted to amperes should be equal to 1 A instead of {$amperes}.");
		$this->assertTrue($milliamperes->value() == 1000, "{$base} converted to milliamperes should be equal to 1000 mA instead of {$milliamperes}.");
		$this->assertTrue($microamperes->value() == 1E+6, "{$base} converted to microamperes should be equal to 1E+6 µA instead of {$microamperes}.");
	}

}