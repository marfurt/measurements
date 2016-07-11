<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricResistance;

class UnitElectricResistanceTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_ohms_as_base_unit()
	{
		$this->assertTrue(UnitElectricResistance::baseUnit() == UnitElectricResistance::ohms(), "Electric resistance should define ohms as its base unit.");
	}

	/** @test */
	public function it_converts_electric_resistances()
	{
		$base = new Measurement(1, UnitElectricResistance::baseUnit());

		$megaohms = $base->convertTo(UnitElectricResistance::megaohms());
		$kiloohms = $base->convertTo(UnitElectricResistance::kiloohms());
		$ohms = $base->convertTo(UnitElectricResistance::ohms());
		$milliohms = $base->convertTo(UnitElectricResistance::milliohms());
		$microohms = $base->convertTo(UnitElectricResistance::microohms());

		$this->assertTrue($megaohms->value() == 1.0 / 1E+6, "{$base} converted to megaohms should be equal to 1E-6 Ω instead of {$megaohms}.");
		$this->assertTrue($kiloohms->value() == 0.001, "{$base} converted to kiloohms should be equal to 0.001 kΩ instead of {$kiloohms}.");
		$this->assertTrue($ohms->value() == 1.0, "{$base} converted to ohms should be equal to 1 Ω instead of {$ohms}.");
		$this->assertTrue($milliohms->value() == 1000.0, "{$base} converted to milliohms should be equal to 1000 mΩ instead of {$milliohms}.");
		$this->assertTrue($microohms->value() == 1.0 / 1E-6, "{$base} converted to microohms should be equal to 1E+6 µΩ instead of {$microohms}.");
	}

}