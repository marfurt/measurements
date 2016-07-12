<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricResistance;

class UnitElectricResistanceTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_ohms_as_base_unit()
	{
		$this->assertTrue(UnitElectricResistance::baseUnit() == UnitElectricResistance::ohms(), "Electric resistance should define ohms as its base unit.");
	}

	/** @test */
	public function it_converts_electric_resistances()
	{
		$base = new Measurement(1, UnitElectricResistance::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitElectricResistance::megaohms()), 1.0 / 1E+6, $base, "megaohms");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricResistance::kiloohms()), 0.001, $base, "kiloohms");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricResistance::ohms()), 1.0, $base, "ohms");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricResistance::milliohms()), 1000, $base, "milliamperes");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricResistance::microohms()), 1E+6, $base, "microohms");
	}

}