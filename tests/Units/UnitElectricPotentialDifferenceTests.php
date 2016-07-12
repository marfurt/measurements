<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricPotentialDifference;

class UnitElectricPotentialDifferenceTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_volts_as_base_unit()
	{
		$this->assertTrue(UnitElectricPotentialDifference::baseUnit() == UnitElectricPotentialDifference::volts(), "Electric potential difference should define volts as its base unit.");
	}

	/** @test */
	public function it_converts_electrical_potential_differences()
	{
		$base = new Measurement(1, UnitElectricPotentialDifference::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitElectricPotentialDifference::megavolts()), 1E-6, $base, "megavolts");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricPotentialDifference::kilovolts()), 0.001, $base, "kilovolts");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricPotentialDifference::volts()), 1.0, $base, "volts");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricPotentialDifference::millivolts()), 1000, $base, "millivolts");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricPotentialDifference::microvolts()), 1E+6, $base, "microvolts");
	}
	
}